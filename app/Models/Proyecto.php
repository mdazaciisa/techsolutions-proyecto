<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto';

    protected $fillable = [
        'id',
        'nombre',
        'fechaini',
        'estado',
        'responsable',
        'monto',
        'created_by',
    ];

    public function obtenerProyectos()
    {
        return Proyecto::all();
    }
}
