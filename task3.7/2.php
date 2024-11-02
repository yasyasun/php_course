<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderNum = htmlspecialchars(intval($_POST['orderNum']));
    $reasonCancel = isset($_POST['reasonCancel']) ? htmlspecialchars(trim($_POST['reasonCancel'])) : "";
    
    if ($orderNum < 1) {
        echo "Номер заказа должен быть числом больше 0.";
    } else {
        echo "Номер заказа: " . $orderNum . "<br>";
        echo "Причина отмены: " . $reasonCancel . "<br>";
    }
}
?>