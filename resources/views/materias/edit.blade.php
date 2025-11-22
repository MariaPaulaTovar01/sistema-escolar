@extends('layout')
@section('content')

<div class="container mt-4">
    <h2>Editar materia</h2>

    <form action="{{route('materias.update',$materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="{{ $materia->nombre }}">
        <label>Código:</label>
        <input type="text" name="codigo" class="form-control" value="{{ $materia->codigo}}">
        <button class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection