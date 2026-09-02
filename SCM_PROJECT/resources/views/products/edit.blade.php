@extends('layouts.app')
@section('content')
    <h1>Editar Producto</h1>

    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="name" value="{{$product->name}}" required>
        <label>Descipción:</label>
        <textarea name="description">{{$product->description}}</textarea>
        <label>Stock:</label>
        <input type="number" name="stock" value="{{$product->stock}}" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="price" value="{{$product->price}}" required>
        <label>Categoría:</label>
        <input type="text" name="category" value="{{$product->category}}">

        <button type="submit">Guardar</button>

    </form>
@endsection
