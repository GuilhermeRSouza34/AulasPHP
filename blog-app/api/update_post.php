<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if ($id && $title && $content) {
        // Atualiza uma postagem existente no banco de dados
        $stmt = $pdo->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
        $stmt->execute(['title' => $title, 'content' => $content, 'id' => $id]);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>