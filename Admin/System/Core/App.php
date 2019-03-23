<?php 
    namespace System\Core;

    use System\Core\Router;
    use System\Core\Helper;

    class App{

        public static function router($url){
            try{
                
                $action=Router::getAction($url);
                $controller=str_replace('Controller','',$action["controller"]);
                $method=$action["method"];
                if(!Helper::ValidateController($controller)){
                    $controller = 'ErrorPage';
                    $path_controller="App/Controller/"."{$controller}/";
                    $controller.='Controller';
                }else{
                    $path_controller="App/Controller/"."{$controller}/";
                    $controller.='Controller';
                }
                
                $path=str_replace('/',"\\",$path_controller."{$controller}");
                
                $controller=new $path();

                if(!Helper::ValidateMethod($controller,$action["method"])){
                    $method = 'index';
                }
                if(!empty($_POST)){
                    $response=$controller->$method($_POST);
                    echo $response;
                }else{
                    $response=$controller->$method();
                    echo $response;
                }
            }catch(\Exception $e){
                echo $e->getMessage();
            }
        }
        /*public function __construct(){
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
            
        }*/
    }




?>