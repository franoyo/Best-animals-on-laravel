<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\cliente\gestionCitasController;
use Illuminate\Http\Request;
use App\Models\cita;

class AgendarCitaTest extends TestCase
{
    public function testStoreCita()
    {
        $request = new Request([
            'nombre' => 'John',
            'apellido' => 'Doe',
            'documento' => '12345678',
            'celular' => '1234567890',
            'direccion' => '123 Main St',
            'email' => 'john@example.com',
            'nombre_mascota_id' => 1,
            'nombre_mascota_real' => 'Buddy',
            'raza' => 'Labrador',
            'genero' => 'Macho',
            'color' => 'Negro',
            'especie' => 'Perro',
            'fecha_nacimiento' => '2015-05-15',
            'servicio_id' => '1',
            'fecha_cita' => '2024-02-14',
            'hora_cita' => '09:00'
        ]);

        $controller = new GestionCitasController();
        $response = $controller->storeCita($request);

        // Asegurar que la redirección sea exitosa
        $this->assertTrue($response->isRedirect());
        // Asegurar que la redirección sea a la página anterior
        $this->assertEquals(url()->previous(), $response->getTargetUrl());
    }
}
