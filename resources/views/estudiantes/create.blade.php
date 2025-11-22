@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Nuevo Estudiante</h2>

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control">

        <label>Apellido:</label>
        <input type="text" name="apellido" class="form-control">

        <label>Correo:</label>
        <input type="email" name="correo" class="form-control">

        <button class="btn btn-success mt-3">Guardar</button>
    </form>
</div>
@endsection
