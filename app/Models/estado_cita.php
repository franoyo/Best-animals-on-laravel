<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado_cita extends Model
{
    use HasFactory;
    protected $table = 'estado_cita';
    protected $fillable = [
       'estado'
    ];
}
