<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Tabuada usando FOR</title>
</head>
<body>
    <?php
        $n1 = 1;
        for ($conta=0; $conta <10; $conta++, $n1++ ){
            for ($n2 = 0; $n2 <=10; $n2++)
            {
                echo ("$n1 x $n2 = " .$n1 * $n2 ."<br>");
            }
        }   
    ?>
    <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>