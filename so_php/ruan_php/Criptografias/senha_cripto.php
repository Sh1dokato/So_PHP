<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
    <style type="text/css">
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <form method="Post" action="php.php">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>

