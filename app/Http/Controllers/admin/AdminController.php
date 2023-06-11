<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\Producto;
use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\historiaClinica;
use Illuminate\Support\Facades\Hash;

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
public function formularioHistorias(){
    $ultimoId = historiaClinica::latest('id')->value('id');
    $idFinal=$ultimoId+1;
    return view("Admin_views.Form_historia_clinica");
}
public function storeHistoriaClinica(Request $request){
    $request->validate([
        'nombre_mascota'=>'required|string|max:250',
        'sexo_mascota'=>'required|string|max:250',
        'peso_mascota'=>'required|string|max:250',
        'especie'=>'required|string|max:250',
        'edad_mascota'=>'required|string|max:250',
        'esterilizado'=>'required|string|max:250',
        'raza'=>'required|string|max:250',
        'color_mascota'=>'required|string|max:250',
        'medicina_preventiva'=>'required|string|max:250',
        'nombre_owner'=>'required|string|max:250',
        'telefono'=>'required|string|max:15',
        'direccion'=>'required|string|max:250',
        'fc'=>'required|string|max:50',
        'fr'=>'required|string|max:50',
        'temperatura'=>'required|string|max:50',
        'llenado_capilar'=>'required|string|max:250',
        'pulso'=>'required|string|max:250',
        'diagnostico_diferencial'=>'required|string|max:250',
        'diagnostico_final'=>'required|string|max:250',
        'pruebas_de_laboratorio'=>'required|string|max:250',
        'tratamiento'=>'required|string|max:250',
    
    ]);
    historiaClinica::create([
        'nombre_mascota'=> $request->nombre_mascota,
        'sexo_mascota'=> $request->sexo_mascota,
        'peso_mascota'=> $request->peso_mascota,
        'especie_mascota'=> $request->especie,
        'edad_mascota'=> $request->edad_mascota,
        'esterilizar_mascota'=> $request->esterilizado,
        'raza_mascota'=> $request->raza,
        'color_mascota'=> $request->color_mascota,
        'medicina_preventiva'=> $request->medicina_preventiva,
        'nombre_dueño'=> $request->nombre_owner,
        'telefono_dueño'=> $request->telefono,
        'direccion_dueño'=> $request->direccion,
        'fc'=> $request->fc,
        'fr'=> $request->fr,
        'temperatura'=> $request->temperatura,
        'llenado_capilar'=> $request->llenado_capilar,
        'pulso'=> $request->pulso,
        'diagnostico_diferencial'=> $request->diagnostico_diferencial,
        'diagnostico_final'=> $request->diagnostico_final,
        'test_laboratorio'=> $request->pruebas_de_laboratorio,
        'tratamiento'=> $request->tratamiento,
    ]);return redirect()->route('historiasClinicasFormulario')->withSuccess('Datos almacenados correctamente!');
}
public function crudHistorias(){
return view("Admin_views.crud_historia",['historia'=>historiaClinica::all()]);
}
public function deleteHistoria(Request $request){
    $request->validate([
        'id' => 'required|integer|max:100',
    ]);
    $id = $request->input('id');
    
    $historia = historiaClinica::find($id);
    
    $historia->delete();
    return redirect()->route('listaHistorias')->withSuccess('Historia eliminada correctamente!');


}
public function editarHistoria($id){
    $historia= historiaClinica::find($id);
    if (!$historia) {
        return redirect()->back()->withErrors("La historia no existe");
    }      
    return view('Admin_views.editar_historia_clinica',['historia' => $historia]);
}
public function updateHistoria(request $request){
    $id = $request->input('id');
    $historia = historiaClinica::find($id);
    $historia->nombre_mascota = $request->input('nombre_mascota');
    $historia->sexo_mascota = $request->input('sexo_mascota');
    $historia->peso_mascota = $request->input('peso_mascota');
    $historia->especie_mascota = $request->input('especie');
    $historia->edad_mascota = $request->input('edad_mascota');
    $historia->esterilizar_mascota = $request->input('esterilizado');
    $historia->raza_mascota = $request->input('raza');
    $historia->color_mascota = $request->input('color_mascota');
    $historia->medicina_preventiva = $request->input('medicina_preventiva');
    $historia->nombre_dueño = $request->input('nombre_owner');
    $historia->telefono_dueño = $request->input('telefono');
    $historia->direccion_dueño = $request->input('direccion');
    $historia->fc = $request->input('fc');
    $historia->fr = $request->input('fr');
    $historia->temperatura = $request->input('temperatura');
    $historia->llenado_capilar = $request->input('llenado_capilar');
    $historia->pulso = $request->input('pulso');
    $historia->diagnostico_diferencial = $request->input('diagnostico_diferencial');
    $historia->diagnostico_final = $request->input('diagnostico_final');
    $historia->test_laboratorio = $request->input('pruebas_de_laboratorio');
    $historia->tratamiento = $request->input('tratamiento');

    $historia->save();
    return redirect()->route('listaHistorias')->withSuccess("Los datos se han modificado correctamente!");
    ;
}
public function crudEmpleados(){

return view('Admin_views.crud_gestion_empleados');

}
public function ingresarEmpleado(Request $request){
    $request->validate([
        'name' => 'required|string|max:250',
        'apellido' => 'required|string|max:250',
        'documento' => 'required|string|max:250',
        'celular' => 'required|string|max:250',
        'direccion' => 'required|string|max:250',
        'email' => 'required|email|max:250|unique:users',
        'password' => 'required|min:8|confirmed'
    ]);

    empleado::create([
        'name' => $request->name,
        'apellido' => $request->apellido,
        'documento' => $request->documento,
        'celular' => $request->celular,
        'direccion' => $request->direccion,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);


}
}