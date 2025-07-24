<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>

    <form method="get" action="tarefas.php">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" required />
            </label>
            <label>
                Descrição (opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (opcional):
                <input type="date" name="prazo">
            </label>
        </fieldset>

        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked> Baixa
                <input type="radio" name="prioridade" value="media"> Média
                <input type="radio" name="prioridade" value="alta"> Alta
            </label>
        </fieldset>

        <label>
            Tarefa concluída:
            <input type="checkbox" name="concluida">
        </label>

        <br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Tarefas Cadastradas</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>

        <?php foreach($lista_tarefas as $tarefa): ?>
            <tr>
                <td><?php echo htmlspecialchars($tarefa['nome']); ?></td>
                <td><?php echo htmlspecialchars($tarefa['descricao']); ?></td>
                <td><?php echo $tarefa['prazo'] ?? '-'; ?></td>
                <td>
                    <?php
                        switch ($tarefa['prioridade']) {
                            case 3: echo 'Alta'; break;
                            case 2: echo 'Média'; break;
                            default: echo 'Baixa';
                        }
                    ?>
                </td>
                <td><?php echo $tarefa['concluida'] ? 'Sim' : 'Não'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
