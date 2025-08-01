<?php
require_once 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conexao = conectarBanco();

    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);

    if(!$id){
        die("Erro: ID inválido.");
    }
    $sql = "DELETE FROM cliente WHERE id_cliente = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    try{
        $stmt->execute();
        echo '<div class="alert alert-success" role="alert">Cliente excluído com sucesso!</div>';
    } catch (PDOException $e) {
        error_log("Erro ao excluir cliente: " . $e->getMessage());
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir cliente.</div>';
    }
}
?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">
    <a href="menu.php" class="btn btn-secondary">Voltar ao Menu</a>
</div>
