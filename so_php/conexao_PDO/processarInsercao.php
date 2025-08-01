<?php
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Resultado</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $conexao = conectarBanco();

            $sql = "INSERT INTO cliente (nome, endereco, telefone, email) 
                    VALUES (:nome, :endereco, :telefone, :email)";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam("nome", $_POST["nome"]);
            $stmt->bindParam("endereco", $_POST["endereco"]);
            $stmt->bindParam("telefone", $_POST["telefone"]);
            $stmt->bindParam("email", $_POST["email"]);

            try {
                $stmt->execute();
                echo '<div class="alert alert-success text-center">Cliente cadastrado com sucesso!</div>';
            } catch (PDOException $e) {
                error_log("Erro ao inserir cliente: " . $e->getMessage());
                echo '<div class="alert alert-danger text-center">Erro ao cadastrar cliente.</div>';
            }
        }
        ?>

        <!-- Dropdown Bootstrap -->
        <div class="dropdown text-center mt-4">
        <a href="InserirCliente.php" class="voltar">Voltar</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
