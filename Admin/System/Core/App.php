<?php 
    namespace System\Core;

    class App{
        protected $controller="HomeController";
        protected $method="actionIndex";
        protected $params=[];

        public function __construct(){
            $url=$this->parseUrl();
            $controller=$url[0];
            $controllerName=ucfirst(strtolower($url[0]))."Controller";
            
            if(file_exists(PATH_CONTROLLERS."{$controller}/{$controller}Controller.php")){
                echo "existe";
                $this->controller=$controllerName;
                unset($url[0]);
            }
            require PATH_CONTROLLERS."{$controller}/{$controller}Controller.php";
            
            $this->controller=new $this->controller;

            if(isset($url[1])){
                $methodName="action".ucfirst(strlower($url[1]));

                if(method_exists($this->controller,$methodName)){
                    $this->method=$methodName;
                    unset($url[1]);
                }
            }
            $this->params=$url? array_values($url) : $this->params;
        
            call_user_func_array([$this->controller,$this->method],$this->params);
        
        }
        public function parseUrl(){
            if(isset($_GET["url"])){
                return explode("/",filter_var(rtrim($_GET["url"],"/"), FILTER_SANITIZE_URL));
            }
            
        }
    }




?>