<?php 
    Namespace App\Http;
    
    use System\Core\Router;
    
    Router::add("/","HomeController@");
    Router::add("Home","HomeController@");
    Router::add("Login","LoginController@login");
    Router::add("Logout","LoginController@logout");
    Router::add("Movie","MovieController@");
    Router::add("Room","RoomController@");
    Router::add("Room/insert","RoomController@insert");
    Router::add("Room/show","RoomController@show");
    Router::add("Room/edit","RoomController@edit");
?>