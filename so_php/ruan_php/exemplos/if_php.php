<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "Xenia";
    #$nome = NULL;
    if (isset ($nome)) {
        print "This line isn't going to be reached."; // essa linha não será alcançada
    }
    ?>
      <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>