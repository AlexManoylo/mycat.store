<?php
session_start();

$totalPrice= 0;

foreach ($_SESSION['cart'] as $product){
    $totalPrice += $product['price'] * $product['quantity'];
}