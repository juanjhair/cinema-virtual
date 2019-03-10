<?php 
    namespace Model\User;

    use Model\Interfaces\UserInterface;
    use Model\User\User;
    use Model\Datasource\Datasource;

    class UserDAO implements UserInterface{

        /*public static function usedao(){
            echo "estoy en userDAO";
            $user=new User();
            $user::use();
        }*/
        public function __contruct(){
            $user=new User();
            $datasource=new DataSource();
        }
        public function isAdmin($email){
            $user=new User();
            $datasource=new DataSource();
            $dataquery=$datasource->executeQuery("SELECT * FROM users WHERE users_email=? ",array($email));
            if(count($dataquery)!=0){
                foreach($dataquery as $key=>$value){
                    $user->setUserId($dataquery[$key]['users_id']);
                    $user->setUserName($dataquery[$key]['users_name']);
                    $user->setUserSurname($dataquery[$key]['users_surname']);
                    $user->setUserEmail($dataquery[$key]['users_email']);
                    $user->setUserPass($dataquery[$key]['users_pass']);
                    $user->setUserPhone($dataquery[$key]['users_phone']);
                    $user->setUserPhoto($dataquery[$key]['users_photo']);
                    $user->setUserCreatedDate($dataquery[$key]['users_created_date']);
                }
                $dataquery=null;
                return $user;
            }else{
                $dataquery=null;
                return false;   
            }
        }
        public function registerAdmin($admin_code,$user_id){

        }
    }

?>