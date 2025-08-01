<!--aqui será onde será feito a aba inicial de seleção do CRUD-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD de Clientes - Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold mx-auto" href="#">CRUD de Usuários</a>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <h1 class="mb-4">Menu De Ações</h1>
        <div class="row justify-content-center g-4">

            <div class="col-md-3">
                <a href="inserirCliente.php" class="btn btn-dark w-100 p-3">
                     Inserir Cliente
                </a>
            </div>

            <div class="col-md-3">
                <a href="listarClientes.php" class="btn btn-warning w-100 p-3">
                     Listar Usuários
                </a>
            </div>

            <div class="col-md-3">
                <a href="pesquisarCliente.php" class="btn btn-danger w-100 p-3 text-white">
                    Pesquisar Usuários
                </a>
            </div>

            <div class="col-md-3">
                <a href="atualizarCliente.php" class="btn btn-success w-100 p-3">
                     Atualizar Usuários
                </a>
            </div>

            <div class="col-md-3">
                <a href="deletarCliente.php" class="btn btn-info w-100 p-3">
                     Deletar Usuários
                </a>
            </div>

        </div>
    </div>
    <br>
    <address>
        <center>
   Ruan de Mello Vieira | Estudante | Técnico de desenvolvimento de sistema
        </center>
    </address>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>