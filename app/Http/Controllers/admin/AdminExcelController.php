<?php

namespace App\Http\Controllers\admin;

use App\Exports\EmpleadosExport;
use App\Exports\HistoriasClinicasExport;
use App\Exports\ProductoExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Models\Empleado;
use App\Models\historiaClinica;
use App\Models\Producto;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    public function exportExcelEmpleadosAdmin(){
        if (session()->has('resultados_busqueda')) {
            // Utiliza los resultados de la búsqueda almacenados en la variable de sesión
            $empleados = session('resultados_busqueda');
        } else {
            // Si no hay resultados en la variable de sesión, obtener todos los usuarios
            $empleados = Empleado::where('rol', '!=', 'administrador')->get();
        }
    
        // Generar el reporte en Excel y pasar los resultados
        return Excel::download(new EmpleadosExport($empleados), 'EmpleadosReport.xlsx');

    }

    public function exportExcelHistoriasAdmin(){
        if (session()->has('resultados_busqueda')) {
            // Utiliza los resultados de la búsqueda almacenados en la variable de sesión
            $historia = session('resultados_busqueda');
        } else {
            // Si no hay resultados en la variable de sesión, obtener todos los usuarios
            $historia = historiaClinica::all();
        }
    
        // Generar el reporte en Excel y pasar los resultados
        return Excel::download(new HistoriasClinicasExport($historia), 'HistoriasClinicasReport.xlsx');

    }
    public function exportExcelProductosAdmin(){
        if (session()->has('resultados_busqueda')) {
    
            $producto = session('resultados_busqueda');

            // Elimina la columna 'imagen' de la colección de productos
        $producto = $producto->map(function ($item) {
            unset($item['imagen']); // Reemplaza 'imagen' con el nombre real de la columna si es diferente
            return $item;
        });
        } else {
            $producto = Producto::select('id', 'descripcion', 'marca','peso','stock','precio','ubicacion','vencimiento',DB::raw("'' as imagen"),'created_at','updated_at')
            ->get();
        }
        return Excel::download(new ProductoExport($producto), 'ProductosReport.xlsx');

    }
}
