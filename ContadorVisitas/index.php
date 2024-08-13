<?php 
// Define o caminho do arquivo de contagem
$file = 'count.txt';

// Verifica se o arquivo exixte; se não, cria um com valor inicial de 0
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// lê o numero atual de visitas
$count = (int)file_get_contents($file);

// incrementa o contador
$count = (int)file_get_contents($file);

// incrementa o contador
$count++;

// salva o novo numero de visitas no arquivo
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <p>Esta pagina foi visitada <?php echo $count; ?> Vezes. </p>
</body>
</html>