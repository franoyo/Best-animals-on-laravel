<?php

namespace Tests\Unit;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Http\Controllers\cliente\gestionCitasController;
use Tests\TestCase;


class UpdateCitaTest extends TestCase
{
    /**
     * A basic unit test example.
     */
   public function testUpdateCita()
    {
        // Crear una cita de prueba
        $cita = Cita::create([
            'nombre_dueño' => 'John',
            'apellido_dueño' => 'Doe',
            'documento' => '12345678',
            'celular' => '1234567890',
            'direccion' => '123 Main St',
            'email' => 'john777@example.com',
            'nombre_mascota_id' => 1,
            'nombre_mascota_real' => 'Buddy',
            'raza_mascota' => 'Labrador',
            'genero_mascota' => 'Macho',
            'color_mascota' => 'Negro',
            'especie_mascota' => 'Perro',
            'fecha_nacimiento' => '2015-05-15',
            'servicio_id' => 1,
            'fecha_cita' => '2024-02-14',
            'hora_cita' => '09:00',
             'fecha' => '2024-02-15',
        ]);

        // Nuevos datos para la cita
        $nuevosDatos = [
            'nombre_dueño' => 'Jane',
            'apellido_dueño' => 'Smith',
            'documento' => '87654321',
            'celular' => '0987654321',
            'direccion' => '456 Elm St',
            'email' => 'jane@example.com',
            'nombre_mascota_real' => 'Max',
            'raza_mascota' => 'Golden Retriever',
            'genero_mascota' => 'Hembra',
            'color_mascota' => 'Dorado',
            'especie_mascota' => 'Perro',
            'fecha_nacimiento' => '2018-03-20',
            'servicio_id' => 2,
            'fecha_cita' => '2024-02-15',
            'hora_cita' => '10:00',
            'fecha' => '2024-02-15'        ];

        // Crear una instancia del controlador
        $controller = new GestionCitasController();

        // Crear una solicitud con los nuevos datos
        $request = new Request($nuevosDatos);
        $request->merge(['id' => $cita->id]); // Agregar el ID de la cita

        // Ejecutar el método updateCita
        $response = $controller->reagendarCita($request);

        // Verificar que la cita fue actualizada correctamente en la base de datos
        $this->assertDatabaseHas('citas', $nuevosDatos + ['id' => $cita->id]);

        // Verificar que la redirección sea exitosa
        $this->assertTrue($response->isRedirect());
        // Verificar que la redirección sea a la página anterior
        $this->assertEquals(url()->previous(), $response->getTargetUrl());
    } public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
