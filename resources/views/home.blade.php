@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Sistema Escolar</h2>
    <p class="text-muted">Selecciona un módulo para continuar</p>

    <div class="list-group">
        <a href="{{ route('estudiantes.index') }}" class="list-group-item list-group-item-action">
            Estudiantes
        </a>
        <a href="{{ route('profesores.index') }}" class="list-group-item list-group-item-action">
            Profesores
        </a>
        <a href="{{ route('materias.index') }}" class="list-group-item list-group-item-action">
            Materias
        </a>
        <a href="{{ route('asignaciones.index') }}" class="list-group-item list-group-item-action">
            Asignaciones
        </a>
    </div>
</div>
@endsection
