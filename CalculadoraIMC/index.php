<?php
// index.php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Link para a fonte Roboto do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso" step="0.1" min="0" required>
            </div>
            <div class="form-group">
                <label for="altura">Altura (m):</label>
                <input type="number" name="altura" id="altura" step="0.01" min="0" required>
            </div>
            <input type="submit" value="Calcular IMC">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = floatval(str_replace(",", ".", $_POST['peso']));
            $altura = floatval(str_replace(",", ".", $_POST['altura']));

            if ($peso <= 0 || $altura <= 0) {
                echo "<div class='result'>Por favor, insira valores válidos para peso e altura.</div>";
            } else {
                $imc = $peso / ($altura * $altura);
                $imc_formatado = number_format($imc, 2, ',', '.');

                if ($imc < 18.5) {
                    $categoria = "Abaixo do peso";
                } elseif ($imc >= 18.5 && $imc < 24.9) {
                    $categoria = "Peso normal";
                } elseif ($imc >= 25 && $imc < 29.9) {
                    $categoria = "Sobrepeso";
                } elseif ($imc >= 30 && $imc < 34.9) {
                    $categoria = "Obesidade Grau I";
                } elseif ($imc >= 35 && $imc < 39.9) {
                    $categoria = "Obesidade Grau II";
                } else {
                    $categoria = "Obesidade Grau III ou Mórbida";
                }

                echo "<div class='result'>
                        Seu IMC é: <strong>$imc_formatado</strong><br>
                        Categoria: <strong>$categoria</strong>
                      </div>";
            }
        }
        ?>
    </div>
</body>
</html>
