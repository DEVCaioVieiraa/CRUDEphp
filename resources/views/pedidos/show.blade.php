<!-- resources/views/pedidos/show.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Detalhes do Pedido #{{ $pedido->id }}</h1>

        <p><strong>Cliente:</strong> {{ $pedido->cliente }}</p>
        <p><strong>Total:</strong> R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ ucfirst($pedido->status) }}</p>

        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
    