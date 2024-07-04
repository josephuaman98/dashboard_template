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
        $this->call([
            TipoIntervencionSeeder::class,
            SeederTablaPermisos::class,
            TipoDocumentoSeeder::class,
            UsuarioSeeder::class,
             GiroSeeder::class,
             InfraccionSeeder::class,
            SancionesSeeder::class,
        ]);
        
    }
}
