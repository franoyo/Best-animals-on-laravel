<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    function register()
    {
        return view('auth.registrarse');
    }
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

    public function dashboard(Request $request)
    {
        if (Auth::check() and auth()->user()->rol=="cliente") {     
    return view('auth.dashboard'); 
        }elseif (Auth::check() and auth()->user()->rol!=="cliente" or Auth::guard('empleado')->user()->rol!=="cliente") {
            $this->logout($request);
        }
       
        return  redirect()->route('login')
            ->withErrors([
                'email' => 'Porfavor inicie sesion para acceder al dashboard.',
            ])->onlyInput('email');
    }
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
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Ha cerrado sesión con éxito!');
    }
}
