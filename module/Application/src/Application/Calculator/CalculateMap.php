<?php


namespace Application\Calculator;


class CalculateMap
{
    public static function map($simbolo)
    {

        if ($simbolo == "sum") {
            $operazione = new SumOperation();

        }
        if ($simbolo == "dif") {
            $operazione = new DifOperation();

        }
        if ($simbolo == "mul") {
            $operazione = new MultOperation();

        }
        if ($simbolo == "div") {
            $operazione = new DivOperation();

        }
        return $operazione;
    }
}