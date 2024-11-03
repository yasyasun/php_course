<?php
$dsn = "mysql:host=localhost;dbname=reviews_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $reason = $_POST['reason'];
    
    if (empty($order_id) || empty($reason)) {
        die("All fields are required.");
    }

    $sql = "INSERT INTO cancellations (order_id, reason) VALUES (:order_id, :reason)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':order_id' => $order_id, ':reason' => $reason]);
        echo "Order #$order_id successfully cancelled!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>