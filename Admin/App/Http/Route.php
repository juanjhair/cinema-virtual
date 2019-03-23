<?php 
    Namespace App\Http;
    
    use System\Core\Router;
    
    Router::add("Home","HomeController@");
    Router::add("User/login","UserController@login");



?>