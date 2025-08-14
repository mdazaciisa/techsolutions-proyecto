@extends('layouts.app')

@section('title', 'Registro de usuario')

@section('content')
<h2 class="text-center">Registro de usuario</h2>

<div class="container mt-5" style="max-width: 400px;">
    <form action="/registro" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required><br>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" class="form-control" required><br>
        @error('correo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror   

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" class="form-control" required><br>
        @error('clave')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary mb-4">Confirmar</button>
        </div>
    </form>
    <p>Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
    
</div>
@endsection