<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $paymentMethod = $_POST["payment_method"];
    $cart = $_SESSION['cart'];

    // Генерируем уникальное имя файла
    $filename = "../order/order_" . uniqid() . ".txt";

    // Формируем строку данных для записи в файл
    $data = "Имя: $name\nEmail: $email\nАдрес: $address\nСпособ оплаты: $paymentMethod\n\n";

    foreach ($cart as $product) {
        $data .= "Артикул ". $product['id']  . "\nТовар: " . $product['name'] . "\nЦена: " . $product['price'] . "\nКоличество: " . $product['quantity'] . "\n\n";
    }
    $sumCheckout = 0;
    foreach ($cart as $product){
        $sumCheckout += $product['price'] * $product['quantity'];
    }
    $data .= "Общая сумма заказа " . $sumCheckout . "\n\n";
    // Открываем файл в режиме добавления (a) и записываем данные
    $file = fopen($filename, "a");
    fwrite($file, $data, );
    fclose($file);

    echo "Заказ принят в работу!";
} else {
    header("Location: checkout.php");
    exit();
}
?>