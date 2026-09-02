<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Compra</title>
</head>
<body>
    <h1>Nueva Compra</h1>
    <form action="{{ route('purchases.store') }}" method="POST">
        @csrf
        <label>Proveedor:</label>
        <select name="provider_id" required>
            <option value="">Seleccione un proveedor</option>
            @foreach ($providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->name }}</option>
            @endforeach
        </select>
        <br>
        <label>Fecha de compra:</label>
        <input type="date" name="purchase_date" required>
        <br>
        <label>Total:</label>
        <input type="number" name="total" step="0.01" required>
        <br>
        <label>Estado:</label>
        <input type="text" name="status" value="Pendiente" required>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
