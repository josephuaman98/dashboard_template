<?php

namespace Database\Seeders;

use App\Models\Sancion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sancion::create([
            'nombre' => 'Clausura Temporal',
        ]);

        Sancion::create([
            'nombre' => 'Clausura Definitiva',
        ]);

        Sancion::create([
            'nombre' => 'Retiro de Animales',
        ]);

        Sancion::create([
            'nombre' => 'Demolición',
        ]);

        Sancion::create([
            'nombre' => 'Paralización de Obras',
        ]);

        Sancion::create([
            'nombre' => 'Retención',
        ]);

        Sancion::create([
            'nombre' => 'Ejecución y Restitución',
        ]);

        Sancion::create([
            'nombre' => 'Decomiso',
        ]);


        
    }
}
