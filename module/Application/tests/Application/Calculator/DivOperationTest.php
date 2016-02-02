<?php


namespace Application\Test\Calculator;

use Application\Calculator\DivOperation;
use PHPUnit_Framework_TestCase;

class DivOperationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider divisionDataProvider
     */
    public function testThatCanCalculateDivision($a, $b, $c)
    {
        $operation = new DivOperation;
        $result = $operation->apply($a, $b);
        $this->assertEquals($c, $result);
    }

    public function divisionDataProvider()
    {
        return array(
            array(4, 2, 2),
            array(6, 3, 2),
            array(8, 2, 4),
            array(8, 4, 2),
            array(10, 5, 2),
            array(3, 2, 1.5),
            array(5, 2, 2.5),
            array(12, 6, 2),

        );
    }
}