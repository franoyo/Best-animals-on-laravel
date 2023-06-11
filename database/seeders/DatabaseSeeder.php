<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'apellido'=>'admin',
             'documento'=>'11111111',
             'direccion'=>'calle 127',
             'celular'=>'3026541236',
             'email' => 'test@example.com',
             'password'=> bcrypt("admin2003"),
             'rol'=>'cliente',
         ]);
    }
}
