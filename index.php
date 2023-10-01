<?php
session_start();

if (!isset($_SESSION['catProducts'])) {
    include 'core\CatArrayConverter.php';
    $_SESSION['catProducts'] = $catProducts;
}
include 'core\CatArrayConverter.php';
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

    <div class="container">
        <?php foreach ($catProducts as $product): ?>
        <div class="card">
            ID: <?php echo $product['id']; ?><br>
            <div class="name">Имя: <br> <?php echo $product['name']; ?></div>
            Возраст: <?php echo $product['age']; ?><br>
<!--            Описание:  <br>-->
            Цена: <?php echo $product['price']; ?>$<br>
            Количество: <?php echo $product['quantity']; ?><br>
            <img class="product-image" src="<?php echo $product['image']; ?>" title=" <?php echo $product['description']; ?>"><br>
            <input type="submit" value="Купить"><br>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<?php //session_unset() ?>