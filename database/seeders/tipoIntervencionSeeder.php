<?php

namespace Database\Seeders;

use App\Models\tipoIntervencion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoIntervencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoIntervencion::create([
            'nombre' => 'Queja',
            'estado' => 'Activo',
        ]);

        tipoIntervencion::create([
            'nombre' => 'Oficio',
            'estado' => 'Activo',
        ]);

        tipoIntervencion::create([
            'nombre' => 'Operativo',
            'estado' => 'Activo',
        ]);
    }
}
