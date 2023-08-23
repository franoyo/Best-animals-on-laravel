<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\mascota;
use App\Models\servicio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Observers\MascotaObserver;
use App\Models\estado_cita;
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
        $mascotas = $usuario->mascotas()->where('activo', 1)->get();


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
            'nombre' => 'required|string|max:250|regex:/^[\pL\s\-]+$/u',
            'raza' => 'required|string|max:250|regex:/^[\pL\s\-]+$/u',
            'genero' => 'required|string|max:250|regex:/^[\pL\s\-]+$/u',
            'especie' => 'required|string|max:250|regex:/^[\pL\s\-]+$/u',
            'color' => 'required|string|max:250|regex:/^[\pL\s\-]+$/u',
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
    public function updateMascota(Request $request){
        $request->validate([
'nombre'=>'required|string|max:250|regex:/^[\pL\s\-]+$/u',
'raza'=>'required|string|max:250|regex:/^[\pL\s\-]+$/u',
'genero'=>'required|string|max:250|regex:/^[\pL\s\-]+$/u',
'especie'=>'required|string|max:250|regex:/^[\pL\s\-]+$/u',
'color'=>'required|string|max:250|regex:/^[\pL\s\-]+$/u',
'fecha_nacimiento'=>'required|string|max:250',


        ]);
        $id = $request->input('id');
        $mascota = mascota::find($id);
        $mascota->nombre = $request->input('nombre');
        $mascota->raza = $request->input('raza');
        $mascota->genero = $request->input('genero');
        $mascota->especie = $request->input('especie');
        $mascota->color = $request->input('color');
        $mascota->fecha_nacimiento = $request->input('fecha_nacimiento');

        MascotaObserver::updated($mascota);
    
    $mascota->save();
    return redirect()->back()->withSuccess("Mascota editada Correctamente");
    }
    public function inhabilitarBorrarMascota(Request $request){
        $request->validate([
            'id' => 'required|integer|max:100',
        ]);
        $id = $request->input('id');
        $inhabilitar=mascota::findOrfail($id);
     $inhabilitar->activo=0;
     $inhabilitar->save();

        return redirect()->back()->withSuccess("mascota eliminada correctamente");


    }
    public function formAgendarCita(){
        $usuario = Auth::user();

        $servicios = Servicio::where('activo', 1)->get();
        //
        $mascotas = $usuario->mascotas()->where('activo', 1)->get();
        return view("Cliente_views.form_agregar_cita",['mascotas'=>$mascotas,'servicios'=>$servicios]);
        
        }
        public function obtenerDatosMascotaAjax($id) {
            $mascota = Mascota::find($id);
        
            return response()->json([
                'nombre_mascota_real'=>$mascota->nombre,
                'raza' => $mascota->raza,
                'genero' => $mascota->genero,
                'color' => $mascota->color,
                'especie' => $mascota->especie,
                'fecha_nacimiento' => $mascota->fecha_nacimiento,
            ]);
        }
    
}
