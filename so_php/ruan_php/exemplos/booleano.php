<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleano</title>
</head>
<body>
    <?php
    //Declara variavel numerica
    $umidade = 91;
    //testa se $umidade é maior que 90. Retorna um boolean
    $vaichover = ($umidade > 90);
    //testa se $vaichover é verdadeiro
    if ($vaichover) 
    {
        echo "Vai chover com toda certeza absoluta da terra!";
    }
    else
    {
        echo "Não vai chover, pode sair de casa tranquilo!";
    }
    ?>
      <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>