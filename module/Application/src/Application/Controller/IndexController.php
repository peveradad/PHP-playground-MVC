<?php

namespace Application\Controller;

use Application\Service\RandomNameChooserService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $nomi = ['Lorenzo', 'Davide', 'Thomas', 'Daniele', 'Simone'];
        $service = new RandomNameChooserService($nomi);
        $foundName = $service->choose();

        $viewModel = new ViewModel();
        $viewModel->setVariable('nomeCasuale', $foundName);

        return $viewModel;
    }
}
