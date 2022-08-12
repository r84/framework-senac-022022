<?php

namespace App\frameworkTools;

class ProcessServerElements{
    private static $instance;

    private function __construct(){
        //throw new Exception("This class can not be started by new Process,only by start function");
    }

    public static function start(){
        if(!ProcessServerElements::$instance){
            ProcessServerElements::$instance = new ProcessServerElements();
        }

        return ProcessServerElements::$instance;

    }

}