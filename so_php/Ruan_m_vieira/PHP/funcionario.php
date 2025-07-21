<?php
// Inicia a sessão, permitindo que você armazene dados que podem ser acessados em outras páginas
session_start();

// Verifica se todos os campos do formulário foram enviados pelo método POST
if (
    isset($_POST["nome"]) &&
    isset($_POST["email"]) &&
    isset($_POST["telefone"]) &&
    isset($_POST["cpf_cnpj"]) &&
    isset($_POST["data_admissao"]) &&
    isset($_POST["endereco"]) &&
    isset($_POST["cargo_funcionario"])
) {
    // Se todos os campos estiverem preenchidos, os dados são armazenados na sessão
    $_SESSION['dados_funcionario'] = [
        'nome'           => $_POST['nome'],             // Nome do funcionário
        'email'          => $_POST['email'],            // E-mail do funcionário
        'telefone'       => $_POST['telefone'],         // Telefone
        'cpf_cnpj'       => $_POST['cpf_cnpj'],         // CPF ou CNPJ
        'data_admissao'  => $_POST['data_admissao'],    // Data de admissão
        'endereco'       => $_POST['endereco'],         // Endereço
        'cargo'          => $_POST['cargo_funcionario'] // Cargo ou função do funcionário
    ];

    // Exibe uma mensagem de sucesso
    echo "<h2>Funcionário cadastrado com sucesso!</h2>";

    // Cria uma lista não ordenada com os dados do funcionário
    echo "<ul>";
    
    // Percorre os dados armazenados na sessão
    foreach ($_SESSION['dados_funcionario'] as $campo => $valor) {
        // Para cada item, imprime o nome do campo (formatado) e seu valor
        // ucfirst(): coloca a primeira letra em maiúscula
        // str_replace(): troca "_" por espaço, para deixar mais legível
        // htmlspecialchars(): impede ataques XSS (evita que scripts maliciosos sejam executados)
        echo "<li><strong>" . ucfirst(str_replace("_", " ", $campo)) . ":</strong> " . htmlspecialchars($valor) . "</li>";
    }

    echo "</ul>";

} else {
    // Caso algum campo não tenha sido preenchido, exibe essa mensagem
    echo "<p>Por favor, preencha todos os campos do formulário.</p>";
}
?>
