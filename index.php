<?php
require __DIR__ . '/vendor/autoload.php';

echo "USAGE: php index.php PRICE QUANITY DISCOUNT%" . PHP_EOL;

$price = $argv[1];
$quantity = $argv[2];
$discount = $argv[3];

$product = new Product($price);
$product->setDiscountInPercentage($discount);

$calc = new Calc($product);
$calc->setDiscountInPercentage(20);
$calc->setQuantity($quantity);

$tax = new Tax($calc);

$view = new View();

echo "Il prodotto costa € " . $view->format($tax->getTotalPrice()) . PHP_EOL;

