<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Veterinario\VeterinarioController;

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

    return view("tienda");
})->name('tienda');

route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/sucessfully', 'alert_register')->name('sucessfully');
    Route::post('/store', 'store')->name('store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
route::controller(AdminController::class)->group(function () {
    route::get('/admin', 'index')->name('admin');
    route::get('/caja', 'caja')->name('caja');
    route::get('/registroStock', 'stock')->name('registroStock');
    route::post('/storeStock', 'storeStock')->name('storeStock');
    route::get("/listaProductos", 'crudProductos')->name("listaProductos");
    route::post('/eliminarProducto', 'eliminarProducto')->name('eliminarProducto');
    route::get('/editarProducto/{id}', 'editarProducto')->name('editarProducto');
    route::get('/verProducto/{id}', 'verProducto')->name('verProducto');
    route::post('/updateProducto', 'updateProducto')->name('updateProducto');
});
route::controller(VeterinarioController::class)->group(function(){
route::get('/veterinario','veterinarioDashboard')->name('veterinario');


});