<?php
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = trim($_POST['task']);
    if ($task !== '') {
        addTask($task);
    }
}

header('Location: index.php');
exit();
?>