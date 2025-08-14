<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Ejecuta el seeder de usuarios
    $this->call(UserSeeder::class);

    // Ejecuta el seeder de proyectos
    $this->call(ProyectoSeeder::class);
    }
}
