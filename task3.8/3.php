<?php
$dsn = "mysql:host=localhost;dbname=reviews_db";
$username = "root";
$password = "";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully\n";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $review = $_POST['review'];
    $rating = (int) $_POST['rating'];

    if (empty($username) || empty($review) || empty($rating)) {
        die("All fields are required.");
    }
    $sql = "INSERT INTO reviews (name, review, rating) VALUES (:username, :review, :rating)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username, 'review' => $review, 'rating' => $rating]);
        // Подготовка SQL-запроса для выборки отзывов
        $sql = "SELECT * FROM reviews";
        $stmt = $pdo->query($sql);
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($reviews) {
            foreach ($reviews as $review) {
                echo "<div>";
                echo "<strong>" . htmlspecialchars($review['name']) . "</strong><br>";
                echo "Rating: " . htmlspecialchars($review['rating']) . "/5<br>";
                echo "Review: " . htmlspecialchars($review['review']) . "<br>";
                echo "Date: " . htmlspecialchars($review['created_at']) . "<br>";
                echo "</div><hr>";
            }
        } else {
            echo "No reviews.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>