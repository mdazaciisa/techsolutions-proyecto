<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AutenticacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ruta para registro usuario
Route::post('/registro', [AutenticacionController::class, 'registrarUsuario']);
Route::get('/registro', [AutenticacionController::class, 'mostrarFormularioRegistro']);
//ruta para iniciar sesión
Route::get('/login', [AutenticacionController::class, 'mostrarFormularioLogin'])->name('login');
Route::post('/login', [AutenticacionController::class, 'iniciarSesion']);


Route::middleware([\App\Http\Middleware\JwtMiddleware::class])->group(function () {
    //ruta para listar proyectos
    Route::get('/listar', [ProyectoController::class, 'listar']);
    Route::get('/listar/{id}', [ProyectoController::class, 'listarId']);

    //ruta para crear proyecto
    Route::get('/agregar', [ProyectoController::class, 'agregar']);
    Route::post('/agregar/proyecto', [ProyectoController::class, 'agregarProyecto']);

    Route::delete('/eliminar/{id}', [ProyectoController::class, 'eliminar']);

    //ruta para actualizar proyecto
    Route::put('/actualizar/{id}', [ProyectoController::class, 'actualizar']);
    Route::get('/actualizar/{id}', [ProyectoController::class, 'editar']);

    //ruta para buscar proyecto por id
    Route::get('/buscar', [ProyectoController::class, 'buscar']);
    Route::post('/buscar', [ProyectoController::class, 'buscarId']);

});


Route::get('/', [ProyectoController::class, 'index']);
