<?php
session_start();

include 'core\catArrayConverter.php';

if (!isset($_SESSION['productVariables'])) {
    $randomName = generateRandomName();
    $randomDescription = generateRandomDescription();
    $randomAge = generateRandomAge();
    $randomQuantity = generateRandomQuantity();
    $randomPrice = generateRandomPrice();

    $_SESSION['productVariables'] = [
        'name' => $randomName,
        'description' => $randomDescription,
        'age' => $randomAge,
        'quantity' => $randomQuantity,
        'price' => $randomPrice
    ];
} else {
    // Если переменные уже существуют в сессии, используем сохраненные значения
    $randomName = $_SESSION['productVariables']['name'];
    $randomDescription = $_SESSION['productVariables']['description'];
    $randomAge = $_SESSION['productVariables']['age'];
    $randomQuantity = $_SESSION['productVariables']['quantity'];
    $randomPrice = $_SESSION['productVariables']['price'];
}