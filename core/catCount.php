<?php
session_start();
include_once 'cat.php';

$catCount = [];
for ($i = 0; $i < 10; $i++) {
    $name = ""; //Имена котов, пустые, заполняются случайно. Генерация происходит после генерации кол-ва карточек.
    $age = "";
    $description = ''; // Описание.
    $catCount[] = new Cat($name, $age, $description);
}
//echo '<pre>';
//print_r($catCount);
//echo '</pre>';