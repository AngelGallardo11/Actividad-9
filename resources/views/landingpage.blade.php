<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Bienvenido a Actividad-9</h1>
    <p>Por favor, inicia sesión o regístrate para acceder al panel.</p>
    <a href="{{ route('login') }}">Iniciar Sesión</a> | 
    <a href="{{ route('register') }}">Registrarse</a>
</body>
</html>

