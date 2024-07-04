<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            // 'email' => 'admin@gmail.com',
            'dni' => '3551688',
            'password' => bcrypt('3551688'),
        ]);

        User::create([
            'name' => 'Registrador',
            // 'email' => 'registrador@notificaciones.com',
            'dni' => '12345678',
            'password' => bcrypt('123123123'),
        ]);

        User::create([
            'name' => 'Notificador',
            // 'email' => 'notificador@notificaciones.com',
            'dni' => '123456789',
            'password' => bcrypt('123123123'),
        ]);        
    }
}
