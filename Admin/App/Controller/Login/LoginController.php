<?php
   // namespace App\Controller\Login;

    use System\Core\Controller;

    class LoginController extends Controller{
        
        public function __construct(){

        }
        public function exec(){
            $this->render(__CLASS__);
        }
        public function metodo(){
            echo "hola";
        }
    }


?>