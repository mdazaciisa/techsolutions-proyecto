<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar', [ProyectoController::class, 'listar']);
Route::get('/listar/{id}', [ProyectoController::class, 'listarId']);

//ruta para mostrar la vista para crear un proyecto
Route::get('/agregar', [ProyectoController::class, 'agregar']);

//ruta para procesar el formulario
Route::post('/agregar/proyecto', [ProyectoController::class, 'agregarProyecto']);

Route::delete('/eliminar/{id}', [ProyectoController::class, 'eliminar']);
Route::put('/actualizar/{id}', [ProyectoController::class, 'actualizar']);
Route::get('/actualizar/{id}', [ProyectoController::class, 'editar']);

//ruta para buscar proyecto por id
Route::get('/buscar', [ProyectoController::class, 'buscar']);
Route::post('/buscar', [ProyectoController::class, 'buscarId']);

Route::get('/', [ProyectoController::class, 'index']);
