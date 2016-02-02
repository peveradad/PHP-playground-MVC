<?php


namespace Application\Calculator;


class MultOperation implements OperationInterface
{
    public function apply($a, $b)
    {
        $c = $a * $b;
        return $c;
    }
    public function getPriority(){
        return 3;
    }
}