<?php 
    Namespace App\Http;
    
    use System\Core\Router;
    
    Router::add("Home","HomeController@index");
    Router::add("User/login","UserController@login");



?>