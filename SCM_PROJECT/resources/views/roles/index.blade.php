<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Roles</title>
</head>
<body class="p-5">
    <h1>Lista de Roles</h1>
    <a href="{{route('roles.create') }}">Nuevo Rol</a>
    <ul>
        @foreach ($roles as $role)
            <li>{{$role->name}}</li>
        @endforeach
    </ul>
</body>
</html>
