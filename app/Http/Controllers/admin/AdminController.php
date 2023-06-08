<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function index(){

        return view("Admin_views.dashboard_inicio_admin");
    }
    public function caja(){
        return view("Admin_views.dashboardCaja");
    }
    public function stock(){
        $ultimoId = Producto::latest('id')->value('id');
        $idFinal=$ultimoId+1;
        return view('Admin_views.admin_stock', ['captar' => $idFinal]);
    }
    public function crudProductos(){
return view("Admin_views.admin_crud_prductos",["Lista"=>Producto::all()]);

    }
    public function storeStock(Request $request){

if ($request->hasFile('imagen_producto')) {
    $imagen = $request->file('imagen_producto');
    $rutaImagen = $imagen->store('public/images');
    $rutaRelativaImagen = Storage::url($rutaImagen);

    $producto = Producto::create([
        'descripcion' => $request->descripcion_producto,
        'marca' => $request->marca_producto,
        'peso' => $request->peso_producto,
        'stock' => $request->stock_producto,
        'precio' => $request->precio_producto,
        'ubicacion' => $request->ubicacion_producto,
        'vencimiento' => $request->fecha_vencimiento_producto,
        'imagen' => $rutaRelativaImagen,
    ]);
}return redirect()->route('registroStock')->withSuccess('Datos almacenados correctamente!');

    }
    public function eliminarProducto(Request $request){
        
        $request->validate([
            'id' => 'required|integer|max:100',
        ]);
        $id = $request->input('id');
        
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('listaProductos')->withSuccess('Usuario eliminado correctamente!');
    }
    public function editarProducto($id){


    }
    
}
