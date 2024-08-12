<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (nome, descricao, quantidade, preco) VALUES ('$nome', '$descricao', $quantidade, $preco)";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Produto</h1>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"></textarea>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" required>

            <button type="submit">Adicionar</button>
        </form>
    </div>
</body>
</html>
