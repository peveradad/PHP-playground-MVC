<?php


namespace Application\Test\Calculator;
use Application\Calculator\SumOperation;
use PHPUnit_Framework_TestCase;

class SumOperationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider sumDataProvider
     */
    public function testThatCanSumTwoNaturalNumbers($a,$b,$c)
    {
        $operation = new SumOperation;
        $result = $operation->apply($a,$b);
        $this->assertEquals($c,$result);
    }
    public function sumDataProvider()
    {
        return array(
            array(4, 2,6),
            array(6, 0, 6),
            array(0, 9, 9),
            array(8, -4, 4),
            array(1, -3, -2),
            array(3, 2, 5),
            array(5, 2, 7),
            array(10, 6, 16),

        );
    }
}
