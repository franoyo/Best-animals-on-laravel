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
        $producto= Producto::find($id);
        if (!$producto) {
            return redirect()->back()->withErrors("El producto no existe");
        }      
        return view('Admin_views.editar_producto',['producto' => $producto]);
    }
    public function updateProducto(Request $request){
        $id = $request->input('id');
        $producto = Producto::find($id);
        $producto->descripcion = $request->input('descripcion_producto');
        $producto->marca = $request->input('marca_producto');
        $producto->peso = $request->input('peso_producto');
        $producto->stock = $request->input('stock_producto');
        $producto->precio = $request->input('precio_producto');
        $producto->ubicacion = $request->input('ubicacion_producto');
        $producto->vencimiento = $request->input('fecha_vencimiento_producto');

        if ($request->hasFile('imagen_producto')) {
            $imagen = $request->file('imagen_producto');
    
            // Eliminar la imagen existente en la ruta correspondiente
            Storage::delete($producto->imagen);
    
            // Guardar la nueva imagen en la misma ruta
            $rutaImagen = $imagen->store('public/images');
            $rutaRelativaImagen = Storage::url($rutaImagen);
            $producto->imagen = $rutaRelativaImagen;
        }
    
        // Guardar los cambios en la base de datos
        $producto->save();
        return redirect()->route('listaProductos')->withSuccess('Datos modificados correctamente!');
    
}
public function verProducto($id){
    $producto= Producto::find($id);
    if (!$producto) {
        return redirect()->back()->withErrors("El producto no existe");
    }  
    return view('Admin_views.ver_producto',['producto' => $producto]);
}
}