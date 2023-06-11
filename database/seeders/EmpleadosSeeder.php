<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empleado::create([
            'name' => 'Test User',
            'apellido'=>'admin',
            'documento'=>'11111111',
            'direccion'=>'calle 127',
            'celular'=>'3026541236',
            'email' => 'admin@gmail.com',
            'password'=> hash::make("admin2003"),
            'rol'=>'administrador',
        ]);
    }
}
