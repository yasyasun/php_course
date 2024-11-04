const emailInput = document.getElementById("email");
const errorMessage = document.getElementById("error-message");
const submitBtn = document.getElementById("submit-btn");

emailInput.addEventListener('input', function() {
    const emailValue = emailInput.value;
    // Пример простого регулярного выражения для проверки email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailValue)) {
        errorMessage.style.display = 'inline';
        submitBtn.disabled = true;
    } else {
        errorMessage.style.display = 'none';
        submitBtn.disabled = false;
    }
});

let seconds = 0;

function updateTimer() {
    seconds++;
    document.getElementById('timer').textContent = seconds;
}

// Запуск обновления таймера каждую секунду
setInterval(updateTimer, 1000);