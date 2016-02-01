<?php


namespace Application\Test\Calculator;
use Application\Calculator\DivOperation;
use PHPUnit_Framework_TestCase;

class DivOperationTest extends PHPUnit_Framework_TestCase
{
    public function testThatCanCalculateDivision()
    {
        $operation = new DivOperation;
        $result = $operation->apply(4, 2);
        $this->assertEquals(2, $result);
    }
}