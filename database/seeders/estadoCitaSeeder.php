<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\estado_cita;
class estadoCitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        estado_cita::create([

'estado'=>'por confirmar'

        ]);
        estado_cita::create([

            'estado'=>'Activa'
            
                    ]);
                    estado_cita::create([

                        'estado'=>'cancelada por el cliente'
                        
                                ]);
                                estado_cita::create([

                                    'estado'=>'cancelada por personal'
                                    
                                            ]);
                                            estado_cita::create([

                                                'estado'=>'atendida'
                                                
                                                        ]);
    }
}
