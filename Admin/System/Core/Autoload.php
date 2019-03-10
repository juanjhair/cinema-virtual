<?php

    namespace System\Core;

    class Autoload{
        public static function run(){
            spl_autoload_register(function($class){
                $route=str_replace("\\","/","$class.php");
                /*echo "<br>";
                echo "class: "; echo $class;
                echo "<br>";
                echo "route: "; echo $route;*/
                if(is_file($route)){
                    require $route;
                }
            });
        }
    }


?>