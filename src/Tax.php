<?php

class Tax
{
    private $country;

    private $taxes = [
        "it" => 1.22,
        "fr" => 1.20,
    ];

    public function __construct($calc, $country = "it")
    {
        $this->calc = $calc;

        $this->setCountry($country);
    }

    public function getTotalPrice()
    {
        return $this->calc->getPrice() * $this->getTax();
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    private function getTax()
    {
        return $this->taxes[$this->country];
    }
}
