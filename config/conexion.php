<?php

class BD{

    private static $conect = NULL;

    public static function conection(){

        if(!isset( self::$conect )){

            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$conect = new PDO('mysql:host=localhost;dbname=prueba_tecnica_dev','root','', $optionsPDO);
            
        }

        return self::$conect;
    }


}



?>

