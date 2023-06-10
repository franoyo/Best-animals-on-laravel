<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historiaClinica extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'historias_clinicas';
    protected $fillable = [
        'nombre_mascota',
        'sexo_mascota',
        'peso_mascota',
        'especie_mascota',
        'edad_mascota',
        'esterilizar_mascota',
        'raza_mascota',
        'color_mascota',
        'medicina_preventiva',
        'nombre_dueño',
        'telefono_dueño',
        'direccion_dueño',
        'fc',
        'fr',
        'temperatura',
        'llenado_capilar',
        'pulso',
        'diagnostico_diferencial',
        'diagnostico_final',
        'test_laboratorio',
        'tratamiento',
    ];
}
