<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $review = htmlspecialchars(trim($_POST['review']));
    $rating = htmlspecialchars(intval($_POST['rating']));
    
    if (empty($username)) {
        echo "Пожалуйста, введите ваше имя.";
    } elseif ($rating < 1 || $rating > 5) {
        echo "Оценка должна быть числом от 1 до 5.";
    } elseif (empty($review)) {
        echo "Пожалуйста, оставьте отзыв.";
    } else {
        if (!isset($_SESSION['reviews'])) {
            $_SESSION['reviews'] = [];
        }
        $_SESSION['reviews'][] = ['username' => $username, 'review' => $review, 'rating' => $rating];
        foreach ($_SESSION['reviews'] as $oneReview) {
            echo "Имя: " . $oneReview['username'] . "<br>";
            echo "Отзыв: " . $oneReview['review'] . "<br>";
            echo "Рейтинг: " . $oneReview['rating'] . "<br><br>";
        }
    }
}
?>