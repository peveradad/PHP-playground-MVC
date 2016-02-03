<?php


namespace Application\Calculator;


class Calculator
{
    public function calculate(OperationInterface $operazione, $num1, $num2)
    {
        $result  = $operazione->apply($num1,$num2);
        return $result;
    }
}