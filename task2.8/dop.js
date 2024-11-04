const submitButton = document.getElementById('submitButton');

submitButton.addEventListener('click', function(event) {
    // Отменяем стандартное поведение при отправке формы
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    if (name.trim() === '' || email.trim() === '') {
        alert(`Пожалуйста, заполните все поля`);
        return;
    }

    alert(`Спасибо! Вы отправили данные:\nИмя: ${name.trim()}\nEmail: ${email.trim()}`);
});