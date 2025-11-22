@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Estudiantes</h2>

    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Nuevo Estudiante</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Opciones</th>
        </tr>

        @foreach ($estudiantes as $e)
        <tr>
            <td>{{ $e->id }}</td>
            <td>{{ $e->nombre }} {{ $e->apellido }}</td>
            <td>{{ $e->correo }}</td>
            <td>
                <form action="{{ route('estudiantes.destroy', $e->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
