<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = $_POST['post_id'] ?? '';
    $author = $_POST['author'] ?? '';
    $content = $_POST['content'] ?? '';

    if ($post_id && $author && $content) {
        // Adiciona um novo comentário ao banco de dados
        $stmt = $pdo->prepare("INSERT INTO comments (post_id, author, content) VALUES (:post_id, :author, :content)");
        $stmt->execute(['post_id' => $post_id, 'author' => $author, 'content' => $content]);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>