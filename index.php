<?php

$mainPosition = __DIR__;


require_once("{$mainPosition}\helper\helper.php"); 
require_once("{$mainPosition}\\vendor\autoload.php");         

use Bootstrap\Env;
use App\frameworkTools\ProcessServerElements;
use App\frameworkTools\Implementations\FactoryMethods\FactoryProcessServerElements;

Env::execute();

$factoryProcessServerElements = new FactoryProcessServerElements();
$factoryProcessServerElements->operation();
