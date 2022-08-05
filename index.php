<?php

function dd($input){                                        // função que faz o dump do código
    var_dump($input);
    die();
}

$mainPosition = __DIR__;
require_once("{$mainPosition}\bootstrap\Env.php");          

$env = new Env();
dd($env);
