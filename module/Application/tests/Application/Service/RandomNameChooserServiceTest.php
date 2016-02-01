<?php

namespace Application\Test\Service;

use Application\Service\RandomNameChooserService;
use PHPUnit_Framework_TestCase;

class RandomNameChooserServiceTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        $nomi = ['Lorenzo', 'Davide', 'Thomas', 'Daniele', 'Simone'];
        $service = new RandomNameChooserService($nomi);
        $foundName = $service->choose();

        $this->assertContains($foundName, $nomi);
    }

}