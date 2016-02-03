<?php


namespace Application\Test\Calculator;

use Application\Calculator\Calculator;
use Application\Calculator\DivOperation;
use Application\Calculator\SumOperation;
use Application\Calculator\MultOperation;
use Application\Calculator\DifOperation;
use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider summDataProvider
     */
    public function testCanDoSumOperation($a, $b, $c)
    {
        $sumOperation = new SumOperation;
        $calculator = new Calculator;
        $num1 = $a;
        $num2 = $b;
        $result = $calculator->calculate($sumOperation, $num1,  $num2);
        $this->assertEquals($c, $result);
    }

    /**
     * @dataProvider divDataProvider
     */
    public function testCanDoDivisionOperation($a,$b,$c)
    {

        $divOperation = new DivOperation;
        $calculator = new Calculator;
        $num1 = $a;
        $num2 = $b;
        $result = $calculator->calculate($divOperation, $num1, $num2);
        $this->assertEquals($c, $result);
    }

    /**
     * @dataProvider moltDataProvider
     */
    public function testCanDoMultiplicationOperation($a, $b, $c)
    {

        $multOperation = new MultOperation;
        $calculator = new Calculator;
        $num1 = $a;
        $num2 = $a;
        $result = $calculator->calculate($multOperation, $num1,$num2);
        $this->assertEquals($c, $result);
    }

    /**
     * @dataProvider diffDataProvider
     */
    public function testCanDoDifferenceOperation($a, $b, $c)
    {

        $difOperation = new DifOperation;
        $calculator = new Calculator;
        $num1 = $a;
        $num2 = $b;
        $result = $calculator->calculate($difOperation, $num1,$num2);
        $this->assertEquals($c, $result);
    }

    public function summDataProvider()
    {
        return array(
            array(2, 2, 4),
            array(2, 3, 5),
            array(2, 4, 6),
            array(2, 5, 7),
            array(2, 6, 8),
            array(2, 7, 9),
        );
    }

    public function divDataProvider()
    {
        return array(
            array(10, 2, 5),
            array(8, 2,4),
            array(6, 3, 2),
            array(12, 2, 6),
            array(20, 2, 10),
            array(4.4, 2, 2.2),
        );
    }

    public function moltDataProvider()
    {
        return array(
            array(2, 2, 4),
            array(2, 3, 6),
            array(2, 4, 8),
            array(2, 5, 10),
            array(2, 6, 12),
            array(2, 7, 14),
        );
    }

    public function diffDataProvider()
    {
        return array(
            array(2, 2,0),
            array(2, 3, -1),
            array(6, 4, 2),
            array(12, 5, 7),
            array(22, 6, 16),
            array(32, 7, 25),
        );
    }
}