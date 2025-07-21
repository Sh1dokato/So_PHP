<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinação PHP</title>
</head>
<body>
    <?php
        //Função usada para definir fuso horario padrão
        date_default_timezone_set('America/Los_angeles');
        //Manipulando HTML e PHP 
        $data_hoje = date ("d/m/y", time()); 
    ?>
    <p align="center"> Hoje é dia <?php echo $data_hoje ;?>
    </p>
    <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>