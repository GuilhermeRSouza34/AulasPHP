<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'] ?? '';

    if ($id) {
        // Remove uma postagem do banco de dados
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->execute(['id' => $id]);
        header('Location: ../index.php'); // Redireciona para a página inicial após exclusão
    }
}
?>