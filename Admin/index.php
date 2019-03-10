<?php

require 'System/Config.php';

require CORE."Autoload.php";

use System\Core\Autoload;
use System\Core\Router;
use System\Core\Helper;
Autoload::run();



require 'App/Http/Route.php';
$url=$_GET["url"];

try{
    $action=Router::getAction($url);
    $controller=str_replace('Controller','',$action["controller"]);
    $method=$action["method"];
    if(!Helper::ValidateController($controller)){
        $controller = 'ErrorPage';
    }else{
        $path_controller="App/Controller/"."{$controller}/";
        $controller.='Controller';
    }
    $path=str_replace('/',"\\",$path_controller."{$controller}");
    /*echo "<br>";
    echo  $path;
    echo "<br>";
    echo $controller;*/
    $controller=new $path($controller);
    
    if(!Helper::ValidateMethod($controller,$action["method"])){
        $method = 'exec';
    }
   /* echo "<br>";
    print_r($controller);*/
    $controller->$method();

}catch(\Exception $e){
    echo $e->getMessage();
}

?>