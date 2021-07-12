<?php
require __DIR__ . "/Classes/Product.php";

$product1 = new Product("",100,"made in china",3, 5, "","alimentari");
$product2 = new Product("",200,"made in china",6, 2, "", "informatica");
$product1 -> setName("Zucchina");
$product2 -> setName("Computer");

var_dump($product1);
var_dump($product2);

; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
    <div>
        <h2>nome: <?= $product1 -> getName(); ?></h2>
        <h3>prezzo iniziale: <?= $product1 -> getPrice(); ?></h3>
        <h3>prezzo scontato: <?= $product1 -> getSalePrice(); ?></h3>
        <h3>sconto: <?= $product1 -> getDiscount(); ?>%</h3>
        <h4>origine: <?= $product1 -> origin; ?></h4>
    </div>
        <hr>
    <div>
        <h2>nome: <?= $product2 -> getName(); ?></h2>
        <h3>prezzo iniziale: <?= $product2 -> getPrice(); ?></h3>
        <h3>prezzo scontato: <?= $product2 -> getSalePrice(); ?></h3>
        <h3>sconto: <?= $product2 -> getDiscount(); ?>%</h3>
        <h4>origine: <?= $product2 -> origin; ?></h4>
    </div>

    </body>
</html>