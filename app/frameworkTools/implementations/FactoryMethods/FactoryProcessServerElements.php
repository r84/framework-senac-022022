<?php

namespace App\frameworkTools\Implementations\FactoryMethods;

use App\frameworkTools\Abstracts\FactoryMethods\AbstractFactoryMethods;
use App\frameworkTools\ProcessServerElements;

class FactoryProcessServerElements extends AbstractFactoryMethods{

    private $processServerElements;

    public function __construct(){
        $this->processServerElements = ProcessServerElements::start();
    }

    public function operation(){
        $this->processServerElements = ProcessServerElements::start();

        dd($this->processServerElements);
    }
}
