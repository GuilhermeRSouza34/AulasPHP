<?php
include 'includes/functions.php';
$tasks = getTasks();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Nova tarefa..." required>
            <button type="submit">Adicionar</button>
        </form>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?php echo htmlspecialchars($task['task']); ?>
                    <form action="delete_task.php" method="POST" class="delete-form">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>