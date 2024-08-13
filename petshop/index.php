<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais - Petshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Animais</h1>

        <!-- Formulário para adicionar um novo animal -->
        <form method="POST" action="">
            <input type="text" name="nome" placeholder="Nome do animal" required>
            <input type="text" name="especie" placeholder="Espécie" required>
            <input type="number" name="idade" placeholder="Idade" required>
            <button type="submit" name="adicionar">Adicionar Animal</button>
        </form>

        <?php
        $arquivo = 'animais.txt';

        // Função para adicionar novo animal ao arquivo
        if (isset($_POST['adicionar'])) {
            $nome = trim($_POST['nome']);
            $especie = trim($_POST['especie']);
            $idade = trim($_POST['idade']);

            if (!empty($nome) && !empty($especie) && !empty($idade)) {
                $animal = "$nome,$especie,$idade" . PHP_EOL;
                file_put_contents($arquivo, $animal, FILE_APPEND);
            }
        }

        // Função para excluir um animal
        if (isset($_GET['excluir'])) {
            $linha_para_excluir = $_GET['excluir'];
            $animais = file($arquivo, FILE_IGNORE_NEW_LINES);
            unset($animais[$linha_para_excluir]);
            file_put_contents($arquivo, implode(PHP_EOL, $animais) . PHP_EOL);
        }

        // Exibe a lista de animais cadastrados
        if (file_exists($arquivo)) {
            $animais = file($arquivo, FILE_IGNORE_NEW_LINES);
            if (!empty($animais)) {
                echo "<ul>";
                foreach ($animais as $indice => $animal) {
                    list($nome, $especie, $idade) = explode(',', $animal);
                    echo "<li>$nome, $especie, $idade anos <a href='?excluir=$indice' class='excluir'>Excluir</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum animal cadastrado.</p>";
            }
        }
        ?>
    </div>
</body>
</html>