<?php
    namespace App\Controller\User;

    use System\Core\Controller;
    use App\Model\User\User;

    class UserController extends Controller{
        
        public function __construct($controller_name){
            
           // $this->class=$controller_name;

            
        }
        public function index(){
            /*$data=User::data();
            $this->render(__CLASS__,["name"=>"juan","apellido"=>"roda"]);
            echo "<br>";
            echo __CLASS__;*/
            
        }
        public function UserValidate($request=[]){
            echo "hola";
            /*echo "estoy en userValidate";
            echo "<br>";
            var_dump($request);*/
        }
    }


?>