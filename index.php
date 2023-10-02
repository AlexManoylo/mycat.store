<?php

session_start();

if (!isset($_SESSION['catProducts'])) {
    include 'core\сatArrayConverter.php';
    $_SESSION['catProducts'] = $catProducts;
}
include 'core\сatArrayConverter.php';
include_once 'core\reloadSite.php';
$catProducts = $_SESSION['catProducts'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<!--Переход в корзину    -->
<div class="cart">
    <button onclick="window.location.href= 'cart.html'">Корзинка с Котятами</button>
</div>
<div class="container">

    <!--Удаление всех данных о сессии и перезаполнение массива товаров -->
    <form action="core/reloadSite.php" method="post">
        <input type="hidden" name="value" value="true">
        <button type="submit">Посмотреть новеньких</button>
    </form>

    <!--Формирование списка товаров-->
    <?php
    foreach ($catProducts as $product): ?>
        <div class="card">
            ID: <?php
            echo $product['id']; ?><br>
            <div class="name">Имя: <br> <?php
                echo $product['name']; ?></div>
            Возраст: <?php
            echo $product['age']; ?><br>
            <!--            Описание:  <br>-->
            Цена: <?php
            echo $product['price']; ?>$<br>
            Количество: <?php
            echo $product['quantity']; ?><br>
            <img class="product-image" src="<?php
            echo $product['image']; ?>" title=" <?php
            echo $product['description']; ?>"><br>
            <form action="core/addToCart.php" method="post">
                <input type="hidden" name="productId" value="<?php
                echo $product['id']; ?>">
                <input type="hidden" name="name" value="<?php
                echo $product['name']; ?>">
                <input type="hidden" name="age" value="<?php
                echo $product['age']; ?>">
                <input type="hidden" name="description" value="<?php
                echo $product['description']; ?>">
                <input type="hidden" name="price" value="<?php
                echo $product['price']; ?>">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="image" value="<?php
                echo $product['image']; ?>">
                <input type="submit" value="Добавить в корзину"><br>
            </form>
        </div>
    <?php
    endforeach; ?>

</div>
</body>
</html>
