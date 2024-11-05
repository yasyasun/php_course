const form = document.getElementById('user-form');
form.addEventListener('submit', (e) => {
    e.preventDefault(); // Предотвращаем отправку формы по умолчанию

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    fetch('http://localhost:3000/users')
    .then(response => {
        if (!response.ok) {
            throw new Error("Ошибка сети");
        }
        return response.json();
    })
    .then(users => {
        const maxId = users.length > 0 ? Math.max(...users.map(user => user.id)) : 0;
        const newUser = {
            id: maxId + 1, // Генерируем новый ID
            name: name,
            email: email
        };
        fetch('http://localhost:3000/users', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newUser) // Преобразуем объект в JSON-строку
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Ошибка сети");
            }
            return response.json();
        })
        .then(data => {
            console.log('Пользователь добавлен:', data);
        })
        .catch(error => console.error('Ошибка:', error));
    })
    .catch(error => console.error('Ошибка:', error));
});