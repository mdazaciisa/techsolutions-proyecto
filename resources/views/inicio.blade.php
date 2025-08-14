@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Bienvenido al gestor de proyectos</h2>
            <p>En esta aplicación podrás ver la lista de proyectos registrados, agregar nuevos proyectos, buscar proyectos por id o eliminarlos y actualizarlos de forma sencilla.</p>
            <p>Usa el menú superior para navegar entre las distintas opciones disponibles.</p>
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