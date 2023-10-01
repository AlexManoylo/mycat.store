<?php

session_start();
include_once 'addToCart.php';

if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = [];
}

foreach ($cart as $productId){
    echo "ID Котёнка " . $product['id'] . "<br>";
}
