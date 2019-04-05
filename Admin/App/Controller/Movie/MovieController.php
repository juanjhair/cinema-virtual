<?php
    namespace App\Controller\Movie;

    use System\Core\Controller;

    class MovieController extends Controller{

        public function __construct(){

        }
        public function index(){
            return $this->render(__CLASS__);
        }
    }



?>