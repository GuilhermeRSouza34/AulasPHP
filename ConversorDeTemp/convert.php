<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = floatval($_POST['temperature']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $converted_temperature = $temperature;

    if ($from === $to) {
        $converted_temperature = $temperature;
    } else {
        switch ($from) {
            case 'celsius':
                if ($to === 'fahrenheit') {
                    $converted_temperature = $temperature * 9/5 + 32;
                } elseif ($to === 'kelvin') {
                    $converted_temperature = $temperature + 273.15;
                }
                break;
            case 'fahrenheit':
                if ($to === 'celsius') {
                    $converted_temperature = ($temperature - 32) * 5/9;
                } elseif ($to === 'kelvin') {
                    $converted_temperature = ($temperature - 32) * 5/9 + 273.15;
                }
                break;
            case 'kelvin':
                if ($to === 'celsius') {
                    $converted_temperature = $temperature - 273.15;
                } elseif ($to === 'fahrenheit') {
                    $converted_temperature = ($temperature - 273.15) * 9/5 + 32;
                }
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado da Conversão</h1>
        <p><?php echo $temperature . " " . ucfirst($from) . " é igual a " . $converted_temperature . " " . ucfirst($to); ?></p>
        <a href="index.php">Nova Conversão</a>
    </div>
</body>