<?php

class Calc
{
    private $product;
    private $discount;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getPrice($quantity)
    {
         $value = $this->product->getPrice() * $quantity;

         if ($value > 1000) {
            $value = ($value - ($value*$this->discount/100));
         }

         return $value;
    }

    public function setDiscountInPercentage($discount)
    {
        $this->discount = $discount;
    }
}
