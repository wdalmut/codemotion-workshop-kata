<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Calc;

class TaxSpec extends ObjectBehavior
{
    function let(Calc $calc)
    {
        $this->beConstructedWith($calc);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Tax');
    }

    function it_should_apply_taxes(Calc $calc)
    {
        $calc->getPrice()->willReturn(100);

        $this->getTotalPrice()->shouldBe(100*1.22);
    }
}
