<?php 

namespace System\Core;

class Helper{

    public static function ValidateController($controller){
        //echo PATH_CONTROLLERS."{$controller}/{$controller}Controller.php";
       return is_file(PATH_CONTROLLERS."{$controller}/{$controller}Controller.php") ? true : false ;
        
        
    }
    public static function ValidateMethod($controller,$method)
    {   
        return method_exists($controller,$method) ? true : false;
    }
    

}