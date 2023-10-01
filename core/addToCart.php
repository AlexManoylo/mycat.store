<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    // Добавить продукт в корзину или выполнить другие необходимые действия
    $_SESSION['cart'][] .= $productId;
    header("Location: ../index.php");
    exit();
} else {

}
