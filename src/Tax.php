<?php

class Tax
{
    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getTotalPrice()
    {
        return $this->product->getPrice() * 1.22;
    }
}
