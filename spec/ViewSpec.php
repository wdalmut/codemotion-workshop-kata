<?php
namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Product;

class ViewSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('View');
    }

    function it_should_format_the_price()
    {
        $this->format(100)->shouldReturn("100.00");
    }
}
