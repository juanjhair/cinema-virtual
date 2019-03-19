<?php 
    namespace App\Model\Admin;

    use App\Model\Interfaces\UserInterface;
    use App\Model\Admin\Admin;
    use App\Model\Datasource\Datasource;

    class AdminDAO implements UserInterface{
        private $table="user";
        private $user_array=[];
        private $parameters=['admin_id','admin_code','admin_email','admin_user_id'];
        
        public function __contruct(){
            
        }
        /*public function issAdmin($email){
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
        }*/
        public function isAdmin($email,$user_id){
            $admin=new Admin();
            $datasource=new Datasource();
            $dataquery=$datasource->executeQuery("SELECT * FROM admin WHERE admin_email=? ",array($email));
            
            if(count($dataquery)!=0){
                if($dataquery['admin_user_id']==null){
                    $dataquery['admin_code']="ADM-".$this->countAdmin();
                    $dataquery['admin_user_id']=$user_id;
                    if($this->updateAdmin("ADM-".$this->countAdmin(),$user_id)){
                        $admin=$this->setAdmin($admin,$dataquery);
                        //$dataquery=null;
                        return $admin;
                    }
                }else{
                    $admin=$this->setAdmin($admin,$dataquery);
                    $dataquery=null;
                    return $admin;
                }
            }else{
                $dataquery=null;
                return null;   
            }
        }
        public function countAdmin(){
            $datasource=new Datasource();
            $dataquery=$datasource->executeQuery_count("SELECT * FROM admin");
            
            return $dataquery;
            
        }
        public function setAdmin(Admin $admin, $dataquery){
            
            $admin->setAdminId($dataquery['admin_id']);
            $admin->setAdminCode($dataquery['admin_code']);
            $admin->setAdminEmail($dataquery['admin_email']);
            $admin->setAdminUserId($dataquery['admin_user_id']);

            return $admin;
        }
        public function updateAdmin($admin_code,$user_id){
            $datasource=new Datasource();
            if($user_id==""){
                $datasource->closeConnection();
                return false;
            }
            else{
                $dataquery=$datasource->executeQuery_update("UPDATE admin SET admin_code=? , admin_user_id=?",array($admin_code,$user_id));
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