let count = 0;
const button = document.getElementById("click-button");
const counterDisplay = document.getElementById("counter");

function updateCounter() {
    counterDisplay.textContent = count;
}

button.addEventListener('click', function() {
    count++;
    updateCounter();
});