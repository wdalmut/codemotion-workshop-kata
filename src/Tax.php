<?php

class Tax
{
    public function __construct($calc)
    {
        $this->calc = $calc;
    }

    public function getTotalPrice()
    {
        return $this->calc->getPrice() * 1.22;
    }
}
