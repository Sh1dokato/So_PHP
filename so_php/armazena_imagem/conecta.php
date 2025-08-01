<?php 
//configuração do banco de dados
$endereco = "localhost"; // Endereço do servidor MySQL
$usuario = "root"; // Nome de usuario do banco de dados
$senha = ""; // Senha do banco de dados
$bancoDados = "armazena_imagem"; // Nome do banco de dados

//criação da conexão
$conexao = new mysqli($endereco, $usuario, $senha, $bancoDados);

//verificar se houve erro de conexão
if($conexao->connect_error)
    die("falha na conexão" .$conexao->connect_error);
?>