<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Postagem</h1>
        <?php
        $id = $_GET['id'] ?? null;

        if ($id) {
            // Obtém a postagem pelo ID
            $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
            $stmt->execute(['id' => $id]);
            $post = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($post) {
                // Exibe a postagem
                echo "<h2>{$post['title']}</h2>
                    <p>{$post['content']}</p>";

                // Obtém e exibe os comentários da postagem
                $stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = :post_id ORDER BY created_at DESC");
                $stmt->execute(['post_id' => $id]);
                echo "<ul id='comment-list'>";
                while ($comment = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<li>
                        <strong>{$comment['author']}</strong>
                        <p>{$comment['content']}</p>
                    </li>";
                }
                echo "</ul>";

                // Formulário para adicionar novos comentários
                echo "<form id='comment-form'>
                    <input type='text' id='author' placeholder='Seu nome' required>
                    <textarea id='comment-content' placeholder='Seu comentário' required></textarea>
                    <button type='submit'>Comentar</button>
                </form>";
            } else {
                echo "<p>Postagem não encontrada.</p>";
            }
        } else {
            echo "<p>ID da postagem não fornecido.</p>";
        }
        ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>