<?php


namespace Application\Calculator;


class Calculator
{
    public function calculate(OperationInterface $operation,array $num){
        $result= $num[0];
        unset($num[0]);

        foreach($num as $number) {
            $result = $operation->apply($result,$number);
        }

        return $result;
    }
}