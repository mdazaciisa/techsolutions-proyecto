@extends('layouts.app')

@section('title', 'Actualizar datos de proyecto')

@section('content')
<h2 class="text-center">Actualizar proyecto:</h2>

@if(session('mensaje'))
<p style="color: green;" class="text-center">{{ session('mensaje') }}</p>
@endif

<div class="container mt-5" style="max-width: 400px;">
    <form action="/actualizar/{{ $proyecto['id'] }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre: </label><br>
        <input type="text" name="nombre" value="{{ $proyecto['nombre'] }}" class="form-control" required><br><br>

        <label>Fecha de inicio: </label><br>
        <input type="date" name="fechaini" value="{{ $proyecto['fechaini'] }}" class="form-control" required><br><br>

        <label>Estado: </label><br>
        <input type="text" name="estado" value="{{ $proyecto['estado'] }}" class="form-control" required><br><br>

        <label>Responsable: </label><br>
        <input type="text" name="responsable" value="{{ $proyecto['responsable'] }}" class="form-control" required><br><br>

        <label>Monto:</label><br>
        <input type="number" name="monto" value="{{ $proyecto['monto'] }}" class="form-control" required><br><br>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary mb-4">Actualizar Proyecto</button>
        </div>
    </form>
</div>

@endsection