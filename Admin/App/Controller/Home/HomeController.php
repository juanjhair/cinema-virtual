<?php
    namespace App\Controller\Home;

    use System\Core\Controller;
    use App\Model\User\User;

    class HomeController extends Controller{
        
        public function __construct(){
            
        }
        public function index(){
            
            $this->render(__CLASS__,'Home');
            
        }
    }


?>