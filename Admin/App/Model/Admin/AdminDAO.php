<?php 
    namespace App\Model\Admin;

    use App\Model\Interfaces\UserInterface;
    use App\Model\Admin\Admin;
    use System\Core\Model;

    class AdminDAO extends Model{
        private $table="admin";
        private $parameters=['admin_id','admin_code','admin_email','admin_user_id'];
        private $admin;

        public function __contruct(){
            $this->admin=new Admin();
        }
        public function isAdmin($email,$user_id){
            
            
            $dataquery=$this->datasource->executeQuery("SELECT * FROM admin WHERE admin_email=? ",array($email));
            
            if(count($dataquery)!=0){
                if($dataquery['admin_user_id']==null){
                    $dataquery['admin_code']="ADM-".$this->countAdmin();
                    $dataquery['admin_user_id']=$user_id;
                    if($this->updateAdmin("ADM-".$this->countAdmin(),$user_id)){
                        $this->admin=$this->setAdmin($admin,$dataquery);
                        //$dataquery=null;
                        return $this->admin;
                    }
                }else{
                    $this->admin=$this->setAdmin($dataquery);
                    $dataquery=null;
                    return $this->admin;
                }
            }else{
                $dataquery=null;
                return null;   
            }
        }
        public function countAdmin(){
            $dataquery=$this->datasource->executeQuery_count("SELECT * FROM admin");
            
            return $dataquery;
            
        }
        public function setAdmin($dataquery){
            $admin=new Admin(); 
            $admin->setAdminId($dataquery['admin_id']);
            $admin->setAdminCode($dataquery['admin_code']);
            $admin->setAdminEmail($dataquery['admin_email']);
            $admin->setAdminUserId($dataquery['admin_user_id']);

            return $admin;
        }
        public function updateAdmin($admin_code,$user_id){
            if($user_id==""){
                $this->datasource->closeConnection();
                return false;
            }
            else{
                $dataquery=$this->datasource->executeQuery_update("UPDATE admin SET admin_code=? , admin_user_id=?",array($admin_code,$user_id));
                if($dataquery){
                    $dataquery=null;
                    $this->datasource->closeConnection();
                    return true;
                }else{
                    $dataquery=null;
                    $this->datasource->closeConnection();
                    return false;
                }
            }
            
        }
    }    





?>