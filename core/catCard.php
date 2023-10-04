<?php
session_start();

include 'сatArrayConverter.php';

$productId = $_GET['id'];

$catCard = $catProducts[$productId];

echo '<img src="/' . $catCard['image'] . '" alt="Название товара">';