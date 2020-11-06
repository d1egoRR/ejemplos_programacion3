<?php


class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }

    public function testFailure()
    {
        $this->assertContains(4, [1, 2, 3, 4]);
    }

    public function testFailureBoolean()
    {
        $this->assertTrue(true);
    }
}


?>