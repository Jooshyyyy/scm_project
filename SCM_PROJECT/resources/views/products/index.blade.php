@extends('layouts.app')
@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{route('producs.create')}}">Nuevo Producto</a>
    @if (session('success'))
        <p>{{session('success')}}</p>
    @endif
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category}}</td>
                <td>
                    <a href="{{route('products.edit',$product->id)}}">Editar</a>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
