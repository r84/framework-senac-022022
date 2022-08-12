<?php
namespace Bootstrap;
class Env{

    private static $mainDir;


    public static function execute(){
        $contentOfEnvFile = file_get_contents(__DIR__."\..\.env");
        $arrayEnv = explode("\n",$contentOfEnvFile);
        
        foreach($arrayEnv as $value){
            $keyAndValue = explode("=",$value);

            if(!isset($keyAndValue[1])){
                continue;                                                   // o comando continue irá encerrar o ciclo em questão, mas apenas ele.
            }

            $nameOfVariable = $keyAndValue[0];
            $valueOfVariable = $keyAndValue[1];

            $_ENV[$nameOfVariable] = $valueOfVariable;

        }

 
    }

}