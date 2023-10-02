<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cita;
use App\Models\estado_cita;
use App\Models\mascota;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
            'nombre_mascota_real'=>'required|string|min:2|max:250|regex:/^[\pL\s\-]+$/u',
            'raza'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'genero'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'color'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'especie'=>'required|string|min:3|max:250|regex:/^[\pL\s\-]+$/u',
            'servicio_id'=>'required|string|',
            'fecha_cita'=>'required|date|min:1|max:250',
            'hora_cita'=>'required|string|min:1|max:250',
            

        ]);
        $mascotaId = $request->nombre_mascota_id;
        $citaExistente = Cita::where('nombre_mascota_id', $mascotaId)
            ->where(function ($query) {
                $query->where('estado_cita', 1)
                      ->orWhere('estado_cita', 2);
            })
            ->first();

        if ($citaExistente) {
            // Si ya existe una cita con estado 1 o 2, mostrar un error
            return redirect()->back()->withErrors("La mascota ya tiene una cita activa.");
        }
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
            'fecha_nacimiento'=>$request->fecha_nacimiento,
            'servicio_id'=>$request->servicio_id,
            'fecha_cita'=>$request->fecha_cita,
            'hora_cita'=>$request->hora_cita

            
            


        ]);
        return redirect()->back()->withSuccess("Cita agendada correctamente");
}
public function CitasConfirmadas(){
    $usuario = Auth::user();
    $mascotas = $usuario->mascotas;
    $citasMascota = collect(); // Crear una colección vacía para almacenar las citas de todas las mascotas

foreach ($mascotas as $mascota) {
    $citasMascota = $citasMascota->concat($mascota->citas->where('estado_cita',2));
}
    
 $vista=view("Cliente_views.gestion_citas",['citas'=>$citasMascota]);
 return $vista;


}
public function cancelarCita(Request $request){
    $request->validate([
        'id' => 'required|integer|max:100',
    ]);
    $id = $request->input('id');
    $cambiarEstado=cita::findOrfail($id);
    $cambiarEstado->estado_cita=3;
    $cambiarEstado->save();
    return redirect()->back()->withSuccess("Cita cancelada correctamente");
}
public function citasPorAceptar(){
    $usuario = Auth::user();
    $mascotas = $usuario->mascotas;
    $citasMascota = collect(); // Crear una colección vacía para almacenar las citas de todas las mascotas

foreach ($mascotas as $mascota) {
    $citasMascota = $citasMascota->concat($mascota->citas->where('estado_cita',1));
}
$vista=view("Cliente_views.citas_por_confirmar",['citas'=>$citasMascota]);
 return $vista;

}
public function citasCanceladas(){
    $usuario = Auth::user();
    $mascotas = $usuario->mascotas;
    $citasMascota = collect(); // Crear una colección vacía para almacenar las citas de todas las mascotas

    foreach ($mascotas as $mascota) {
        $citasMascota = $citasMascota->concat(
            $mascota->citas->filter(function ($cita) {
                return $cita->estado_cita === 3 || $cita->estado_cita === 4;
            })
        );
    }
$vista=view("Cliente_views.citas_canceladas",['citas'=>$citasMascota]);
 return $vista;


}

}