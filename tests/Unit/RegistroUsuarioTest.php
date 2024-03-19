<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Http\Controllers\Auth\LoginRegisterController;

class RegistroUsuarioTest extends TestCase
{
    

    public function testRegistroDeUsuarioExitoso()
    {
        $datosUsuario = [
            'name' => 'Usuario de Prueba',
            'apellido' => 'Apellido de Prueba',
            'documento' => '12345678',
            'celular' => '1234567890',
            'direccion' => 'Dirección de Prueba',
            'email' => 'prueba12@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $request = new Request($datosUsuario);
        $controller = new LoginRegisterController;
        $response = $controller->store($request);

        $this->assertDatabaseHas('users', [
            'email' => 'prueba12@example.com',
            'celular' => '1234567890',
            'documento' => '12345678',
            
            

        ]);
        $this->assertEquals(route('sucessfully'), $response->headers->get('Location'));
    }
}

