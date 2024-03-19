<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\Veterinario\VeterinarioController;
use Illuminate\Http\Request;

class AgendarHistoriaClinicaTest extends TestCase
{
    public function test_store_historia_clinica_valid_data()
    {
        $controller = new VeterinarioController();

        $request = new Request([
            'nombre_mascota' => 'Firulais',
            'sexo_mascota' => 'Macho',
            'peso_mascota' => '10 kg',
            'especie' => 'Perro',
            'edad_mascota' => '2 años',
            'esterilizado' => 'No',
            'raza' => 'Labrador',
            'color_mascota' => 'Negro',
            'medicina_preventiva' => 'Vacunación',
            'nombre_owner' => 'Juan Pérez',
            'telefono' => '1234567890',
            'direccion' => 'Calle 123',
            'fc' => '80 bpm',
            'fr' => '20 rpm',
            'temperatura' => '38°C',
            'llenado_capilar' => 'Normal',
            'pulso' => 'Regular',
            'diagnostico_diferencial' => 'Sin problemas aparentes',
            'diagnostico_final' => 'Buena salud general',
            'pruebas_de_laboratorio' => 'Hematología completa',
            'tratamiento' => 'Antibióticos por 7 días',
        ]);

        $response = $controller->storeHistoriaClinicaVet($request);

        // Verificar que la redirección sea la esperada
        $this->assertInstanceOf(\Illuminate\Http\RedirectResponse::class, $response);
        $this->assertEquals('http://localhost/historiasClinicasFormulario.veterinario', $response->getTargetUrl());

    }
}
