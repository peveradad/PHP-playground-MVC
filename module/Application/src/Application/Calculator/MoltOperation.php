<?php


namespace Application\Calculator;


class MoltOperation implements OperationInterface
{
    public function apply($a, $b)
    {
        $c = $a * $b;
        return $c;
    }
}