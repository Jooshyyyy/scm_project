@extends('layouts.app')
@section('content')
    <h1>Editar Proveedor</h1>
    <form action="{{ route('providers.update', $provider->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label >Nombre:</label>
        <input type="text" name="name" required>
        <label >Contacto:</label>
        <input type="text" name="contact" required>
        <label >email:</label>
        <input type="text" name="email" required>
        <label >Productos:</label>
        <input type="text" name="products" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
