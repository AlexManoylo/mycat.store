<?php

session_start();

$totalPrice = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $totalPrice += $product['price'] * $product['quantity'];

    }
} else {
    $totalPrice = false;
        }