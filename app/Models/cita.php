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
        'estado_cita'
    ];
}
