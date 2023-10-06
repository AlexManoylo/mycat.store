<?php
//session_start();
//include 'catCount.php';
include 'catName.php';
include 'cat.php';


$cat = [];
for ($i = 0; $i < count($catName); $i ++) {
    $cat[$i] = new Cat(
        $i + 1,
        $catName[$i],
        rand(1, 10),
        $catDescription[$i],
        rand(100, 1000) / 100,
        rand(1, 10),
        'images/' . ($i+1)  . '.jpg'
    );
}

//'<pre>';
//print_r($cat);
//'</pre>';
//var_dump($skeletCat2);

//for ($i = 0; $i < 10; $i++) {
//    $skeletCat[id] = $i + 1;
//    $skeletCat[name] = $randomCat [$i];
//    $skeletCat[description] = $randomCatDescriptions [$i];
//    $skeletCat[age] = rand(1, 10);
//    $skeletCat[quantity] = rand(1, 10);
//    $skeletCat[price] = rand(100, 1000) / 100;
//    $skeletCat[image] = 'images/' . $id . '.jpg';
//
//
//    foreach ($skeletCat as $someCat) {
//        $cat[] = new Cat(
//            $someCat['id'],
//            $someCat['name'],
//            $someCat['age'],
//            $someCat['discription'],
//            $someCat['price'],
//            $someCat['quantity'],
//            $someCat['image'],
//
//        );
//    }
//}













//for ($i = 0; $i < 10); $i++) {
//    $id = $i+1;
//    $randomName = $randomCat [$i];
//    $randomDescription = $randomCatDescriptions [$i];
//    $randomAge = rand(1, 10);
//    $randomQuantity = rand(1, 10);
//    $randomPrice = rand(100, 1000) /100;
//    $imagePath = 'images/'. $id . '.jpg';
//
//    $catCount[$i]->setId($id);
//    $catCount[$i]->setName($randomName);
//    $catCount[$i]->setDescription($randomDescription);
//    $catCount[$i]->setAge($randomAge);
//    $catCount[$i]->setQuantity($randomQuantity);
//    $catCount[$i]->setPrice($randomPrice);
//    $catCount[$i]->setImage($imagePath);
//}


//echo '<pre>';
//print_r($catCount);
//echo '</pre>';