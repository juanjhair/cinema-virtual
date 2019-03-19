<?php 
    namespace App\Model\Interfaces;
    
    interface UserInterface{
        public function isAdmin($email,$user_id);
        public function updateAdmin($admin_code,$user_id);

    }    

?>