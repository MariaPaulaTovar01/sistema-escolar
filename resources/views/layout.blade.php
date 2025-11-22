<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>

        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a>
            <a class="nav-link" href="{{ route('profesores.index') }}">Profesores</a>
            <a class="nav-link" href="{{ route('materias.index') }}">Materias</a>
            <a class="nav-link" href="{{ route('asignaciones.index') }}">Asignaciones</a>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
