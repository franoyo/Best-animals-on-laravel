<?php

use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Veterinario\VeterinarioController;
use App\Http\Controllers\Auth\restablecerContraseñaEmpleadoController;
use App\Http\Controllers\cliente\MangamentMascotas;
use App\Http\Controllers\cliente\gestionCitasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get("/index", function () {

    return view("index");
})->name('index');;
Route::get("/inicio", function () {

    return view("conocenos");
})->name('inicio');
Route::get("/servicios", function () {

    return view("servicios");
})->name('servicios');
Route::get("/spa", function () {

    return view("spa");
})->name('spa');
Route::get("/consulta", function () {

    return view("consulta");
})->name('consulta');
Route::get("/viaje", function () {

    return view("viaje");
})->name('viaje');
Route::get("/guarderia", function () {

    return view("guarderia");
})->name('guarderia');
Route::get("/informacion", function () {

    return view("info");
})->name('info');
Route::get("/tienda", function () {

    return view("tienda",['tarjetas'=>Producto::all()]);
})->name('tienda');

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/loginCita', 'loginCita')->name('loginCita');
    Route::get('/register', 'register')->name('register');
    Route::get('/sucessfully', 'alert_register')->name('sucessfully');
    Route::post('/store', 'store')->name('store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/recuperarContraseña', 'resetPassword')->name('recuperarContraseña');
    Route::post('/enviarEmailRestablecimiento', 'enviarEmailRestablecimiento')->name('password.sent');
    Route::get('/restablecerContraseña/{token}', 'mostrarFormDeReseteo')->name('password.reset');
    Route::post('/updatePassword', 'reset')->name('password.update');
    
});
Route::controller(gestionCitasController::class)->group(function () {
    Route::post('/almacenarCita.cliente', 'storeCita')->name('almacenarCita.cliente');

});
Route::controller(MangamentMascotas::class)->group(function () {
    Route::get('/mascotas.cliente', 'crudMascotas')->name('mascotas.cliente');
    Route::get('/añadirMascota.cliente', 'formMascota')->name('añadirMascota.cliente');
    Route::post('/almacenarMascota.cliente', 'storeMascota')->name('almacenarMascota.cliente');
    Route::post('/updateMascota.cliente', 'updateMascota')->name('updateMascota.cliente');
    Route::post('/eliminarMascota.cliente', 'inhabilitarBorrarMascota')->name('eliminarMascota.cliente');
    Route::get('/agendarCita', 'formAgendarCita')->name('agendarCita');
    Route::get('/obtener-datos-mascota-ajax/{id}', 'obtenerDatosMascotaAjax')->name('obtener-datos-mascota-ajax');

});
Route::controller(restablecerContraseñaEmpleadoController::class)->group(function(){
    Route::get('/recuperarContraseñaEmpleado', 'vistaRestablecerEmpleado')->name('recuperarContraseñaEmpleado');
    Route::post('/enviarEmailRestablecimientoEmpleado', 'enviarCorreoEmpleado')->name('empleado.password.sent');
    Route::get('/restablecerContraseñaEmpleado/{tokenSito}', 'mostrarFormDeReseteoEmpleado')->name('a.password.reset');
});
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin');
    Route::get('/caja', 'caja')->name('caja');
    Route::get('/generalProductos', 'vistaProductos')->name('generalProductos');
    Route::get('/registroStock', 'stock')->name('registroStock');
    Route::post('/storeStock', 'storeStock')->name('storeStock');
    Route::get("/listaProductos", 'crudProductos')->name("listaProductos");
    Route::post('/eliminarProducto', 'eliminarProducto')->name('eliminarProducto');
    Route::get('/editarProducto/{id}', 'editarProducto')->name('editarProducto');
    Route::get('/verProducto/{id}', 'verProducto')->name('verProducto');
    Route::post('/updateProducto', 'updateProducto')->name('updateProducto');
    Route::get('/historiasClinicasFormulario', 'formularioHistorias')->name('historiasClinicasFormulario');
    Route::post('/storeHistoria', 'storeHistoriaClinica')->name('storeHistoria');
    Route::get('/listaHistorias', 'crudHistorias')->name('listaHistorias');
    Route::post('/eliminaHistoria', 'deleteHistoria')->name('deleteHistoria');
    Route::get('/editarHistoria/{id}', 'editarHistoria')->name('editarHistoria');
    Route::post('/updateHistoria', 'updateHistoria')->name('updateHistoria');
    Route::get('/verHistoria/{id}', 'verHistoria')->name('verHistoria');
    Route::get('/listaEmpleados', 'crudEmpleados')->name('listaEmpleados');
    Route::post('/ingresarEmpleado', 'ingresarEmpleado')->name('ingresarEmpleado');
    Route::post('/eliminarEmpleado', 'eliminarEmpleado')->name('eliminarEmpleado');
    Route::post('/editarEmpleado', 'updateEmpleado')->name('editarEmpleado');
    Route::get('/listaClientes', 'crudClientes')->name('listaClientes');
    Route::post('/storeCliente', 'storeCliente')->name('storeCliente');
    Route::post('/deleteCliente', 'deleteCliente')->name('deleteCliente');
    Route::post('/editCliente', 'editCliente')->name('editCliente');
    Route::get('/reporteClientes', 'reporteClientes')->name('reporteClientes');
    Route::get('/reporteEmpleados', 'reporteEmpleados')->name('reporteEmpleados');
    Route::get('/reporteHistorias', 'reporteHistorias')->name('reporteHistorias');
    Route::get('/error400.admin', 'error400Admin')->name('error400.admin');
    Route::get('/reporteProductos', 'reporteProductos')->name('reporteProductos');
});
Route::controller(VeterinarioController::class)->group(function(){
Route::get('/veterinario','veterinarioDashboard')->name('veterinario');
Route::get('/historiasClinicasFormulario.veterinario', 'formularioHistoriasVet')->name('historiasClinicasFormulario.vet');
Route::post('/storeHistoria.vet', 'storeHistoriaClinicaVet')->name('storeHistoria.vet');
Route::get('/listaHistorias.vet', 'crudHistoriasVet')->name('listaHistorias.vet');
Route::post('/eliminaHistoria.vet', 'deleteHistoriaVet')->name('deleteHistoria.vet');
Route::get('/editarHistoria.vet/{id}', 'editarHistoriaVet')->name('editarHistoria.vet');
Route::post('/updateHistoria.vet', 'updateHistoriaVet')->name('updateHistoria.vet');
Route::get('/verHistoria.vet/{id}', 'verHistoriaVet')->name('verHistoria.vet');
});