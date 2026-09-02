<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Compra</title>
</head>
<body>
    <h1>Editar Compra</h1>
    <form action="{{ route('purchases.update', $purchase->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Proveedor:</label>
        <select name="provider_id" required>
            @foreach ($providers as $provider)
                <option value="{{ $provider->id }}" {{ $purchase->provider_id == $provider->id ? 'selected' : '' }}>
                    {{ $provider->name }}
                </option>
            @endforeach
        </select>
        <br>
        <label>Fecha de compra:</label>
        <input type="date" name="purchase_date" value="{{ $purchase->purchase_date }}" required>
        <br>
        <label>Total:</label>
        <input type="number" step="0.01" name="total" value="{{ $purchase->total }}" required>
        <br>
        <label>Estado:</label>
        <input type="text" name="status" value="{{ $purchase->status }}" required>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
