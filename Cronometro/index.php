<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cronômetro de Contagem Regressiva</title>
    <script>
        // Função que inicia a contagem regressiva
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10); // Converte os segundos restantes em minutos
                seconds = parseInt(timer % 60, 10); // Obtém os segundos restantes

                // Formata os minutos e segundos para sempre mostrar dois dígitos
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds; // Atualiza o display com o tempo restante

                // Reduz o tempo em um segundo a cada iteração
                if (--timer < 0) {
                    timer = 0; // Para a contagem quando o tempo chega a zero
                    alert("Tempo esgotado!"); // Exibe um alerta quando o tempo se esgota
                }
            }, 1000); // Intervalo de 1 segundo para cada iteração
        }

        // Quando a página é carregada, o cronômetro é iniciado
        window.onload = function () {
            var timeInMinutes = 1; // Define o tempo inicial em minutos
            var timeInSeconds = timeInMinutes * 60; // Converte os minutos para segundos
            var display = document.querySelector('#time'); // Obtém o elemento onde o tempo será exibido
            startTimer(timeInSeconds, display); // Inicia a contagem regressiva
        };
    </script>
</head>
<body>
    <h1>Cronômetro de Contagem Regressiva</h1>
    <!-- Exibe o tempo restante -->
    <div>Tempo restante: <span id="time"></span> minutos</div>
</body>
</html>