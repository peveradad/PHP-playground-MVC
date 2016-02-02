<?php


namespace Application\Test\Calculator;

use Application\Calculator\MoltOperation;
use PHPUnit_Framework_TestCase;

class MoltOperationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider moltiplicateDataProvider
     */
    public function testThatCanCalculateMoltiplicate($a, $b, $c)
    {
        $operation = new MoltOperation;
        $result = $operation->apply($a, $b);
        $this->assertEquals($c, $result);
    }

    public function moltiplicateDataProvider()
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