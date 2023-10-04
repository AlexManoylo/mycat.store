<?php

session_start();
include_once 'core/addToCart.php';
include_once 'core/totalPrice.php';

if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = [];
}
//echo '<pre>';
//print_r($cart);
//echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/cartStyles.css">
    <link rel="stylesheet" type="text/css" href="css/totalSum.css">
    <title>Document</title>
</head>
<body>

<button onclick="window.location.href= 'index.php'">Вернуться к выбору котят</button>
<?php if ($totalPrice): ?>
    <form action="core/cart/clearCart.php" method="post" class="clearCart">
    <input type="submit" value="Очистить Корзину">
</form>
    <div class="totalCartSum">
    <?php echo '<div class="cartSum">'.'Сумма: '. $totalPrice . '$' . '</div>'?>

        <form action="core/checkout.php" method="post" class="checkout">
            <input type="submit" value="Оформить заказ">
             </form>

    </div>
    <?php else: ?>
    <div class="emptyCart">
    <br>
<img class="empty-cart" src="imagesSite/emptyCart.jpg">
<br> Ваша корзина пуста!
</div>
<?php endif; ?>
<div class="container">
<?php foreach ($cart as $product): ?>
    <div class="card">
    ID: <?php echo $product['id']; ?><br>
    Имя: <br> <?php echo $product['name']; ?><br>
    Возраст: <?php echo $product['age']; ?><br>
<!--    Описание: --><?php //echo $product['description']; ?><!--<br>-->
    Цена: <?php echo $product['price'];?><br>
    Количество: <?php echo $product['quantity']; ?><br>
    <img class="product-image" src="<?php echo $product['image']; ?>" title=" <?php echo $product['description']; ?>"><br>
    Сумма:  <?php echo $product['sum']; ?>
    </div>
<?php endforeach; ?>

</div>
</body>

</html>
