<?php
// Подключение к базе данных
$dsn = "mysql:host=localhost;dbname=reviews_db";
$username = "root";
$password = "";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully\n";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Проверка, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $review = $_POST['review'];
    $rating = (int) $_POST['rating'];

    // Проверка на корректность данных
    if (empty($username) || empty($review) || empty($rating)) {
        die("All fields are required.");
    }
    $sql = "INSERT INTO reviews (name, review, rating) VALUES (:username, :review, :rating)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username, 'review' => $review, 'rating' => $rating]);
        echo "Review saved successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>