@extends('layouts.app')
@section('content')
    <h1>Nuevo Producto</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <label>Descipción:</label>
        <textarea name="description"></textarea>
        <label>Stock:</label>
        <input type="number" name="stock" required>
        <label>Precio:</label>
        <input type="number" name="price" step="0.01" required>
        <label>Categoría:</label>
        <input type="text" name="category">
        <button type="submit">Guardar</button>
    </form>

@endsection
