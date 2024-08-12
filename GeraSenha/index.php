<?php 
//Verifica se o valor foi enviado via POST
if (isset($_POST["lenght"])) {
    $length = $_POST["lenght"]; //recebe o comprimento da senha

    //Conjunto de caracteres disponiveis para a senha
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?/~`';
    $charactersLength = strlen($characters);
    $randomPassword = '';

    //Gera uma senha aleatoria com o comprimento especificado
    for ($i = 0; $i < $length; $i++) {
        $randomPassword.= $characters[rand(0, $charactersLength - 1)];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
</head>
<body>
    <h1>Gerador de senhas aleatórias</h1>
    <form method="post" action="">
        <label for="lenght">Comprimento da Senha:</label>
        <input type="number" name="length" id="length" min="1" max="20" required>
        <button type="submit">Gerar Senha</button>
    </form>

    <?php 
    //Exibe a senha gerada caso tenha sido criada
    if (isset($randomPassword)) {
        echo "<h2>Senha Gerada: $randomPassword</h2>";
    }
    ?>
</body>
</html>