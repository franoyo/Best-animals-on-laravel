<?php

namespace App\Http\Controllers\Veterinario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.veterinario');
    }
    public function veterinarioDashboard(){

return view("layouts.plantilla");
    }
}
