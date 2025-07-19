<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['id', 'nombre', 'fechaini', 'estado', 'responsable', 'monto'];

    private $proyectos = [
        [
            'id' => 1,
            'nombre' => 'Portal de clientes',
            'fechaini' => '2025-01-01',
            'estado' => 'Activo',
            'responsable' => 'Maria',
            'monto' => 750000],
        [
            'id' => 2,
            'nombre' => 'Portal de proveedores',
            'fechaini' => '2025-07-01',
            'estado' => 'Pendiente',
            'responsable' => 'Juan',
            'monto' => 540000
        ],
        [
            'id' => 3,
            'nombre' => 'Diseño web institucional',
            'fechaini' => '2023-01-01',
            'estado' => 'Finalizado',
            'responsable' => 'Ana',
            'monto' => 1000000
        ]
        ];
        public function obtenerProyectos(){
            return $this->proyectos;
        }
}
