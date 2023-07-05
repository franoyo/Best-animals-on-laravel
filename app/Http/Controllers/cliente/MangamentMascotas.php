<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\mascota;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MangamentMascotas extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.cliente');
    }

    public function crudMascotas(){
//accede al usuario autenticado utilizando Auth::user()
        $usuario = Auth::user();
        //
        $mascotas = $usuario->mascotas;
return view("Cliente_views.form_add_mascota",['mascotas'=>$mascotas]);

    }

    public function formMascota(){
        $nowData=Carbon::now()->format('Y-m-d');
return view("Cliente_views.formulario_añadir_mascota",['fecha'=>$nowData]);
    }
    public function calcularEdadMascota($fechaNacimiento){
        
        $fechaNacimiento = Carbon::createFromFormat('Y-m-d', $fechaNacimiento);
        $fechaActual = Carbon::now();
        if ($fechaNacimiento->diffInDays($fechaActual)<=30) {
            $edad=$fechaNacimiento->diffInDays($fechaActual). " dias";
            return $edad;
        }elseif ($fechaNacimiento->diffInDays($fechaActual)>30 and $fechaNacimiento->diffInDays($fechaActual)<=365 ) {
            $edad=$fechaNacimiento->diffInMonths($fechaActual). " meses";
            return $edad;
        }elseif ($fechaNacimiento->diffInDays($fechaActual)>365) {
         $edad=$fechaNacimiento->diffInYears($fechaActual). " años";
         return $edad;
        }
        
    }

    public function storeMascota(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:250',
            'raza' => 'required|string|max:250',
            'genero' => 'required|string|max:250',
            'especie' => 'required|string|max:250',
            'color' => 'required|string|max:250',
            'fecha_nacimiento' => 'required|string|max:250',
        ]);
        $edad = $this->calcularEdadMascota($request->fecha_nacimiento);
$usuario=Auth::user();

        $mascota= $usuario->mascotas()->create([
            'nombre' =>$request->nombre,
            'raza' => $request->raza,
            'genero' =>$request->genero,
            'especie' =>$request->especie,
            'color' =>$request->color,
            'fecha_nacimiento' =>$request->fecha_nacimiento ,
            'edad'=>$edad,

        ]);
        return redirect()->back()-> withSuccess("Mascota creada exitosamente");



    }
}
