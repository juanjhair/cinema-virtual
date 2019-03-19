<?php
    namespace App\Controller\Home;

    use System\Core\Controller;
    use App\Model\User\User;

    class HomeController extends Controller{
        
        public function __construct($controller_name){
            
            $this->class=$controller_name;
            
        }
        public function index(){
            
            $this->render(__CLASS__);
            /*echo "<br>";
            echo __CLASS__;*/
            
        }
        public function actionIndex(){
            echo "hola";
        }
    }


?>