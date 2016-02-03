<?php

namespace Application\Controller;


use Application\Calculator\Calculator;
use Application\Calculator\DifOperation;
use Application\Calculator\DivOperation;
use Application\Calculator\MultOperation;
use Application\Calculator\SumOperation;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CalculateController extends AbstractActionController
{
    public function calculateAction()
    {
        $num1 = 2;
        $num2 = 3;
        $operazione =  new DivOperation();
        $calcolo = new Calculator();
        $result = $calcolo->calculate($operazione, $num1,$num2);
        $viewModel = new ViewModel();
        $viewModel->setVariable('risultato', $result);
        return $viewModel;
    }
}
