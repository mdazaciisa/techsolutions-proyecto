<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyecto;
use App\Models\Usuario;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener el primer usuario para asignar como creador
        $usuario = Usuario::first();
        
        
        $proyectos = [
            [
                'nombre' => 'Portal de clientes',
                'fechaini' => '2025-01-01',
                'estado' => 'Activo',
                'responsable' => 'Maria',
                'monto' => 750000,
                'created_by' => $usuario->id
            ],
            [
                'nombre' => 'Portal de proveedores',
                'fechaini' => '2025-07-01',
                'estado' => 'Pendiente',
                'responsable' => 'Juan',
                'monto' => 540000,
                'created_by' => $usuario->id
            ],
            [
                'nombre' => 'Diseño web institucional',
                'fechaini' => '2023-01-01',
                'estado' => 'Finalizado',
                'responsable' => 'Ana',
                'monto' => 1000000,
                'created_by' => $usuario->id
            ],
            [
                'nombre' => 'Sistema de inventario',
                'fechaini' => '2024-03-15',
                'estado' => 'Activo',
                'responsable' => 'Carlos',
                'monto' => 850000,
                'created_by' => $usuario->id
            ],
            [
                'nombre' => 'App móvil corporativa',
                'fechaini' => '2024-06-01',
                'estado' => 'Pendiente',
                'responsable' => 'Sofia',
                'monto' => 1200000,
                'created_by' => $usuario->id
            ]
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }
    }
}
