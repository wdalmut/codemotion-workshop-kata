<?php
class Product
{
    private $price;
    private $discount;

    public function __construct($price)
    {
        $this->price = $price;
        $this->discount = 0;
    }

    public function getPrice()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDiscountInPercentage($discount)
    {
        $this->discount = $discount;
    }
}
