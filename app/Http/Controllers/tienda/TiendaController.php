<?php

namespace App\Http\Controllers\tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class TiendaController extends Controller
{
    function showTienda()
    {
        return view("tienda", ['tarjetas' => Producto::all()]);
    }
    public function agregarAlCarrito(Request $request)
    {
        $idProducto = $request->input('id-card');
        $cantidad = $request->input('cantidad-productos');
    
        // Recuperar el producto de la base de datos usando la ID
        $producto = Producto::find($idProducto);
    
        // Verificar si el producto existe
        if (!$producto) {
            return response()->json(['error' => 'El producto no existe.'], 404);
        }
    
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito', []);
    
        // Agregar el producto al carrito
        $carrito[$idProducto] = [
            'id' => $idProducto,
            'cantidad' => $cantidad,
            'descripcion' => $producto->descripcion,
            'imagen' => $producto->imagen,
            'precio' => $producto->precio,
            'precioFinal' => $producto->precio * $cantidad
            // Agrega más atributos del producto según sea necesario
        ];
    
        // Guardar el carrito en la sesión
        session()->put('carrito', $carrito);
    
        return response()->json(['success' => true, 'message' => 'Producto añadido al carrito']);
    }
    function vaciarCarrito()
    {
        session()->forget('carrito');
        return redirect()->back()->withErrors("carrito vaciado correctamente!");
    }
    public function actualizarCantidadProducto(Request $request)
{
    $idProducto = $request->input('id');
    $cantidad = $request->input('cantidad');

    // Actualizar el carrito en la sesión con la nueva cantidad
    $carrito = session()->get('carrito', []);
    if (array_key_exists($idProducto, $carrito)) {
        $carrito[$idProducto]['cantidad'] = $cantidad;
        $precio = $carrito[$idProducto]['precio'];
        $carrito[$idProducto]['precioFinal'] = $cantidad * $precio;
       
        session()->put('carrito', $carrito);
        return response()->json(['success' => true]);
    }

    return response()->json(['error' => 'El producto no está en el carrito.'], 404);
}
    function vistaCheckout(){
        $carrito = session()->get('carrito', []);
        $total = 0;

        foreach ($carrito as $producto) {
            if (isset($producto['precioFinal'])) {
                $total += $producto['precioFinal'];
                $producto['precioFinal'] = number_format($producto['precioFinal'], 0, ',', '.');
            }
        }   
        $total = number_format($total, 0, ',', '.');
        return view("checkout", ['productos' => $carrito,'total'=>$total]);

    }
    function carritoActualizado(){
        $carrito = session()->get('carrito', []);
        $estilos = '.producto { color: blue; font-weight: bold; }'; 
        return response()->json(['carrito' => $carrito]);
    }
}
