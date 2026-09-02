<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
</head>
<body class="p-5">
    <h1>Lista de Compras</h1>
    <a href="{{ route('purchases.create') }}">Registrar nueva compra</a>

    <ul>
        @foreach ($purchases as $purchase)
            <li>
                Proveedor: {{ $purchase->provider->name }} |
                Fecha: {{ $purchase->purchase_date }} |
                Total: Bs {{ $purchase->total }} |
                Estado: {{ $purchase->status }}
                <a href="{{ route('purchases.edit', $purchase->id) }}">Editar</a>
                <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
