<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar com Dropdown -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">CRUD de Clientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Navegar
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="menu.php"> Menu Principal</a></li>
                            <li><a class="dropdown-item" href="listarClientes.php"> Listar Clientes</a></li>
                            <li><a class="dropdown-item" href="pesquisarCliente.php"> Pesquisar Cliente</a></li>
                            <li><a class="dropdown-item" href="atualizarCliente.php"> Atualizar Cliente</a></li>
                            <li><a class="dropdown-item" href="deletarCliente.php"> Deletar Cliente</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Cadastro de Cliente</h2>
            <form action="processarinsercao.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cadastrar cliente</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
