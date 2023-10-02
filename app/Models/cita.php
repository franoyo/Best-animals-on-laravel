<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_dueño',
        'apellido_dueño',
        'celular',
        'direccion',
        'documento',
        'email',
        'nombre_mascota_id',
        'nombre_mascota_real',
        'raza_mascota',
        'genero_mascota',
        'color_mascota',
        'especie_mascota',
        'fecha_nacimiento',
        'estado_cita',
        'servicio_id',
        'fecha_cita',
        'hora_cita'

    ];

    public function servicio()
    {
        return $this->belongsTo(servicio::class,'servicio_id');
    }
    public function Mascota()
    {
        return $this->belongsTo(mascota::class, 'nombre_mascota_id');
    }
    public function estadoCita()
    {
        return $this->belongsTo(estado_cita::class,'estado_cita');
    }
   
}
