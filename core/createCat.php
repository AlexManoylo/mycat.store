<?php
session_start();
include_once 'catCount.php';
include_once 'catName.php';


for ($i = 0; $i < count($catCount); $i++) {
    $id = $i+1;
    $randomName = $randomCat [$i];
    $randomDescription = $randomCatDescriptions [$i];
    $randomAge = rand(1, 10);
    $randomQuantity = rand(1, 10);
    $randomPrice = rand(100, 1000) /100;
    $imagePath = 'images/'. $id . '.jpg';

    $catCount[$i]->setId($id);
    $catCount[$i]->setName($randomName);
    $catCount[$i]->setDescription($randomDescription);
    $catCount[$i]->setAge($randomAge);
    $catCount[$i]->setQuantity($randomQuantity);
    $catCount[$i]->setPrice($randomPrice);
    $catCount[$i]->setImage($imagePath);
}

//echo '<pre>';
//print_r($catCount);
//echo '</pre>';