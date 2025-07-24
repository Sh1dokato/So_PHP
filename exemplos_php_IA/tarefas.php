<?php
session_start();
include "banco.php";

// Inserir nova tarefa se enviada
if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $nome = $_GET['nome'];
    $descricao = $_GET['descricao'] ?? '';
    $prazo = $_GET['prazo'] ?? '';
    $prioridade_str = $_GET['prioridade'] ?? 'baixa';
    $concluida = isset($_GET['concluida']) ? 1 : 0;

    // Converter prioridade (texto → número)
    switch ($prioridade_str) {
        case 'alta': $prioridade = 3; break;
        case 'media': $prioridade = 2; break;
        default: $prioridade = 1;
    }

    $prazo_sql = !empty($prazo) ? "'$prazo'" : "NULL";

    $sql = "INSERT INTO tarefas (nome, descricao, prazo, prioridade, concluida)
            VALUES ('$nome', '$descricao', $prazo_sql, $prioridade, $concluida)";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Buscar tarefas do banco
function buscar_tarefas($conexao) {
    $sqlBusca = "SELECT * FROM tarefas ORDER BY id DESC";
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

$lista_tarefas = buscar_tarefas($conexao);

// Exibir o HTML
include "template.php";
?>
