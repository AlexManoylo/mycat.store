<?php

session_start();

if (!isset($_SESSION['cat'])) {
    include 'core/createCat.php';
    $_SESSION['cat'] = $cat;
}
//include 'core/сatArrayConverter.php';
include_once 'core/reloadSite.php';
$cat = $_SESSION['cat'];



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
    <button onclick="window.location.href= 'cart.php'">Корзинка с Котятами</button>
</div>


<!--Удаление всех данных о сессии и перезаполнение массива товаров -->

<form action="core/reloadSite.php" method="post" class="buttonReload">
    <input type="hidden" name="value" value="true">
    <button type="submit"><img src="imagesSite/reloadCat.jpg">Посмотреть новеньких</button>
</form>

<!--Формирование списка товаров-->
<div class="container">
    <?php foreach ($cat as $product): ?>
            <div class="card">
                <a href="core/catCard.php?id=<?php echo $product->getId(); ?>" class="card-link">
<!--            ID: --><?php //echo $product['id']; ?><!--<br>-->
            <h4><div class="name"><?php echo $product->getName(); ?></div></h4>
            Возраст: <?php echo $product->getAge(); ?><br><br>
            <!--            Описание:  <br>-->
            Цена: <?php echo $product->getPrice(); ?>$<br><br>
<!--            Количество: --><?php //echo $product['quantity'] ?><!--<br>-->
            <img class="product-image" src="<?php echo $product->getImage(); ?>
            "title=" <?php echo $product->getDescription(); ?>"><br>
                </a>
                <form action="core/addToCart.php" method="post">
                <input type="hidden" name="productId" value="<?php echo $product->getId(); ?>">
                <input type="hidden" name="name" value="<?php echo $product->getName(); ?>">
                <input type="hidden" name="age" value="<?php echo $product->getAge(); ?>">
                <input type="hidden" name="description" value="<?php echo $product->getDescription(); ?>">
                <input type="hidden" name="price" value="<?php echo $product->getPrice(); ?>">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="image" value="<?php echo $product->getImage(); ?>">
                <input type="submit" value="Добавить в корзину"><br> </form>
        </div>
    <?php
    endforeach; ?>

</div>
</body>
</html>
