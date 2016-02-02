<?php

namespace Application\Calculator;

class DifOperation implements OperationInterface
{
    public function apply($a, $b)
    {
        $c = $a - $b;
        return $c;
    }
    public function getPriority()
    {
        return 2;
    }
}