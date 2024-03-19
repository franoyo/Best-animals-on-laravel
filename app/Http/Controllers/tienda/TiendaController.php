<?php

namespace App\Http\Controllers\tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class TiendaController extends Controller
{
    function showTienda(){
return view("tienda",['tarjetas'=>Producto::all()]);

    }
    public function agregarAlCarrito(Request $request)
    {
        $idProducto = $request->input('id-card');
        $cantidad = $request->input('cantidad-productos');
    
        // Recuperar el producto de la base de datos usando la ID
        $producto = Producto::find($idProducto);
    
        // Verificar si el producto existe
        if (!$producto) {
            return redirect()->back()->with('error', 'El producto no existe.');
        }
    
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito', []);
    
        // Agregar el producto al carrito
        $carrito[$idProducto] = [
            'id' => $idProducto,
            'cantidad'=>$cantidad,
            'descripcion' => $producto->descripcion,
            'imagen' => $producto->imagen,
            'precio' => $producto->precio
            // Agrega más atributos del producto según sea necesario
        ];
    
        // Guardar el carrito en la sesión
        session()->put('carrito', $carrito);
    
        return redirect()->back()->withSuccess("producto añadido al carrito");
    }
 function vaciarCarrito(){
    session()->forget('carrito');
    return redirect()->back()->with('success', 'El carrito se ha limpiado correctamente.');

 }
    

}
