<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota dos alunos</title>
</head>
<body>
    <?php
    $notaminima = 8; // Definindo a nota mínima
    // Atribuindo a nota do aluno
    if ($notaminima >= 8) {
        echo "Muito bem";
    } elseif ($notaminima >= 6) {
        echo "Poderia melhorar";
    } else {
        echo "Reprovado";
    }
    ?>
      <address><center>Ruan de Mello Vieira</center></address>
</body>
</html>