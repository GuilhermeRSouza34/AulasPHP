<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', quantidade=$quantidade, preco=$preco WHERE id=$id";

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
    <title>Editar Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Produto</h1>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"><?php echo $row['descricao']; ?></textarea>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" value="<?php echo $row['quantidade']; ?>" required>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?php echo $row['preco']; ?>" required>

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
