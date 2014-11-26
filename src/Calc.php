<?php

class Calc
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getPrice($quantity)
    {
        return $this->product->getPrice() * $quantity;
    }
}
