@extends('layouts.app')

@section('content')
    <h1>Proveedores</h1>
    <a href="{{route('providers.create')}}">Nuevo proveedor</a>
    <ul>
        @foreach ($providers as $provider)
            <li>
                {{$provider->name}}
                <a href="{{route('providers.edit',$provider->id)}}">Editar</a>
                <form action="{{route('providers.destroy',$provider->id)}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
