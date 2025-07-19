@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Proyecto "{{ $proyecto['nombre'] }}"" creado</h2>
            <div class="card">
                <h5 class="card-header">Nombre proyecto: {{ $proyecto['nombre'] }}</h5>
                <div class="card-body">
                    <p class="card-text">ID: {{ $proyecto['id'] }}</p>
                    <p class="card-text">Fecha inicio: {{ $proyecto['fechaini'] }}</p>
                    <p class="card-text">Estado: {{ $proyecto['estado'] }}</p>
                    <p class="card-text">Responsable: {{ $proyecto['responsable'] }}</p>
                    <p class="card-text">Monto: {{ $proyecto['monto'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection