<?php

namespace Application\Service;

class RandomNameChooserService
{
    protected $nomi;

    public function __construct(array $nomi)
    {
        $this->nomi = $nomi;
    }

    public function choose()
    {
        $randomNomi= $this->nomi[rand(0,count($this->nomi)-1)];
        return $randomNomi;
    }
}