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

    public function setDocumentRoot($documentRoot){
        $this->documentRoot = $documentRoot;
    }

    public function getDocumentRoot(){
        return $this->getDocumentRoot;
    }

    public function setServerName($serverName){
        $this->serverName = $serverName;
    }

    public function getServerName(){
        return $this->serverName;
    }

}