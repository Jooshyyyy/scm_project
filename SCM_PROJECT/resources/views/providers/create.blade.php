@extends('layouts.app')
@section('content')
    <h1>Crear Proveedor</h1>
    <form action="{{route('providers.store')}} "method="POST">
        @csrf
        <label >Nombre:</label>
        <input type="text" name="name" required>
        <label >Contacto:</label>
        <input type="text" name="contact" required>
        <label >email:</label>
        <input type="text" name="email" required>
        <label >Productos:</label>
        <input type="text" name="products" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
