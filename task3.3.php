<?php

// Задание 1: Определение четности чисел
// Инструкция:
// Создайте массив из 5 чисел. Используя цикл foreach и условные операторы ( if-else ),
// проверьте, является ли каждое число четным или нечетным, и выведите соответствующее
// сообщение.
// Число 10 — четное
// Число 15 — нечетное

$nums = [3, 5, 10, 7, 12];

foreach ($nums as $num) {
    if ($num % 2 === 0) {
        echo "Число $num четное";
    } else {
        echo "Число $num нечетное";
    }
}

// Задание 2: Подсчет положительных и отрицательных чисел
// Инструкция:
// Создайте массив из 7 чисел, содержащий как положительные, так и отрицательные
// значения. С помощью цикла foreach и ветвления ( if-else ) подсчитайте, сколько в
// массиве положительных и отрицательных чисел.
// Пример вывода:
// Положительных чисел: 4
// Отрицательных чисел: 3

$nums = [-3, 5, -10, 7, 12, -2, 1];
$pos_count = 0;
$neg_count = 0;
foreach ($nums as $num) {
    if ($num > 0) {
        $pos_count++;
    } elseif ($num < 0) {
        $neg_count++;
    }
}
echo "Положительных чисел: $pos_count";
echo "Отрицательных чисел: $neg_count";

// Задание 3: Таблица умножения
// Инструкция:
// Используя цикл for , выведите таблицу умножения для числа 5 от 1 до 10. Каждый
// результат должен выводиться на новой строке в формате: "5 * 1 = 5" .
// Пример:
// 5 * 1 = 5
// 5 * 2 = 10
// ...
// 5 * 10 = 50

for ($i = 1; $i <= 10; $i++) {
echo "5 * $i = " . (5 * $i) . "<br>";
}

// Задание 4: Условное отображение оценок студентов
// Инструкция:
// Создайте массив с именами 3 студентов и их оценками за экзамен (например: ["Иван" =>
// 85, "Мария" => 74, "Алексей" => 90] ). Используя цикл foreach и ветвления ( if-else ),
// напишите логику, которая определяет, сдал ли каждый студент экзамен:
// Если оценка 50 и выше — вывести: "<Имя студента> сдал экзамен!" .
// Если оценка ниже 50 — вывести: "<Имя студента> не сдал экзамен!" .
// Пример:
// Иван сдал экзамен!
// Мария не сдала экзамен!
// Алексей сдал экзамен!

$students = ["Иван" => 85, "Мария" => 49, "Алексей" => 90];

foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал(а) экзамен!<br>";
    } else {
        echo "$name не сдал(а) экзамен!<br>";
    }
}


// Задание 5: Поиск минимального и максимального значений
// Инструкция:
// Создайте массив из 8 случайных чисел. Используя цикл foreach , найдите и выведите
// минимальное и максимальное значения в массиве.
// Пример вывода:
// Минимальное число: 3
// Максимальное число: 98

$numbers = [-3, 5, -10, 7, 12, -2, 1, 19];
$max = $numbers[0];
$min = $numbers[0];

foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    } elseif ($number < $min) {
        $min = $number;
    }
}

echo "Максимальное число: $max";
echo "Минимальное число: $min";
?>