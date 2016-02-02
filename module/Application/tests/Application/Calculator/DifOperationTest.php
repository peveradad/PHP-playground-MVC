<?php


namespace Application\Test\Calculator;

use Application\Calculator\DifOperation;
use PHPUnit_Framework_TestCase;

class DifOperationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider differenceDataProvider
     */
    public function testThatCanCalculateDifference($a, $b, $c)
    {
        $operation = new DifOperation;
        $result = $operation->apply($a, $b);
        $this->assertEquals($c, $result);
    }

    public function differenceDataProvider()
    {
        return array(
            array(4, 2, 2),
            array(6, 3, 3),
            array(8, 9, -1),
            array(8, 4, 4),
            array(10, 3.5, 6.5),
            array(3, 2, 1),
            array(5, 2, 3),
            array(12, 6, 6),

        );
    }
    public function testDifPriority(){
        $operation = new DifOperation;
        $result = $operation->getPriority();
        $this->assertEquals(2, $result);
    }

}