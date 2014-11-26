<?php
require __DIR__ . '/vendor/autoload.php';

echo "USAGE: php index.php PRICE QUANITY" . PHP_EOL;

$price = $argv[1];
$quantity = $argv[2];

$product = new Product($price);
$calc = new Calc($product);

$view = new View();

echo "Il prodotto costa € " . $view->format($calc->getPrice($quantity)) . PHP_EOL;

