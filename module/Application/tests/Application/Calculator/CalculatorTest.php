<?php


namespace Application\Test\Calculator;

use Application\Calculator\Calculator;
use Application\Calculator\DivOperation;
use Application\Calculator\SumOperation;
use Application\Calculator\MoltOperation;
use Application\Calculator\DifOperation;
use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider summDataProvider
     */
    public function testCanDoSumOperation($a, $b, $c, $d)
    {
        $sumOperation = new SumOperation;
        $calculator = new Calculator;
        $num = [$a, $b, $c];
        $result = $calculator->calculate($sumOperation, $num);
        $this->assertEquals($d, $result);
    }

    /**
     * @dataProvider divDataProvider
     */
    public function testCanDoDivision($a,$b,$c,$d)
    {

        $divOperation = new DivOperation;
        $calculator = new Calculator;
        $num = [$a,$b,$c];
        $result = $calculator->calculate($divOperation, $num);
        $this->assertEquals($d, $result);
    }
    /**
     * @dataProvider moltDataProvider
     */
    public function testCanDoMoltiplication($a,$b,$c,$d)
    {

        $moltOperation = new MoltOperation;
        $calculator = new Calculator;
        $num = [$a,$b,$c];
        $result = $calculator->calculate($moltOperation, $num);
        $this->assertEquals($d, $result);
    }
    /**
     * @dataProvider diffDataProvider
     */
    public function testCanDoDifference($a,$b,$c,$d)
    {

        $difOperation = new DifOperation;
        $calculator = new Calculator;
        $num = [$a,$b,$c];
        $result = $calculator->calculate($difOperation, $num);
        $this->assertEquals($d, $result);
    }
    public function summDataProvider()
    {
        return array(
            array(2, 2, 2, 6),
            array(2, 3, 2, 7),
            array(2, 4, 2, 8),
            array(2, 5, 2, 9),
            array(2, 6, 2, 10),
            array(2, 7, 2, 11),
        );
    }
    public function divDataProvider()
    {
        return array(
            array(10, 2, 2, 2.5),
            array(8, 2, 2, 2),
            array(6, 3, 2, 1),
            array(12, 2, 2,3),
            array(20,2, 2, 5),
            array(4.4, 2, 2, 1.1),
        );
    }
    public function moltDataProvider()
    {
        return array(
            array(2, 2, 2, 8),
            array(2, 3, 2, 12),
            array(2, 4, 2, 16),
            array(2, 5, 2, 20),
            array(2, 6, 2, 24),
            array(2, 7, 2, 28),
        );
    }
    public function diffDataProvider()
    {
        return array(
            array(2, 2, 2, -2),
            array(2, 3, 2, -3),
            array(6, 4, 2, 0),
            array(12, 5, 2, 5),
            array(22, 6, 2, 14),
            array(32, 7, 2, 23),
        );
    }
}