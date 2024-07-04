<?php

namespace Database\Seeders;

use App\Models\Giro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Giro::create([
            'nombre' => 'Giro1',
        ]);
        Giro::create([
            'nombre' => 'Giro2',
        ]);
        Giro::create([
            'nombre' => 'Giro3',
        ]);
    }
}
