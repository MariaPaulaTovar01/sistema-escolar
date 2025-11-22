@extends('layout')
@section('content')

<div class="container mt-4">
    <h2>Nueva Materia</h2>

    <form action="{{route('materias.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control">
        <label> Código</label>
        <input type="text" name="codigo" class="form.control">
        <button class="btn btn-success mt-3">Guardar</button>
    </form>
</div>
@endsection