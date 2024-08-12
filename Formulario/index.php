<?php 
//verifica se o formulario foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; //recebe o nome
    $email = $_POST["email"]; //recebe o email
    $message = $_POST["message"]; //recebe a mensagem

    //Exibe os dados enviados pelo usuario
    echo "<h2>Dados Recebidos</h2>";
    echo "<p><strong>Nome</strong $name</p>";
    echo "<p><strong>Email:<strong> $email</strong></p>";
    echo "<p><strong>Mensagem:<strong> $message</strong></p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contato</title>
</head>
<body>
    <h1>Entre em Contato</h1>
    <form method="post" action="">
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" required><br><br>>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Mensagem: </label>
        <textarea name="message" id="message" rows="5" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>