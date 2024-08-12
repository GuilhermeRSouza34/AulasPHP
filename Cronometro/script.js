// Função para iniciar o cronômetro com a duração especificada
function startTimer(duration) {
    let timer = duration, minutes, seconds;
    
    // Define um intervalo para atualizar o cronômetro a cada segundo
    const interval = setInterval(function () {
        // Calcula os minutos e segundos restantes
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        // Adiciona um zero à esquerda se for menor que 10
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        // Atualiza o display do cronômetro na página
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;

        // Diminui o tempo restante
        if (--timer < 0) {
            clearInterval(interval); // Para o cronômetro quando o tempo acaba
            alert("Tempo esgotado!"); // Exibe um alerta ao finalizar
        }
    }, 1000); // Intervalo de 1 segundo
}