<?php
/**
 * Created by IntelliJ IDEA.
 * User: peve
 * Date: 03/02/2016
 * Time: 15:32
 */

namespace Application\Test\Calculator;


use Application\Calculator\CalculateMap;
use PHPUnit_Framework_TestCase;

class CalculateMapTest extends PHPUnit_Framework_TestCase
{
    public function testMap (){
        $operazione= "x";
        $riconoscimento = new CalculateMap;
        $result = $riconoscimento->map($operazione);
        $this->assertInstanceOf('\Application\Calculator\MultOperation',$result);
    }
}