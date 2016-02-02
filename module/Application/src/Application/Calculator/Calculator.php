<?php


namespace Application\Calculator;


class Calculator
{
    public function calculate(array $operazione, array $num)
    {

        $priority = $operazione[0];
        unset($operazione[0]);
        foreach ($operazione as $number) {

        }

        foreach ($operazione as $number) {

            if ($priority->getPriority() < $number->getPriority()) {
                $priority = $number;

            } else {

                foreach ($priority as $number) {

                }
            }

        }


    }
}