<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class AdminExcelController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function exportExcelAdmin() 
    {
    if (session()->has('resultados_busqueda')) {
        // Utiliza los resultados de la búsqueda almacenados en la variable de sesión
        $usuarios = session('resultados_busqueda');
    } else {
        // Si no hay resultados en la variable de sesión, obtener todos los usuarios
        $usuarios = User::all();
    }

    // Generar el reporte en Excel y pasar los resultados
    return Excel::download(new UsersExport($usuarios), 'usersReport.xlsx');
    }
}
