<?php
namespace System\Core;

class Router{

  private static $route=[];

  public function __construct(){

  }
  public static function add($route,$controller_method){
    
    $array_route=explode("@",$controller_method);
    if(empty($array_route[1])){
      $array_route[1]='index';
    }
    self::$route[$route]=["controller"=>$array_route[0],"method"=>$array_route[1]];
  }
  public static function getAction($route){
    if(array_key_exists($route,static::$route)){
      return self::$route[$route];
    }
    else{
      throw new \Exception("The route $route was not found");
    }
  }

}