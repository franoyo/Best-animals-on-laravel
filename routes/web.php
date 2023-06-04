<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
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

Route::get("/index", function(){

return view("index");

})->name('index');;
Route::get("/inicio", function(){

    return view("conocenos");
    
    })->name('inicio');
    Route::get("/servicios", function(){

        return view("servicios");
        
        })->name('servicios');
        Route::get("/spa", function(){

            return view("spa");
            
            })->name('spa');
            Route::get("/consulta", function(){

                return view("consulta");
                
                })->name('consulta');
                Route::get("/viaje", function(){

                    return view("viaje");
                    
                    })->name('viaje');
                    Route::get("/guarderia", function(){

                        return view("guarderia");
                        
                        })->name('guarderia');
                        Route::get("/informacion", function(){

                            return view("info");
                            
                            })->name('info');
                            Route::get("/tienda", function(){

                                return view("tienda");
                                
                                })->name('tienda');
                               
                                    route::controller(LoginRegisterController::class)->group(function(){
                                        Route::get('/login', 'login')->name('login');
                                            Route::get('/register', 'register')->name('register');
                                            Route::get('/sucessfully', 'alert_register')->name('sucessfully');
                                                Route::post('/store', 'store')->name('store');
                                                Route::post('/authenticate', 'authenticate')->name('authenticate');
                                                Route::get('/dashboard', 'dashboard')->name('dashboard');
                                                Route::post('/logout', 'logout')->name('logout');


                                    });


                                    