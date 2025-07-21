<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Funções</title>
</head>
<body>
    <?php
    #rand - Gera um número aleatório entre dois valores
    $sorteio = rand(0,5);
    echo "Sorteado: $sorteio <hr>";
    #array_merge - Combina dois ou mais arrays
    #range - Cria um array contendo uma sequência de números
    # (inicio, fim, passo)
    $vetor = array_merge( range (0 , 10),
    range ($sorteio , 10 , 2),
    #array - Cria um array
    array ($sorteio ) );
    #print_r - Exibe informações sobre uma variável de forma legível
    print_r($vetor);
    echo "<hr>";
    #shuffle - Embaralha os elementos de um array
    shuffle($vetor);
    print_r($vetor);
    echo "<hr>";
    ?>
</body>
</html>