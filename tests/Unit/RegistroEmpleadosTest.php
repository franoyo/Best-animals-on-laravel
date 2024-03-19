<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Http\Controllers\admin\AdminController;
class RegistroEmpleadosTest extends TestCase
{
    

    public function testRegistroDeEmpleadoExitoso()
    {
        $datosUsuario = [
            'name' => 'Usuario de Prueba',
            'apellido' => 'Apellido de Prueba',
            'documento' => '12345678',
            'celular' => '1234567890',
            'direccion' => 'Dirección de Prueba',
            'email' => 'prueba22@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'rol'=>4,
        ];

        $request = new Request($datosUsuario);
        $controller = new AdminController;
        $response = $controller->ingresarEmpleado($request);

        $this->assertDatabaseHas('empleados', [
            'email' => 'prueba22@example.com',
            'celular' => '1234567890',
            'documento' => '12345678',
            'rol'=>4,
            
            

        ]);
        $this->assertEquals(route('listaEmpleados'), $response->headers->get('Location'));
    }
}
