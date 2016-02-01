<?php


namespace Application\Calculator;


class DivOperation implements OperationInterface
{
    public function apply($a, $b)
    {
        $c = $a / $b;
        return $c;
    }
}