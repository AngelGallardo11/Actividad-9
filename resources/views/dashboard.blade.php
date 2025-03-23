<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Panel de Control</h1>
    <p>Bienvenido, {{ Auth::user()->name }}</p>
    <a href="{{ route('logout') }}" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
       Cerrar Sesión
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>

