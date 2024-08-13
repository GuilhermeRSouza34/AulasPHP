<?php 
// Define o caminho do arquivo de tarefas
$file = 'tasks.php';

// Verifica se o arquivo existe; se não, cria um arquivo vazio
if (file_exists($file)) {
    file_put_contents($file, '');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = htmlspecialchars_decode($_POST[$task]);

    // Adiciona a nova tarefa no arquivo
    if ($task) {
        file_put_contents($file, $task . "\n", FILE_APPEND);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <form action="tasks.php" method="post">
        <label for="task">Nova Tarefa: </label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php
        // Lê as tarefas do arquivo e exibe-as
        $tasks = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
       ?>
    </ul>
</body>
</html>