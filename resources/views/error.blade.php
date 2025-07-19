@extends('layouts.app')

@section('title', 'Error')

@section('content')
<h2>Error: Proyecto no encontrado</h2>
<p>{{ $mensaje }}</p>

<!-- <a href="{{ url('/listar') }}">
        <button>Volver a la lista</button>
    </a>
 -->
@endsection