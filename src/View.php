<?php

class View
{
    public function format($price)
    {
        return number_format($price, 2);
    }
}
