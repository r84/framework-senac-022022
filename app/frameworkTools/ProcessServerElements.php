<?php

namespace App\frameworkTools;

class ProcessServerElements{
    private static $instance;

    private function __construct(){
        //singleton
    }

    public static function start(){
        if(!ProcessServerElements::$instance){
            ProcessServerElements::$instance = new ProcessServerElements();
        }

        return ProcessServerElements::$instance;

    }

}