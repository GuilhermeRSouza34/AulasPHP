<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronômetro</title>
    <!-- Link para o arquivo de estilo CSS externo -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cronômetro</h1>
        <!-- Área que exibe o tempo do cronômetro -->
        <div class="timer">
            <span id="minutes">00</span>:<span id="seconds">00</span>
        </div>
        <!-- Formulário para o usuário definir o tempo do cronômetro -->
        <form id="timeForm" method="POST">
            <div class="input-group">
                <label for="timeInput">Tempo (em segundos):</label>
                <!-- Campo de entrada para o usuário definir o tempo em segundos -->
                <input type="number" id="timeInput" name="timeInput" min="1" placeholder="Digite o tempo" required>
            </div>
            <!-- Botão para iniciar o cronômetro -->
            <button type="submit">Iniciar</button>
        </form>
        <!-- Botões para pausar e zerar o cronômetro -->
        <div class="controls">
            <!-- Botão para pausar o cronômetro -->
            <button id="pauseButton">Pausar</button>
            <!-- Botão para zerar o cronômetro -->
            <button id="resetButton">Zerar</button>
        </div>
    </div>

    <!-- Inclusão do arquivo de script JavaScript externo -->
    <script src="script.js"></script>

    <?php
    // Verifica se o formulário foi enviado (método POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Converte o valor enviado pelo usuário para um número inteiro
        $timeInSeconds = intval($_POST["timeInput"]);
        // Gera um script JavaScript para inicializar o cronômetro com o tempo definido
        echo "<script>initializeTimer($timeInSeconds);</script>";
    }
    ?>
</body>
</html>