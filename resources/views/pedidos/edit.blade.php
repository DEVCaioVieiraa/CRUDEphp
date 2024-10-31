<!-- resources/views/pedidos/edit.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Pedido #{{ $pedido->id }}</h1>

        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" class="form-control" value="{{ $pedido->cliente }}" required>
            </div>

            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" step="0.01" class="form-control" value="{{ $pedido->total }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="pendente" {{ $pedido->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="pago" {{ $pedido->status == 'pago' ? 'selected' : '' }}>Pago</option>
                    <option value="cancelado" {{ $pedido->status == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Pedido</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
