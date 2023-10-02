<?php
session_start();
include_once 'createCat.php';

foreach ($catCount as $cat) {
    $catProducts[] = [
        'id' => $cat->getId(),
        'name' => $cat->getName(),
        'age' => $cat->getAge(),
        'description' => $cat->getDescription(),
        'price' => $cat->getPrice(),
        'quantity' => $cat->getQuantity(),
        'image' => $cat->getImage(),
        ];
}
//echo '<pre>';
//print_r($catProducts);
//echo '<pre>';

