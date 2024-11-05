fetch("http://localhost:3000/users")
    .then((response) => {
        if (!response.ok) {
            throw new Error("Ошибка сети");
        }
        return response.json();
    })
    .then((data) => {
        const userTableBody = document.getElementById("userTableBody");
        const editModal = document.getElementById("editModal");
        const editForm = document.getElementById("editForm");
        const closeModal = document.getElementById("closeModal");

        data.forEach(user => {
            const row = document.createElement('tr'); // Создаем строку
            const nameCell = document.createElement('td'); // Ячейка для имени
            const emailCell = document.createElement('td'); // Ячейка для email
            nameCell.textContent = user.name; 
            emailCell.textContent = user.email;
            const buttonCell = document.createElement('td'); // Ячейка для кнопки
            const editButton = document.createElement('button'); // Создаем кнопку для редактирования
            editButton.textContent = "Редактировать";
            const deleteButton = document.createElement('button');
            deleteButton.textContent = "Удалить";
            row.appendChild(nameCell); // Добавляем ячейки в строку
            row.appendChild(emailCell);
            buttonCell.appendChild(editButton); // Добавляем кнопку в ячейку
            buttonCell.appendChild(deleteButton); 
            row.appendChild(buttonCell);
            userTableBody.appendChild(row); // Добавляем строку в тело таблицы

            editButton.addEventListener('click', () => {
                // Заполняем элементы формы данными пользователя
                document.getElementById('editName').value = user.name;
                document.getElementById('editEmail').value = user.email;
                
                editForm.dataset.userId = user.id;

                // Показываем модальное окно
                editModal.style.display = 'block';
                console.log(`Редактируем ${user.name}`);
            });
            deleteButton.addEventListener('click', () => {
                fetch(`http://localhost:3000/users/${user.id}`, {
                    method: 'DELETE'
                })
                .then(() => {
                    console.log('Пользователь удален');
                })
                .catch(error => console.error('Ошибка:', error));
            })
        });
        // Обработчик для закрытия модального окна
        closeModal.addEventListener('click', () => {
            editModal.style.display = 'none';
        });

        // Обработчик отправки формы редактирования
        editForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Предотвращаем отправку формы по умолчанию
            const userId = editForm.dataset.userId;
            const updatedUser = {
                name: document.getElementById('editName').value,
                email: document.getElementById('editEmail').value
            };

            console.log("Обновленные данные пользователя:", updatedUser);

            fetch(`http://localhost:3000/users/${userId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(updatedUser)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Ошибка сети");
                }
                return response.json();
            })
            .then(data => {
                console.log('Пользователь обновлен:', data);
                location.reload(); // Перезагрузка страницы для обновления данных
            })
            .catch(error => console.error('Ошибка:', error));
            editModal.style.display = 'none'; // Закрываем модальное окно после отправки
        });
    })
    .catch((error) => console.error("Ошибка:", error));
