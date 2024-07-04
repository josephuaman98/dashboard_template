<?php

namespace Database\Seeders;

use App\Models\Infraccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfraccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infraccion::create([
            'codigo' => '1',
            'descripcion' => 'Descripción 1',
            'monto' => 100.50,
            'medida_complementaria' => 'Medida 1',
        ]);
        Infraccion::create([
            'codigo' => '2',
            'descripcion' => 'Descripción detallada del primer registro.',
            'monto' => 150.75,
            'medida_complementaria' => 'Medida 2',
        ]);
        Infraccion::create([
            'codigo' => '3',
            'descripcion' => 'Registro con otro monto y medida.',
            'monto' => 75.25,
            'medida_complementaria' => 'Medida 3',
        ]);
        Infraccion::create([
            'codigo' => '4',
            'descripcion' => 'Descripción única',
            'monto' => 200.00,
            'medida_complementaria' => 'Medida 4',
        ]);
        Infraccion::create([
            'codigo' => '5',
            'descripcion' => 'Descripción con monto diferente.',
            'monto' => 120.30,
            'medida_complementaria' => 'Medida 5',
        ]);
        Infraccion::create([
            'codigo' => '6',
            'descripcion' => 'Otra descripción detallada.',
            'monto' => 180.50,
            'medida_complementaria' => 'Medida 6',
        ]);
        Infraccion::create([
            'codigo' => '7',
            'descripcion' => 'Registro con monto elevado.',
            'monto' => 500.00,
            'medida_complementaria' => 'Medida 7',
        ]);
    }
}
