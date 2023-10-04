<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="checkout-form">
    <h2>Оформление заказа</h2>
    <form action="processCheckout.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">Адрес доставки:</label>
        <textarea id="address" name="address" required></textarea><br>

        <label for="payment-method">Способ оплаты:</label>
        <select id="payment-method" name="payment_method" required>
            <option value="credit_card">Кредитная карта</option>
            <option value="cash">Наличные</option>
        </select><br>

        <input type="submit" value="Оформить заказ">
    </form>
</div>
</body>
</html>