<?php
namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Product;

class CalcSpec extends ObjectBehavior
{
    function let(Product $product)
    {
        $this->beConstructedWith($product);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Calc');
    }

    function it_should_expose_a_global_price(Product $product)
    {
        $product->getPrice()->willReturn(100);

        $this->setQuantity(5);
        $this->getPrice()->shouldReturn(500);
    }

    function it_should_allow_a_value_discount()
    {
        $this->setDiscountInPercentage(20);
    }

    function it_should_expose_a_discounted_price(Product $product)
    {
        $this->setDiscountInPercentage(20);
        $this->setQuantity(20);
        $product->getPrice()->willReturn(100);

        $this->getPrice()->shouldReturn(1600);
    }
}
