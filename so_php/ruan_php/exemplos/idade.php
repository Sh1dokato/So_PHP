<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <?php
    $age = 16;
    print "You are " . $age . " years old <br>";
    print "You are $age years old <br>";
    print 'You are $age years old. <br>';
    ?>

    <?php
        $cidade = "Florianópolis";
        $estado = "SC";
        $idade = 174;
        $frase_capital = "A cidade de $cidade é a capital do estado de $estado";
        $frase_idade = "$cidade tem mais de $idade anos";
        echo "<h3>$frase_capital</h3>";
        echo "<h4>$frase_idade</h4>";
    ?>

    <?php
    $ageth = 18;
    print "Today is your $ageth birthday.<br>"; #ageth not found
    print "Today is your {$age}th birthday!<br>";
    ?>
      <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>