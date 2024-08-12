<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema para envio de um feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Feedback</h1>
        <form method="post" action="feedback.php">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>

            <label for="comentario">Comentário: </label>
            <textarea name="comentario" id="comentario" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>