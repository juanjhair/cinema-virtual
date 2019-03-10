<?php
    namespace Model\Admin;
    
    class AdminSession {
        public function __construct(){
            session_start();
        }
        public function setSessionName($name){
            $_SESSION['admin_name']=$name;
        }
        public function setSessionSurname($surname){
            $_SESSION['admin_surname']=$surname;
        } 
        public function setSessionEmail($email){
            $_SESSION['admin_email']=$email;
        } 
        public function setSessionPhoto($photo){
            $_SESSION['admin_photo']=$photo;
        }
        public function setSessionCode($code){
            $_SESSION['admin_code']=$code;
        }
        public function setSessionId($id){
            $_SESSION['admin_id']=$id;
        }
        public function getSessionName(){
            return $_SESSION['admin_name'];
        }
        public function getSessionSurname(){
            return $_SESSION['admin_surname'];
        } 
        public function getSessionEmail(){
           return  $_SESSION['admin_email'];
        } 
        public function getSessionPhoto(){
           return  $_SESSION['admin_photo'];
        } 
        public function getSessionCode(){
            return $_SESSION['admin_code'];
        }
        public function getSessionId($id){
            return $_SESSION['admin_id'];
        }
        public function closeSession(){
            session_unset();
            session_destroy();
        }         
    }

?>