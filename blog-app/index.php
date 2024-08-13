<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Blog</h1>
        <a href="post.php">Criar nova postagem</a>
        <ul id="post-list">
            <?php
            // Obtém todas as postagens do banco de dados
            $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Exibe cada postagem com links para ver e excluir
                echo "<li>
                    <h2>{$row['title']}</h2>
                    <p>{$row['content']}</p>
                    <a href='post.php?id={$row['id']}'>Ver comentários</a>
                    <a href='api/delete_post.php?id={$row['id']}'>Excluir</a>
                </li>";
            }
            ?>
        </ul>
    </div>
    <script src="js/script.js"></script>
</body>
</html>