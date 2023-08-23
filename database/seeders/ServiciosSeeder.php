<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\servicio;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        servicio::create([
            'nombre_servicio' => 'spa'
        ]);

        servicio::create([
            'nombre_servicio' => 'consulta medica'
        ]);

        servicio::create([
            'nombre_servicio' => 'vacunacion y desparacitacion'
        ]);

        servicio::create([
            'nombre_servicio' => 'cirujia y hospital'
        ]);

        servicio::create([
            'nombre_servicio' => 'profilaxis'
        ]);

        servicio::create([
            'nombre_servicio' => 'certificado de viaje'
        ]);

        servicio::create([
            'nombre_servicio' => 'guarderia de mascotas'
        ]);
    }
}
