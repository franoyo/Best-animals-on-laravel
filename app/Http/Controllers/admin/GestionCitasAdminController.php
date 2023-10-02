<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cita;

class GestionCitasAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function citasPorConfirmarAdmin(){
        $cita = Cita::where('estado_cita', 1)->get();
        $vista=view("Admin_views.gestion_citas.citas_por_confirmar_admin",['citas'=>$cita]);
return $vista;
    }
    public function confirmarCita(Request $request){
        $request->validate([
            'id' => 'required|integer|max:100',
        ]);
        $id = $request->input('id');
        $cambiarEstado=cita::findOrfail($id);
        $cambiarEstado->estado_cita=2;
        $cambiarEstado->save();
        return redirect()->back()->withSuccess("Cita Confirmada Correctamente");
    }
    public function cancelarCitaEmpleado(Request $request){
        $request->validate([
            'id' => 'required|integer|max:100',
        ]);
        $id = $request->input('id');
        $cambiarEstado=cita::findOrfail($id);
        $cambiarEstado->estado_cita=4;
        $cambiarEstado->save();
        return redirect()->back()->withSuccess("Cita Cancelada Correctamente");
    }
    public function citasConfirmadas(){
        $cita =Cita::where('estado_cita', 2)->get();
        $vista=view("Admin_views.gestion_citas.citasConfirmadasAdmin",['citas'=>$cita]);
return $vista;
    }
    public function obtenerDatosCitaAjax($id) {
        $cita = Cita::find($id);
    
        return response()->json([
            'nombre_dueño'=>$cita->Mascota->user->name,
            'apellido'=>$cita->Mascota->user->apellido,
            'celular'=>$cita->Mascota->user->celular,
            'direccion'=>$cita->Mascota->user->direccion,
            'documento'=>$cita->Mascota->user->documento,
            'email'=>$cita->Mascota->user->email,
            'mascota_name'=>$cita->Mascota->nombre,
            'mascota_raza'=>$cita->Mascota->raza,
            'mascota_genero'=>$cita->Mascota->genero,
            'mascota_color'=>$cita->Mascota->color,
            'mascota_especie'=>$cita->Mascota->especie,
            'mascota_nacimiento'=>$cita->Mascota->fecha_nacimiento,
            'mascota_edad'=>$cita->Mascota->edad,
            'fecha_cita'=>$cita->fecha_cita,
            'hora_cita'=>$cita->hora_cita,
            'servicio_cita'=>$cita->servicio->nombre_servicio,
            'estado_cita'=>$cita->estadoCita->estado,
        ]);
    }
}
