<?php
    namespace App\Model\User;
    
    class User{

        private $user_id;
        private $user_code;
        private $user_dni;
        private $user_name;
        private $user_surname;
        private $user_birthday;
        private $user_email;
        private $user_phone;
        private $user_photo;
        private $user_created_date;

        
        public function __contruct(){

        }
        public function setUserId($user_id){
            $this->user_id=$user_id;
        }
        public function getUserId(){
            return $this->user_id;  
        }
        public function setUserCode($user_code){
            $this->user_code=$user_code;
        }
        public function getUserCode(){
            return $this->user_code;  
        }
        public function setUserDni($user_dni){
            $this->user_dni=$user_dni;
        }
        public function getUserDni(){
            return $this->user_dni;  
        }
        public function setUserName($user_name){
            $this->user_name=$user_name;
        }
        public function getUserName(){
            return $this->user_name; 
        }
        public function setUserSurname($user_surname){
            $this->user_surname=$user_surname;
        }
        public function getUserSurname(){
            return $this->user_surname; 
        }
        public function setUserBirthday($user_birthday){
            $this->user_birthday=$user_birthday;
        }
        public function getUserBirthday(){
            return $this->user_birthday; 
        }
        public function setUserEmail($user_email){
            $this->user_email=$user_email;
        }
        public function getUserEmail(){
            return $this->user_email; 
        }
        
        public function setUserPhone($user_phone){
            $this->user_phone=$user_phone;
        }
        public function getUserPhone(){
            return $this->user_phone;
        }
        public function setUserPhoto($user_photo){
            $this->user_photo=$user_photo;
        }
        public function getUserPhoto(){
            return $this->user_photo;
        }
        public function setUserCreatedDate($user_created_date){
            $this->user_created_date=$user_created_date;
        }
        public function getUserCreatedDate(){
            return $this->user_created_date;
        }


    }




?>