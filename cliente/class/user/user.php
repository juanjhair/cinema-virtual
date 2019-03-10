<?php
    
    include "../class/conexion/conexion.php";
    
    class User extends Conexion_db{
        
        
        public function __construct(){
            
        }
        public function selectUser($email){
           
            $selec_user =$this->Conexion()->prepare("SELECT users_id,users_pass FROM users WHERE users_email = ?");
            $selec_user->execute(array($email));
            return $selec_user;
        }
        public function registerUser($name,$pass,$surname,$email,$photo,$created_date,$birthdate,$phone){
            $insert=$this->Conexion()->prepare("INSERT INTO users VALUES (
                DEFAULT, :users_name, :users_surname, 
                :users_birthdate, :users_email, :users_pass,
                :users_phone, :users_photo, :users_created_date)");
            $insert->bindparam(':users_name',$name);
            $insert->bindparam(':users_surname',$surname);
            $insert->bindparam(':users_birthdate',$birthdate);
            $insert->bindparam(':users_email',$email);
            $insert->bindparam(':users_pass',$pass);
            $insert->bindparam(':users_phone',$phone);
            $insert->bindparam(':users_photo',$photo);
            $insert->bindparam(':users_created_date',$created_date);
            $insert->execute();
            $insert=null;
        }
    }

?>