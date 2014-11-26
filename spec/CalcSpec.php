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

        $this->getPrice(5)->shouldReturn(500);
    }
}
