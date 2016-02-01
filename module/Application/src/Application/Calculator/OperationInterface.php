<?php


namespace Application\Calculator;


interface OperationInterface
{
    public function apply($a,$b);
}