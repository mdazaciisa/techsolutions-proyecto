<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'Admin Tech Solutions',
            'correo' => 'admin@techsolutions.com',
            'clave' => Hash::make('admin123'),
        ]);

        Usuario::create([
            'nombre' => 'Maria Rodriguez',
            'correo' => 'maria@techsolutions.com',
            'clave' => Hash::make('maria123'),
        ]);

        Usuario::create([
            'nombre' => 'Juan Perez',
            'correo' => 'juan@techsolutions.com',
            'clave' => Hash::make('juan123'),
        ]);
    }
}

