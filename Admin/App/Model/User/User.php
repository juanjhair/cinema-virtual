<?php
    namespace App\Model\User;
    
    class User{

        private $users_id;
        private $users_name;
        private $users_surname;
        private $users_birthday;
        private $users_email;
        private $users_pass;
        private $users_phone;
        private $users_photo;
        private $users_created_date;

        public static function data(){
            return "data de use";
        }
        public function __contruct(){

        }
        public function setUserId($users_id){
            $this->users_id=$users_id;
        }
        public function getUserId(){
            return $this->users_id;  
        }
        public function setUserName($users_name){
            $this->users_name=$users_name;
        }
        public function getUserName(){
            return $this->users_name; 
        }
        public function setUserSurname($users_surname){
            $this->users_surname=$users_surname;
        }
        public function getUserSurname(){
            return $this->users_surname; 
        }
        public function setUserBirthdaye($users_birthday){
            $this->users_birthday=$users_birthday;
        }
        public function getUserBirthday(){
            return $this->users_birthday; 
        }
        public function setUserEmail($users_email){
            $this->users_email=$users_email;
        }
        public function getUserEmail(){
            return $this->users_email; 
        }
        public function setUserPass($users_pass){
            $this->users_pass=$users_pass;
        }
        public function getUserPass(){
            return  $this->users_pass;
        }
        public function setUserPhone($users_phone){
            $this->users_phone=$users_phone;
        }
        public function getUserPhone(){
            return $this->users_phone;
        }
        public function setUserPhoto($users_photo){
            $this->users_photo=$users_photo;
        }
        public function getUserPhoto(){
            return $this->users_photo;
        }
        public function setUserCreatedDate($users_created_date){
            $this->users_created_date=$users_created_date;
        }
        public function getUserCreatedDate(){
            return $this->users_created_date;
        }


    }




?>