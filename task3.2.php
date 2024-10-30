<?php
// 1. Определение переменных и констант
$name = 'Yana';
$age = 30;
$isStudent = true;
define('NAME_SITE', 'My web site');

echo "Имя: " . $name;
echo "Возраст: " . $age;
echo "Студент: " . ($isStudent ? "Да" : "Нет");
echo "Название сайта: " . NAME_SITE;
print("Имя: " . $name);
print("Возраст: " . $age);
print("Студент: " . ($isStudent ? "Да" : "Нет"));
print("Название сайта: " . NAME_SITE);

// 2. Преобразование типов
$numberString = '123';
$number = (int)$numberString;
echo "Преобразованное число: " . $number;
echo "Тип переменной: " . gettype($number);

// 3. Использование операторов
$num1 = 12;
$num2 = 6;
echo "Сложение: " . $num1 + $num2;
echo "Вычитание: " . $num1 - $num2;
echo "Умножение: " . $num1 * $num2;
echo "Деление: " . $num1 / $num2;
echo "Сравнение: " . ($num1 > $num2 ? ($num1 . " больше " . $num2) : ($num1 . " меньше " . $num2));
echo "Логическое выражение: " . ($num1 > 5 && $num2 > 5 ? "Оба числа больше 5" : "Одно или два числа меньше 5");

// 4. Суперглобальная переменная $_SERVER
echo "Информация о сервере: " . $_SERVER['HTTP_USER_AGENT'];
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'];
?>