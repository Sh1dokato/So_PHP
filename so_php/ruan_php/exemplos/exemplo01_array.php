<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dias = array("domingo","segunda","terça","quarta","quinta","sexta", "sabado");  // Cria um array com os dias da semana
    echo $dias[1]. "<br><br>"; // Exibe o segundo elemento do array
    print_r($dias); // Exibe o array completo
    echo "<br><br>"; // Exibe o array com detalhes
    var_dump($dias); // Exibe o array com detalhes
    ?>
</body>
</html>