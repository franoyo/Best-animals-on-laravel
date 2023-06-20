<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;



class LoginRegisterController extends Controller
{
//aqui se usa un constructor con un middleware que ya viene por defecto en laravel que es guest
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }
//retorna la vista para registrarse en este caso el usuario
    function register()
    {
        return view('auth.registrarse');
    }
    //guarda los datos enviados por el formulario que son enviados por el metodo post en la tabla creada por defecto
    //con las migraciones "users".
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'apellido' => 'required|string|max:250',
            'documento' => 'required|string|max:250',
            'celular' => 'required|string|max:250',
            'direccion' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'documento' => $request->documento,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        return redirect()->route('sucessfully');
    }
    public function alert_register()
    {
        return view('auth.registro_alert');
    }
//como yo uso dos tablas para hacer login una de users y una de empleados en esta funcion de dashboard verifico la sesion
//y ademas de eso verifica el rol del cliente que sea "cliente"por lo cual en la base de datos en el campo de rol tiene que
//por defecto siempre el rol sea cliente,
//la seguridad de la aplicacion para que por ejemplo un cliente no pueda acceder al perfil del admin o algun perfil sensible de 
//algun empleado para eso tambien es el Auth::guard('empleado')
    public function dashboard(Request $request)
    {
        if (Auth::check() and auth()->user()->rol=="cliente") {     
    return view('auth.dashboard'); 
        }
       
        return  redirect()->route('login')
            ->withErrors([
                'email' => 'Porfavor inicie sesion para acceder al dashboard.',
            ])->onlyInput('email');
    }

    //primero intenta auntenticar en la tabla de users y despues en la de empleados
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intentar autenticar el usuario desde la tabla "users"
    if (Auth::attempt($credentials)) {
        $user = auth()->user();
        if ($user->rol == 'cliente') {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('Te has logueado correctamente como cliente!');
        }
    }
    // Intentar autenticar el usuario desde la tabla "empleados"
    if (Empleado::where('email', $request->email)->first()) {
        $empleadoCredentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
//aqui es donde se gesta el login por roles con su respectivo middleware para que por ejemplo un veterinario no pueda acceder
//al dashboard del admin para eso tambien cada uno tiene creado su controlador, el auth:guard es lo mas escensial hay que ir
//config/auth para que funcione en este caso auth::guard("empleado")
        if (Auth::guard('empleado')->attempt($empleadoCredentials)) {
            $empleado = auth()->guard('empleado')->user();
            if ($empleado->rol == 'veterinario') {
                $request->session()->regenerate();
                return redirect()->route('veterinario')->withSuccess('Te has logueado correctamente como veterinario!');
            } elseif ($empleado->rol == 'administrador') {
                $request->session()->regenerate();
                return redirect()->route('admin')->withSuccess('Te has logueado correctamente como administrador!');
            } elseif ($empleado->rol == 'cliente') {
                $request->session()->regenerate();
                return redirect()->route('dashboard')->withSuccess('Te has logueado correctamente como cliente!');
            }
        }
    }
    return back()->withErrors([
        'email' => 'Sus credenciales proporcionadas no coinciden en nuestros registros.',
    ])->onlyInput('email');
    }

    function login()
    {
        if (Auth::guard('empleado')->check()) {
            $empleado = auth()->guard('empleado')->user();
            if ($empleado->rol == 'veterinario') {
                return redirect()->route('veterinario');
            } elseif ($empleado->rol == 'administrador') {
                return redirect()->route('admin');
            }}
        return view('auth.login');
    }
    //sirve para cerrar sesion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Ha cerrado sesión con éxito!');
    }
    public function resetPassword(){
return view("auth.reset_password");
    }
    public function enviarEmailRestablecimiento(Request $request){
        $request->validate(['email' => 'required|email']);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? redirect()->route('recuperarContraseña')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
    public function mostrarFormDeReseteo(Request $request, $token = null)
    {
        return view('auth.token_reset_password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $response = $this->resetPasswordZ($request->email, $request->password, $request->token);

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('recuperarContraseña')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
    protected function resetPasswordZ($email, $password, $token)
{
    $credentials = [
        'email' => $email,
        'password' => $password,
        'password_confirmation' => $password,
        'token' => $token,
    ];

    $response = Password::reset($credentials, function ($user, $password) {
        $this->updateUserPassword($user, $password);
    });

    return $response;
}
protected function updateUserPassword($user, $password)
{
    $user->password = Hash::make($password);
    $user->save();
}

}
