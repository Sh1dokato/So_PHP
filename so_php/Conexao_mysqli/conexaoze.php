<?php
//definição das credenciais de acesso ao banco de dados
$nomeservidor = "localhost"; // Endereço do servidor MySQL
$usuario = "root"; // Nome de usuario do banco de dados
$senha = ""; // Senha do banco de dados
$bancodedados = "empresa"; // Nome do banco de dados

//criação da conexão com mysqli
$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

//verificação da conexão
if (!$conn){ //caso a conexão falhe, interrompe o script e exibe uma mensagem de erro
    die("Conexão falhou:". mysqli_connect_error());
}

//Configuração do conjunto de caracteres para evitar problemas de acentuação
mysqli_set_charset($conn, "utf8mb4");

//mensagem indicando que a conexão foi estabelecida corretamente
echo "conexão bem-sucedida!";

//Consulta SQL para obter clientes
$sql = "SELECT id_cliente, nome, email FROM clientes";
$result = mysqli_query($conn, $sql);

//verifica se há resultados na consulta
if (mysqli_num_rows( $result ) > 0) {
//Altera sobre os resultados e exibe os dados
    while ($linha = mysqli_fetch_assoc($result)) {
        echo "ID: " . $linha["id_cliente"] . " - Nome: " . $linha["nome"] . " - Email: " . $linha["email"]. "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";}
    
    //fecha a conxão com o banco de dados
    mysqli_close($conn);
?>