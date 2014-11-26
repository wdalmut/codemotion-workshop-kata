<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Product;

class TaxSpec extends ObjectBehavior
{
    function let(Product $product)
    {
        $this->beConstructedWith($product);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Tax');
    }

    function it_should_apply_taxes(Product $product)
    {
        $product->getPrice()->willReturn(100);

        $this->getTotalPrice()->shouldBe(100*1.22);
    }
}
