<?php
session_start();

// Verifica se todos os campos foram enviados
if (
    isset($_POST["nome"]) &&
    isset($_POST["idade"]) &&
    isset($_POST["CPF"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["email"]) &&
    isset($_POST["cep"]) &&
    isset($_POST["senha"]) &&
    isset($_POST["rsenha"])
) {
    // Cria um novo cadastro
    $novo_usuario = [
        'nome'   => $_POST['nome'],
        'idade'  => $_POST['idade'],
        'CPF'    => $_POST['CPF'],
        'tel'    => $_POST['tel'],
        'email'  => $_POST['email'],
        'cep'    => $_POST['cep'],
        'senha'  => $_POST['senha'],
        'rsenha' => $_POST['rsenha']
    ];

    // Se ainda não existir a lista de usuários, cria
    if (!isset($_SESSION['lista_usuarios'])) {
        $_SESSION['lista_usuarios'] = [];
    }

    // Adiciona o novo usuário à lista
    $_SESSION['lista_usuarios'][] = $novo_usuario;

    // Mensagem de sucesso
    echo "<h2>Cadastro salvo com sucesso!</h2>";

    echo "<h3>Todos os cadastros até agora:</h3>";
    echo "<ol>";
    foreach ($_SESSION['lista_usuarios'] as $index => $usuario) {
        echo "<li>";
        echo "<ul>";
        foreach ($usuario as $campo => $valor) {
            echo "<li><strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ol>";
} else {
    echo "Por favor, preencha todos os campos.";
}

?>
