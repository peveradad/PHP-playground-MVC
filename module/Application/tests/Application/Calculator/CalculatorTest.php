<?php


namespace Application\Test\Calculator;

use Application\Calculator\Calculator;
use Application\Calculator\DivOperation;
use Application\Calculator\SumOperation;
use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testCanDoSumOperation()
    {
        $sumOperation = new SumOperation;
        $calculator= new Calculator;
        $num=[1,2,3];
        $result = $calculator->calculate($sumOperation,$num);
        $this->assertEquals(6,$result);
    }
    public function testCanDoDivision(){

        $divOperation = new DivOperation;
        $calculator = new Calculator;
        $num=[6,3,2];
        $result = $calculator->calculate($divOperation,$num);
        $this->assertEquals(1,$result);
    }
}