<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class restablecerContraseñaEmpleadoController extends Controller
{
    public function broker()
    {
        return Password::broker('empleados');
    }
       // Sobrescribe el método "showLinkRequestForm" para mostrar la vista correspondiente a empleados
       public function vistaRestablecerEmpleado()
       {
           return view('auth.RestablecerEmpleado.reset_password_empleado');
       }

       public function enviarCorreoEmpleado(Request $request){
        $request->validate(['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        
        );
        return $response == Password::RESET_LINK_SENT
        ? redirect()->route('recuperarContraseñaEmpleado')->with('status', trans($response))
        : back()->withErrors(['email' => trans($response)]);
       }
       public function mostrarFormDeReseteoEmpleado(Request $request, $tokenSito = null)
       {
           return view('auth.RestablecerEmpleado.token_reset_empleado')->with(
               ['token' => $tokenSito, 'email' => $request->email]
           );
       }
}
