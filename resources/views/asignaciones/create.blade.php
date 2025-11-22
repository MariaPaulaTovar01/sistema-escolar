@extends('layout')
@section('content')

<div class="container mt-4">
    <h2>Nueva Asignación</h2>
    <form action="{{ route('asignaciones.store') }}" method="POST">
        @csrf
        <label>Estudiante:</label>
        <select name="estudiante_id" class="form-control">
            @foreach ($estudiantes as $e)
                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </select>
        <label>Profesor:</label>
        <select name="profesor_id" class="form-control">
            @foreach ($profesores as $p)
                <option value="{{ $p->id }}">{{ $p->nombre }}</option>
            @endforeach
        </select>
        <label>Materia:</label>
        <select name="materia_id" class="form-control">
            @foreach ($materias as $m)
                <option value="{{ $m->id }}">{{ $m->nombre }}</option>
            @endforeach
        </select>
        <button class="btn btn-success mt-3">Guardar</button>
    </form>
</div>
@endsection
