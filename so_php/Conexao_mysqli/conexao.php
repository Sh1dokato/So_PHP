<?php 
//habilita relatorio detalhado de erros no mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/**
 * Função para conectar ao banco de dados
 * Retorna um objeto de conxão mysqli ou interrompe o script em caso de erro.
 */
function conectadb(){
    //configuração do banco de dados
    $endereco = "localhost"; // Endereço do servidor MySQL
    $usuario = "root"; // Nome de usuario do banco de dados
    $senha = ""; // Senha do banco de dados
    $banco = "empresa"; // Nome do banco de dados

    try {
        //criação da conexão
        $con = new mysqli($endereco, $usuario, $senha, $banco);

        //definição do conjunto de caracteres para evitar problemas de acentuação
        $con->set_charset("utf8mb4"); //Retorna o objeto de conexão
        return $con;
    } catch (mysqli_sql_exception $e) {
        // exibe uma mensagem de erro e encerra o script
        die("Erro na conexão: " . $e->getMessage());
    }
}   
?>