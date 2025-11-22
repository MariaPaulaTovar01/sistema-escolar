@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Materias</h2>

    <a href="{{route('materias.create')}}" class="btn btn-primary mb-3">Agregar Nueva Materia</a>
    @if(session('success'))
        <div class="alert alert success">{{session('success')}}</div>
    @endif

    <table class="table table bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Opciones</th>
        </tr>

        @foreach ($materias as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->nombre}}</td>
            <td>{{$m->codigo}}</td>
            <td> <a href={{route('materias.edit', $m->id) }} class="btn btn-warning btn-sm">Editar</a>
                <form action="{{route('materias.destroy', $m->id) }}" method="POST" class="d-inline">
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