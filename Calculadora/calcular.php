<?php

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erro: Divisão por zero não permitida.";
            }
        default:
            return "Operação inválida.";
    }
}

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $result = calculate($num1, $num2, $operation);
    } else {
        $result = "Erro: Por favor, insira valores numéricos válidos.";
    }

    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado da Calculadora PHP</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='calculator'>
            <p>Resultado: <strong>$result</strong></p>
            <a href='index.php'>Voltar</a>
        </div>
    </body>
    </html>";
}
?>