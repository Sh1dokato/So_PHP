<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Excluir Cliente</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<!-- Navbar com dropdown -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">CRUD de Clientes</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Navegar
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="menu.php">Menu Principal</a></li>
            <li><a class="dropdown-item" href="inserirCliente.php">Inserir Cliente</a></li>
            <li><a class="dropdown-item" href="listarClientes.php">Listar Clientes</a></li>
            <li><a class="dropdown-item" href="pesquisarCliente.php">Pesquisar Cliente</a></li>
            <li><a class="dropdown-item" href="atualizarCliente.php">Atualizar Cliente</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Conteúdo principal -->
<div class="container mt-5">
  <div class="card shadow p-4 mx-auto" style="max-width: 480px;">
    <h2 class="text-center mb-4">Excluir Cliente</h2>

    <form action="processarDelecao.php" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">ID do cliente</label>
        <input type="number" id="id" name="id" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-danger w-100">Excluir Cliente</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
