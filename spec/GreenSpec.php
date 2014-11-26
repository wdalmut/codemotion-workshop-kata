<?php
namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreenSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Green');
    }
}
