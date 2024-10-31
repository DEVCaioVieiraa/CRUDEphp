<!-- resources/views/pedidos/cadastrar.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um Novo Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastrar um Novo Pedido</h1>

        <form action="{{ route('registrar_pedido') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" step="0.01" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="pendente">Pendente</option>
                    <option value="pago">Pago</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Pedido</button> <!-- Botão estilizado -->
        </form>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
