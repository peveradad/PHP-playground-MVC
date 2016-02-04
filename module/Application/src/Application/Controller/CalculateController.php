<?php

namespace Application\Controller;


use Application\Calculator\CalculateMap;
use Application\Calculator\Calculator;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class CalculateController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }

    public function calculateAction()
    {
        $num1 = (double)$this->params()->fromPost('num1');
        $num2 = (double)$this->params()->fromPost('num2');
        $simbolo = $this->params()->fromPost('operazione');

        if (!$num1 || !$num2 || !$simbolo) {
            return new JsonModel(['result' => 0]);
        }

        $calcolo = new Calculator();
        $result = $calcolo->calculate(CalculateMap::map($simbolo), $num1, $num2);

        return new JsonModel(['result' => $result]);
    }
}
