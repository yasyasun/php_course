<?php
// Уровень 1: Легкий
// Задачи:
// 1. Конкатенация строк:
// Объявите две строки, объедините их в одну.
// Подсказка: используйте оператор . для объединения переменных.

$str1 = "Привет, ";
$str2 = "мир!";
$res = $str1 . $str2;
echo $res . "\n";

// 2. Изменение регистра:
// Преобразуйте строку в нижний и верхний регистры.
// Подсказка: используйте strtoupper() и strtolower() .

$str = "Привет, Мир!";
$strEn = "Hello, World!";
echo mb_strtoupper($str, 'UTF-8') . "\n"; 
echo mb_strtolower($str, 'UTF-8') . "\n";
echo strtoupper($strEn) . "\n";
echo strtolower($strEn) . "\n";

// 3. Сравнение строк:
// Сравните две строки, учитывая и не учитывая регистр.
// Подсказка: попробуйте операторы == , === и функцию strcasecmp() .

$str1 = "123";
$str2 = 123;

if ($str1 == $str2) {
    echo "Строки равны\n";
} else {
    echo "Строки неравны\n";
}

if (strcasecmp($str1, $str2) === 0) {
    echo "Строки равны без учета регистра\n";
} else {
    echo "Ошибка!\n";
}

// 4. Поиск подстроки:
// Найдите позицию подстроки в строке.
// Подсказка: используйте функцию strpos() .

$str = "Hello, baby!";
$pos = strpos($str, "baby");
echo $pos . "\n";

// 5. Замена подстроки:
// Замените одно слово в строке на другое.
// Подсказка: используйте str_replace() .

$text = "Hello, world!";
echo str_replace("world", "baby", $text) . "\n";

// 6. Форматирование строки:
// Отформатируйте строку с использованием переменных.
// Подсказка: используйте функцию sprintf() с нужными спецификаторами.

$name = "Апельсины";
$price = 109.90;
$formattedStr = sprintf("%s стоят %.2f рублей.", $name, $price);
echo $formattedStr . "\n";

// 7. Разделение строки:
// Разделите строку по разделителю и объедините её обратно.
// Подсказка: используйте explode() и implode() .

$str = "apple orange peach banana";
$strArr = explode(" ", $str);
print_r($strArr);
$newStr = implode(", ", $strArr);
echo $newStr . "\n";

// 8. Работа с многострочным текстом:
// Преобразуйте многострочный текст в HTML-разметку с <br> .
// Подсказка: используйте nl2br() .

$text = "Привет! Это первый абзац.\nЭто второй абзац.\nИ вот третий абзац.";
$htmlText = nl2br($text);
echo $htmlText . "\n";

// Уровень 2: Усложненный
// Задачи:
// 1. Сложная конкатенация строк:
// Объедините несколько строк и добавьте в них переменные в одном
// выражении.
// Подсказка: используйте оператор . для объединения строк с динамическими
// данными.

$name = "Yana";
echo "Hello, $name!" . " " . "How are you?\n";

// 2. Изменение регистра с условиями:
// Преобразуйте строку так, чтобы каждое слово начиналось с заглавной
// буквы.
// Подсказка: используйте функции ucwords() и strtolower() .

$str = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.";
echo ucwords(strtolower($str)) . "\n";

// 3. Сравнение строк с учётом регистра и без:
// Проверьте строки на полное совпадение и сравните их без учёта регистра.
// Подсказка: используйте операторы == , === и функцию strcasecmp() .

$str1 = "banana";
$str2 = "Banana";

if ($str1 === $str2) {
    echo "Строки идентичны\n";
} else {
    echo "Ошибка!\n";
}

if (strcasecmp($str1, $str2) === 0) {
    echo "Строки равны без учета регистра\n";
} else {
    echo "Ошибка!\n";
}

// 4. Замена подстроки с использованием массива:
// Замените несколько слов в строке одновременно, используя массивы для
// поиска и замены.
// Подсказка: примените str_replace() , передавая массивы.

$text = "Я люблю яблоки и груши.";

$search = array("яблоки", "груши");
$replace = array("бананы", "апельсины");
$result = str_replace($search, $replace, $text);
echo $result . "\n";

// 5. Форматирование строки с числом:
// Отформатируйте строку, включив в неё числовые значения и строки.
// Подсказка: используйте функцию sprintf() с комбинацией %s и %d .

$name = "Yana";
$age = 30;
$formattedStr = sprintf("My name is %s. I'm %d years old.", $name, $age);
echo $formattedStr . "\n";

// 6. Разделение и объединение сложной строки:
// Разделите строку с числовыми значениями по разделителю, суммируйте
// элементы и выведите результат.
// Подсказка: используйте explode() и array_sum() .

$numbersString = "10, 20, 30, 40, 50";
$numbersArray = explode(", ", $numbersString);
$totalSum = array_sum($numbersArray);
echo "Сумма чисел: " . $totalSum . "\n";

// 7. Создание случайной строки:
// Напишите функцию, которая генерирует случайную строку из букв и цифр.
// Подсказка: используйте массив символов и функцию rand() .

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$randomIndex];
    }
    return $randomString;
}
echo generateRandomString(16) . "\n";

// 8. Проверка строки на палиндром:
// Напишите функцию, которая проверяет, является ли строка палиндромом.
// Подсказка: используйте strrev() для переворота строки.

function isPalindrome($string) {
    $cleanedString = strtolower(str_replace(' ', '', $string));
    $reversedString = strrev($cleanedString);
    return $cleanedString === $reversedString;
}

$testString1 = "A nut for a jar of tuna";
$testString2 = "Hi";

echo isPalindrome($testString1) ? "Палиндром!" : "Не палиндром!";
echo "\n";
echo isPalindrome($testString2) ? "Палиндром!" : "Не палиндром!";
?>