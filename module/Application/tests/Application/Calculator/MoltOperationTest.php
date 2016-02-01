<?php


namespace Application\Test\Calculator;

use Application\Calculator\MoltOperation;
use PHPUnit_Framework_TestCase;

class MoltOperationTest extends PHPUnit_Framework_TestCase
{
    public function testThatCanCalculateMoltiplicate()
    {
        $operation = new MoltOperation;
        $result = $operation->apply(1, 2);
        $this->assertEquals(2, $result);
    }
}