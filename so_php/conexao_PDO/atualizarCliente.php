<?php
require_once 'conexao.php';

$conexao = conectarBanco();

$idCliente = $_GET['id'] ?? null;
$cliente = null;
$msgErro = "";

// Função para buscar cliente por ID
function buscarClientePorID($idCliente, $conexao) {
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(); // retorna array ou false
}

if ($idCliente && is_numeric($idCliente)) {
    $cliente = buscarClientePorID($idCliente, $conexao);
    if (!$cliente) {
        $msgErro = "Erro: Cliente não encontrado.";
    }
} elseif ($idCliente !== null) {
    $msgErro = "Digite um ID válido para buscar os dados.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body class="bg-light">

<!-- Navbar com dropdown -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">CRUD de Clientes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Navegar
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="menu.php">Menu Principal</a></li>
            <li><a class="dropdown-item" href="inserirCliente.php">Inserir Cliente</a></li>
            <li><a class="dropdown-item" href="listarClientes.php">Listar Clientes</a></li>
            <li><a class="dropdown-item" href="pesquisarCliente.php">Pesquisar Cliente</a></li>
            <li><a class="dropdown-item" href="deletarCliente.php">Deletar Cliente</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">✏️ Atualizar Cliente</h2>

        <!-- Campo de busca -->
        <form action="atualizarCliente.php" method="GET" class="row g-3 justify-content-center mb-4">
            <div class="col-md-6">
                <label for="id" class="form-label">ID do Cliente:</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">🔍 Buscar</button>
            </div>
        </form>

        <!-- Mensagem de erro -->
        <?php if ($msgErro): ?>
            <div class="alert alert-danger text-center"><?= htmlspecialchars($msgErro) ?></div>
        <?php endif; ?>

        <!-- Formulário de atualização -->
        <?php if ($cliente): ?>
            <form action="processarAtualizacao.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success"> Atualizar cliente</button>
                </div>
            </form>
        <?php endif; ?>

        <!-- Botão voltar -->
        <div class="text-center mt-4">
            <a href="menu.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
