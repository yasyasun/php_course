// Задача 1: Поиск элементов и изменение содержимого
const heading = document.querySelector('h1');
heading.innerText = 'Новый заголовок';

const listItems = document.querySelectorAll('#myList li');
listItems.forEach((item, index) => {
    item.innerText = `${index + 1}. ${item.innerText}`;
});

// Задача 2: Редактирование атрибутов
const image = document.getElementById('myImage');
image.setAttribute('src', 'https://via.placeholder.com/200');

const link = document.getElementById('myLink');
link.setAttribute('href', 'https://anotherexample.com');
link.innerHTML = 'Новая ссылка';

// Задача 3: Манипуляции с элементами
const myList = document.getElementById('myList');

document.getElementById('add-item').addEventListener('click', () => {
    const newItem = document.createElement('li');
    newItem.textContent = `Новый элемент`;
    myList.appendChild(newItem);
});

document.getElementById('remove-item').addEventListener('click', () => {
    const lastItem = myList.lastElementChild;
    if (lastItem) {
        myList.removeChild(lastItem);
    }
});

// Задача 4: Манипуляции со стилями CSS
const paragraph = document.querySelector('p');

document.getElementById('change-color').addEventListener('click', () => {
    paragraph.style.color = paragraph.style.color === 'blue' ? 'green' : 'blue';
});

document.getElementById('toggle-paragraph').addEventListener('click', () => {
    paragraph.style.display = paragraph.style.display === 'none' ? 'block' : 'none';
});

// Задача 5: Работа с геометрией элементов
const headingElement = document.querySelector('div');

document.getElementById('getDimensionsButton').addEventListener('click', () => {
    const rect = headingElement.getBoundingClientRect();
    console.log(`Ширина: ${rect.width.toFixed(2)}\nВысота: ${rect.height.toFixed(2)}`);
    alert(`Ширина: ${rect.width.toFixed(2)}\nВысота: ${rect.height.toFixed(2)}`);
});