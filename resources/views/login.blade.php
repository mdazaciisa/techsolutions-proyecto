@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<h2 class="text-center">Iniciar sesión</h2>

@if (session('error'))
<div style="color:red;" class="text-center">
    {{ session('error') }}
</div>
@endif

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<div class="container mt-5" style="max-width: 400px;">
    <form action="/login" method="POST">
        @csrf

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" class="form-control" required><br>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" class="form-control" required><br>

        <br>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary mb-4">Iniciar sesión</button>
        </div>
    </form>
    <p>Crear cuenta: <a href="/registro">Registro de usuario</a></p>

</div>
@endsection