<?php

namespace Fidry\SfPotLille;

/**
 * @covers \Fidry\SfPotLille\Foo
 */
class FooTest extends \PHPUnit_Framework_TestCase
{
    public function test_is_callable()
    {
        $this->assertTrue(is_callable(new Foo()));
    }

    public function test_returns_a_hello_world_message()
    {
        $this->assertEquals('Hello world!', (new Foo())());
    }
}
