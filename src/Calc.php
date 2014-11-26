<?php

class Calc
{
    private $product;
    private $discount;
    private $quantity;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getPrice()
    {
         $value = $this->product->getPrice() * $this->quantity;

         if ($value > 1000) {
            $value = ($value - ($value*$this->discount/100));
         }

         return $value;
    }

    public function setDiscountInPercentage($discount)
    {
        $this->discount = $discount;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
