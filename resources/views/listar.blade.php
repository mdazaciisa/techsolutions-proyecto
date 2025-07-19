@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')

<h2 class="text-center">Lista de todos los proyectos</h2>

@foreach($proyectos as $proyecto)
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Nombre proyecto: {{ $proyecto['nombre'] }}</h5>
                <div class="card-body">
                    <p class="card-text">ID: {{ $proyecto['id'] }}</p>
                    <p class="card-text">Fecha inicio: {{ $proyecto['fechaini'] }}</p>
                    <p class="card-text">Estado: {{ $proyecto['estado'] }}</p>
                    <p class="card-text">Responsable: {{ $proyecto['responsable'] }}</p>
                    <p class="card-text">Monto: {{ $proyecto['monto'] }}</p>
                    <a href="/actualizar/{{ $proyecto['id'] }}" class="btn btn-primary">Actualizar</a>
                    <form action="/eliminar/{{ $proyecto['id'] }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary ">Eliminar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
@endforeach
@endsection