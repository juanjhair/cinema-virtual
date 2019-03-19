<?php 
    namespace App\Model\Admin;
    
    class Admin{

        private $admin_id;
        private $admin_user_id;
        private $admin_email;
        private $admin_code;
       
        public function __contruct(){
            
        }
        public function setAdminId($admin_id){
            $this->admin_id=$admin_id;
        }
        public function getAdminId(){
            return $this->admin_id;
        }
        public function setAdminUserId($admin_user_id){
            $this->admin_user_id=$admin_user_id;
        }
        public function getAdminUserId(){
            return $this->admin_user_id;
        }
        public function setAdminEmail($admin_email){
            $this->admin_email=$admin_email;
        }
        public function getAdminEmail(){
            return $this->admin_email;
        }
        public function setAdminCode($admin_code){
            $this->admin_code=$admin_code;
        }
        public function getAdminCode(){
            return $this->admin_code;
        }
       

    }

?>