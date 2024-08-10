<?php
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    deleteTask($id);
}

header('Location: index.php');
exit();
?>