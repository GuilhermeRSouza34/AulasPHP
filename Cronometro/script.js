let timerInterval; // Variável para armazenar o intervalo do cronômetro
let remainingTime; // Variável para armazenar o tempo restante

// Função para inicializar o cronômetro com a duração especificada
function initializeTimer(duration) {
    remainingTime = duration; // Define o tempo restante
    startTimer(); // Inicia o cronômetro
}

// Função para iniciar o cronômetro
function startTimer() {
    clearInterval(timerInterval); // Limpa qualquer intervalo anterior
    timerInterval = setInterval(function () {
        // Calcula os minutos e segundos restantes
        let minutes = parseInt(remainingTime / 60, 10);
        let seconds = parseInt(remainingTime % 60, 10);

        // Adiciona um zero à esquerda se for menor que 10
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        // Atualiza o display do cronômetro na página
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;

        // Diminui o tempo restante e verifica se o tempo acabou
        if (--remainingTime < 0) {
            clearInterval(timerInterval); // Para o cronômetro
            alert("Tempo esgotado!"); // Exibe uma mensagem ao finalizar
        }
    }, 1000); // Intervalo de 1 segundo
}

// Função para pausar o cronômetro
function pauseTimer() {
    clearInterval(timerInterval); // Para o cronômetro
}

// Função para zerar o cronômetro
function resetTimer() {
    clearInterval(timerInterval); // Para o cronômetro
    // Reseta o display do cronômetro para 00:00
    document.getElementById('minutes').textContent = "00";
    document.getElementById('seconds').textContent = "00";
    remainingTime = null; // Reseta o tempo restante
}

// Adiciona eventos aos botões
// Quando o botão "Pausar" for clicado, chama a função pauseTimer
document.getElementById('pauseButton').addEventListener('click', pauseTimer);
// Quando o botão "Zerar" for clicado, chama a função resetTimer
document.getElementById('resetButton').addEventListener('click', resetTimer);