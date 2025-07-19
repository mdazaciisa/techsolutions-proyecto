@extends('layouts.app')

@section('title', 'Agregar proyecto')

@section('content')
<h2 class="text-center">Agregar proyecto</h2>

<div class="container mt-5" style="max-width: 400px;">
    <form action="/agregar/proyecto" method="POST">
        @csrf
        <label for="id">ID:</label>
        <input type="number" name="id" id="id" class="form-control" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required><br>

        <label for="fechaini">Fecha inicio:</label>
        <input type="date" name="fechaini" id="fechaini" class="form-control" required><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" class="form-control" required><br>

        <label for="responsable">Responsable:</label>
        <input type="text" name="responsable" id="responsable" class="form-control" required><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" class="form-control" required><br>
        <br>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary mb-4">Agregar</button>
        </div>
    </form>
    
</div>
@endsection