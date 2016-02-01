<?php


namespace Application\Test\Calculator;
use Application\Calculator\DifOperation;
use PHPUnit_Framework_TestCase;

class DifOperationTest extends PHPUnit_Framework_TestCase
{
        public function testThatCanCalculateDifference(){
            $operation = new DifOperation;
            $result = $operation->apply(1,2);
            $this->assertEquals(-1,$result);
        }

}