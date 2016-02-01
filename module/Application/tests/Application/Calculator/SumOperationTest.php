<?php


namespace Application\Test\Calculator;
use Application\Calculator\SumOperation;
use PHPUnit_Framework_TestCase;

class SumOperationTest extends PHPUnit_Framework_TestCase
{
    public function testThatCanSumTwoNaturalNumbers()
    {
        $operation = new SumOperation;
        $result = $operation->apply(1, 2);
        $this->assertEquals(3,$result);
    }
}
