<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(100);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Product');
    }

    function it_should_have_a_price()
    {
        $this->getPrice()->shouldBe(100);
    }

    function it_allow_cost_override()
    {
        $this->setPrice(300);
        $this->getPrice()->shouldBe(300);
    }

    function it_should_allow_a_discount()
    {
        $this->setDiscountInPercentage(20);
        $this->getPrice()->shouldBe(80);
    }
}

