@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Profesores</h2>

    <a href="{{ route('profesores.create') }}" class="btn btn-primary mb-3">Nuevo Profesor</a>

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

        @foreach ($profesores as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nombre }} {{ $p->apellido }}</td>
            <td>{{ $p->correo }}</td>
            <td>
                <form action="{{ route('profesores.destroy', $p->id) }}" method="POST" class="d-inline">
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
