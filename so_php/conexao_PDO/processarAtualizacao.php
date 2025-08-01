<?php
require 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $conexao = conectarBanco();

    $id = filter_var($_POST["id_cliente"],FILTER_SANITIZE_NUMBER_INT);
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $endereco = htmlspecialchars(trim($_POST["endereco"]));
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    if(!$id || !$email) {
        die ("Erro: ID inválido ou e-mail incorreto.");
    }
    $sql = "UPDATE cliente 
            SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email 
            WHERE id_cliente = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":endereco", $endereco);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);

    try {
        $stmt->execute();
        echo '<div class="alert alert-success" role="alert">Cliente atualizado com sucesso!</div>';
    } catch (PDOException $e) {
        error_log("Erro ao atualizar cliente: " . $e->getMessage());
        echo '<div class="alert alert-danger" role="alert">Erro ao atualizar registro.</div>';
    }   
}
?>

<!-- Incluindo Bootstrap CSS e botão voltar -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">
    <a href="atualizarCliente.php" class="btn btn-secondary">Voltar</a>
</div>
