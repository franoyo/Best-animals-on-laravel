<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cita;

class gestionCitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.cliente');
    }
    public function storeCita(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'apellido' => 'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'documento' => 'required|string|max:250|min:8',
            'celular' => 'required|min:6|string|max:250',
            'direccion' => 'required|string|max:250|min:6',
            'email' => 'required|custom_email|max:250|',
            'nombre_mascota_id'=>'required|int|min:1|max:250',
            'nombre_mascota_real'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'raza'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'genero'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'color'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'especie'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',

        ]);
        cita::create([
            'nombre_dueño'=>$request->nombre,
            'apellido_dueño'=>$request->apellido,
            'documento'=>$request->documento,
            'celular'=>$request->celular,
            'direccion'=>$request->direccion,
            'email'=>$request->email,
            'nombre_mascota_id'=>$request->nombre_mascota_id,
            'nombre_mascota_real'=>$request->nombre_mascota_real,
            'raza_mascota'=>$request->raza,
            'genero_mascota'=>$request->genero,
            'color_mascota'=>$request->color,
            'especie_mascota'=>$request->especie,
            'fecha_nacimiento'=>$request->fecha_nacimiento
            
            


        ]);
        return redirect()->back()->withSuccess("Cita agendada correctamente");
}
}