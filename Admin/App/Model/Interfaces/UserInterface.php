<?php 
    namespace Model\Interfaces;
    
    interface UserInterface{
        public function isAdmin($email);
        public function registerAdmin($admin_code,$user_id);

    }    

?>