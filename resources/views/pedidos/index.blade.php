<!-- resources/views/pedidos/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Lista de Pedidos</h1>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Criar Novo Pedido</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->cliente }}</td>
                        <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                        <td>{{ ucfirst($pedido->status) }}</td>
                        <td>
                            <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
