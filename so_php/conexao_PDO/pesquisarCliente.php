<?php
require_once 'conexao.php';

$conexao = conectarBanco();
$busca = $_GET['busca'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar com dropdown -->
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
                        <li><a class="dropdown-item" href="index.php">Menu Principal</a></li>
                        <li><a class="dropdown-item" href="inserirCliente.php">Inserir Cliente</a></li>
                        <li><a class="dropdown-item" href="listarClientes.php">Listar Clientes</a></li>
                        <li><a class="dropdown-item" href="pesquisarCliente.php">Pesquisar Cliente</a></li>
                        <li><a class="dropdown-item" href="atualizarCliente.php">Atualizar Cliente</a></li>
                        <li><a class="dropdown-item" href="deletarCliente.php">Deletar Cliente</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteúdo principal -->
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Pesquisar Cliente</h2>

        <?php if (!$busca): ?>
            <!-- Formulário de busca -->
            <form action="pesquisarCliente.php" method="GET" class="row justify-content-center g-3">
                <div class="col-md-6">
                    <label for="busca" class="form-label">Digite o ID ou Nome:</label>
                    <input type="text" id="busca" name="busca" class="form-control" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </form>
        <?php
            exit;
        endif;

        // Lógica de busca por ID ou nome
        if (is_numeric($busca)) {
            $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
            $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
        } else {
            $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
            $buscaNome = "%$busca%";
            $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
        }

        $stmt->execute();
        $clientes = $stmt->fetchAll();

        if (!$clientes): ?>
            <div class="alert alert-warning text-center">Nenhum cliente encontrado.</div>
        <?php else: ?>
            <!-- Tabela com resultados -->
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
                                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                                <td><?= htmlspecialchars($cliente['endereco']) ?></td>
                                <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                                <td><?= htmlspecialchars($cliente['email']) ?></td>
                                <td>
                                    <a href="atualizarCliente.php?id=<?= $cliente['id_cliente'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <!-- Botão de voltar -->
        <div class="text-center mt-4">
            <a href="pesquisarCliente.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
