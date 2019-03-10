<?php 
    namespace Model\Admin;

    use Model\Interfaces\UserInterface;
    use Model\Admin\Admin;
    use Model\Datasource\Datasource;

    class AdminDAO implements UserInterface{
        public function __contruct(){
            $admin=new Admin();
            $datasource=new Datasource();
        }
        /*public static function admdao(){
            Admin::adm();//"estoy en adm"
            Datasource::dataso(); //"estoy en datasource"

        }*/
        public function isAdmin($email){
            $admin=new Admin();
            $datasource=new Datasource();
            $dataquery=$datasource->executeQuery("SELECT * FROM admins WHERE admin_email=? ",array($email));
            if(count($dataquery)!=0){
                foreach($dataquery as $key=>$value){
                    $admin->setAdminId($dataquery[$key]['admin_id']);
                    $admin->setAdminEmail($dataquery[$key]['admin_email']);
                    $admin->setAdminCode($dataquery[$key]['admin_code']);
                    $admin->setAdminUserId($dataquery[$key]['admin_user_id']);
                }
                $dataquery=null;
                $datasource->closeConnection();
                return $admin;
            }else{
                $dataquery=null;
                $datasource->closeConnection();
                return false;   
            }
        }
        public function registerAdmin($admin_code,$user_id){
            $datasource=new DATASOURCE();
            if($user_id==""){
                $datasource->closeConnection();
                return false;
            }
            else{
                $dataquery=$datasource->executeQuery_update("UPDATE admins SET admin_code=? , admin_user_id=?",array($admin_code,$user_id));
                if($dataquery){
                    $dataquery=null;
                    $datasource->closeConnection();
                    return true;
                }else{
                    $dataquery=null;
                    $datasource->closeConnection();
                    return false;
                }
            }
            
        }
    }    





?>