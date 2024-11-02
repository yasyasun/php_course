<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $review = htmlspecialchars(trim($_POST['review']));
    $rating = htmlspecialchars(intval($_POST['rating']));
    
    if (empty($username)) {
        echo "Пожалуйста, введите ваше имя.";
    } elseif (empty($review)) {
        echo "Пожалуйста, оставьте отзыв.";
    } elseif ($rating < 1 || $rating > 5) {
        echo "Оценка должна быть числом от 1 до 5.";
    } else {
        echo "Имя: " . $username . "<br>";
        echo "Отзыв: " . $review . "<br>";
        echo "Рейтинг: " . $rating;
    }
}
?>