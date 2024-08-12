<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 300px;
        }
        h1 {
            color: #333;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Obrigado pelo Feedback!</h1>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></p>
        <p><strong>Comentário:</strong> <?php echo nl2br(htmlspecialchars($_POST['comentario'])); ?></p>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>