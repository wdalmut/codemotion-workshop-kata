<?php
require __DIR__ . '/vendor/autoload.php';

echo "USAGE: php index.php PRICE QUANITY DISCOUNT%" . PHP_EOL;

$price = $argv[1];
$quantity = $argv[2];
$discount = $argv[3];

$product = new Product($price);
$product->setDiscountInPercentage($discount);

$tax = new Tax($product);
$product->setPrice($tax->getTotalPrice());

$calc = new Calc($product);

$view = new View();

echo "Il prodotto costa € " . $view->format($calc->getPrice($quantity)) . PHP_EOL;

