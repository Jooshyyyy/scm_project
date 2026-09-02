<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Rol</title>
</head>
<body class="p-5">
    <h1>Nuevo Rol</h1>
    <form action="{{route('roles.store')}}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
