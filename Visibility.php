<?php

require_once "data/Product.php";

$product = new Product("Laptop", 100000);

//echo $product->name . PHP_EOL; //ini akan error karena property name adalah private, jadi tidak bisa diakses dari luar class. dan ini adalah contoh dari visibility.
echo $product->getName(). PHP_EOL;
echo $product->getPrice(). PHP_EOL;

$dummy = new ProductDUmmy("Keyboard", 200000);
$dummy->info(); 