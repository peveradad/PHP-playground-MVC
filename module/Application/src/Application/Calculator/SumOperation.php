<?php

namespace Application\Calculator;

class SumOperation implements OperationInterface
{
    public function apply($a, $b)
    {
        $c = $a + $b;
        return $c;
    }

}