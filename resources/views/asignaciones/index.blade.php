@extends('layout')
@section('content')

<div class="container mt-4">
    <h2>Asignaciones</h2>
    <a href="{{ route('asignaciones.create') }}" class="btn btn-primary mb-3">Nueva Asignación</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Profesor</th>
            <th>Materia</th>
        </tr>

        @foreach ($asignaciones as $a)
        <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->estudiante->nombre }}</td>
            <td>{{ $a->profesor->nombre }}</td>
            <td>{{ $a->materia->nombre }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
