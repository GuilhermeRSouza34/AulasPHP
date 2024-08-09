<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        // Mostrar a data e hora atual
        echo"Hoje é dia " . date("y-m-d");
        echo " e a hora é ". date("g:i:s T");
    ?>
</body>
</html>