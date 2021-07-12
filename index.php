<?php
require __DIR__ . "/Classes/Product.php";

$product1 = new Product("pippo","20","made in china");
$product2 = new Product("pippa","30");
$product1 -> setName("Andrea");

; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><?= $product1 -> getName(); ?></h1>
        <h2><?= $product1 -> price; ?></h2>
        <h3><?= $product1 -> origin; ?></h3>
    </body>
</html>