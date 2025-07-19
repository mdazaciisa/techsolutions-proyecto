@extends('layouts.app')

@section('title', 'Buscar proyecto')

@section('content')
<h2 class="text-center">Buscar proyecto por id</h2>

<div class="container mt-5 text-center" style="max-width: 400px;">
    <form action="/buscar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID del proyecto</label>
            <input type="number" name="id" id="id" class="form-control" required>
        </div>
        <div class="d-grid gap-4">
            <button class="btn btn-primary" type="submit">Buscar</button><br>
        </div>
    </form>
</div>




@endsection