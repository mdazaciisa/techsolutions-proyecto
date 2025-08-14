@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Bienvenido al gestor de proyectos</h2>
            <p>En esta aplicación podrás ver la lista de proyectos registrados, agregar nuevos proyectos, buscar proyectos por id o eliminarlos y actualizarlos de forma sencilla.</p>

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg border-0">
                            <div class="card-header bg-primary text-white text-center">
                                <h4>Accede a tu cuenta</h4>
                            </div>
                            <div class="card-body text-center">
                                <p>Si ya tienes cuenta, inicia sesión para gestionar tus proyectos.</p>
                                <p>Si eres nuevo, regístrate para comenzar.</p>
                                <a href="/login" class="btn btn-success mb-4">
                                    <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                                </a>
                                <a href="/registro" class="btn btn-primary mb-4">
                                    <i class="bi bi-person-plus"></i> Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <h2 class="text-center">Valor UF del día: </h2>
            <p><strong>Valor UF:</strong>
                @if($uf)
                {{ number_format($uf, 2, ',', '.') }}
                @else
                No disponible
                @endif
            </p>
        </div>
    </div>
</div>
@endsection