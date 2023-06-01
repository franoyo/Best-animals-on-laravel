<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

 function register(){
    return view('auth.register');
 }
 function store(Request $request){
    $request->validate([
        'nombre_registro' => 'required|string|max:250',
        'email_registro' => 'required|email|max:250|unique:users',
        'password_registro' => 'required|min:8|confirmed'
    ]);
    
      User::create([
            'nombre_registro' => $request->name,
            'email_registro' => $request->email,
            'password_registro' => Hash::make($request->password)
        ]);
        $credentials = $request->only('email_registro', 'password_registro');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
 }

 function login(){

    return view('auth.login');
 }

 function authenticate(Request $request){
    $credentials = $request->validate([
        'email_registro' => 'required|email',
        'password_registro' => 'required'
    ]);
    if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('TE HAS LOGGEADO CORRECTAMENTE');
        }

        return back()->withErrors([
            'email_registro' => 'NO HAS PROPORCIANDO LO DATOS CORRECTAMENTE.',
        ])->onlyInput('email_registro');


    
 }
 
 function dashboard(){
    if(Auth::check())
    {
        return view('auth.dashboard');
    }

    return redirect()->route('login')
        ->withErrors([
        'email_registro' => 'Please login to access the dashboard.',
    ])->onlyInput('email_registro');

 }

 function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login')
        ->withSuccess('HAS CERRADO SESION CORRECTAMENTE!');;

 }
}
