<?php
//inclui o arquivo de conexão com o banco de dados
require_once 'conexao.php';

//estabelece conexão
$conexao = conectadb();

//definição dos valores para a inserção
$nome = "Ruan de Mello Vieira";
$endereco = "Rua kalamango, 32";
$telefone = "(41)5555-5555";
$email = "ruanvieira@teste.com";

//Prepara a consulta SQL 'prepare()' para evitar SQL Injection
$stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

//associa os parâmetros aos valores da consulta
$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

//executa a inserção
if ($stmt->execute()) {
    echo "Cliente adicionado com sucesso!";
} else {
    echo "Erro ao adicionar cliente: " . $stmt->error;
}

//fecha a consulta e a conexão com o banco de dados
$stmt->close();
$conexao->close();
?>