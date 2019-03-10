<?php

    class UserSession {

        public function __construct(){
            session_start();
        }
        public function setSessionName($name){
            $_SESSION['name']=$name;
        }
        public function setSessionSurname($surname){
            $_SESSION['surname']=$surname;
        } 
        public function setSessionEmail($email){
            $_SESSION['email']=$email;
        } 
        public function setSessionPhoto($photo){
            $_SESSION['photo']=$photo;
        }
        public function setSessionPass($pass){
            $_SESSION['pass']=$pass;
        }
        public function getSessionName(){
            return $_SESSION['name'];
        }
        public function getSessionSurname(){
            return $_SESSION['surname'];
        } 
        public function getSessionEmail(){
           return  $_SESSION['email'];
        } 
        public function getSessionPhoto(){
           return  $_SESSION['photo'];
        }
        public function getSessionPass(){
            return  $_SESSION['pass'];
        }  
        public function closeSession(){
            session_unset();
            session_destroy();
        }         
    }

?>