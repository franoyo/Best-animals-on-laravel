<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_servicio',
        'descripcion_servicio',
    ];
    public function cita()
    {
        
        return $this->hasOne(cita::class, 'servicio_id');
    }
}
