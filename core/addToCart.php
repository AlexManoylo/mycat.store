<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];
    $sum = 0;

    //Добавляем количетво в корзину, если товар ранее был добавлен в неё
    $productExists = false;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$product) {
            if ($product['id'] == $productId) {
                $product['quantity'] += 1;
                $product['sum'] = $product['quantity'] * $product['price'];
                $productExists = true;
                break;
            }
        }
    }



    //Добавляем товар в корзину, если до этого его там не было
    if (!($productExists)) {
        $_SESSION['cart'][] = array(
            'id' => $productId,
            'name' => $name,
            'age' => $age,
            'description' => $description,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $image,
            'sum' => $price * $quantity,
        );
    }
    header("Location: ../index.php");
    exit();
} else {
}
