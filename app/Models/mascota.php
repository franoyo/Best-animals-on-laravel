<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'raza',
        'genero',
        'edad',
        'especie',
        'fecha_nacimiento',
        'color',
        'activo'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
