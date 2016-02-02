<?php


namespace Application\Test\Calculator;

use Application\Calculator\MultOperation;
use PHPUnit_Framework_TestCase;

class MoltOperationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider multiplicateDataProvider
     */
    public function testThatCanCalculateMultiplicate($a, $b, $c)
    {
        $operation = new MultOperation;
        $result = $operation->apply($a, $b);
        $this->assertEquals($c, $result);
    }

    public function multiplicateDataProvider()
    {
        return array(
            array(4, 2, 8),
            array(6, 0, 0),
            array(0, 9, 0),
            array(8, 4, 32),
            array(1, 3, 3),
            array(3, 2, 6),
            array(5, 2, 10),
            array(10, 6, 60),

        );
    }
}