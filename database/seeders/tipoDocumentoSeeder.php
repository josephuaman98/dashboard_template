<?php

namespace Database\Seeders;

use App\Models\tipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoDocumento::create([
            'nombre' => 'Preventivo',
            'estado' => 'Activo',
        ]);

        tipoDocumento::create([
            'nombre' => 'Provicional',
            'estado' => 'Activo',
        ]);

        tipoDocumento::create([
            'nombre' => 'Constatación',
            'estado' => 'Activo',
        ]);
    }
}
