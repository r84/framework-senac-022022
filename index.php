<?php

$mainPosition = __DIR__;


require_once("{$mainPosition}\helper\helper.php"); 
require_once("{$mainPosition}\\vendor\autoload.php");         

use Bootstrap\Env;
use App\frameworkTools\ProcessServerElements;

Env::execute();

$processServerElements = ProcessServerElements::start();
dd($processServerElements);
