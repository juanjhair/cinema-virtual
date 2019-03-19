<?php 
    namespace App\Model\User;

    use App\Model\User\User;
    use App\Model\Datasource\Datasource;
    use App\Model\Time\Time;

    class UserDAO{

        private $table="user";
        private $user_array=[];
        private $parameters=['user_id','user_code','user_dni','user_name','user_surname','user_email','user_birthday','user_phone','user_photo','user_created_date'];
        
        public function __contruct(){
            
        }
        public function isUser($email){
            $user=new User();
            $datasource=new Datasource();
            $dataquery=$datasource->executeQuery("SELECT * FROM user WHERE user_email=? ",array($email));
            
            if(count($dataquery)!=0){
                $user=$this->setUser($user,$dataquery);
                return $user;
            }else{
                $dataquery=null;
                return null;   
            }
        }
        public function countUser(){
            $datasource=new Datasource();
            $dataquery=$datasource->executeQuery_count("SELECT * FROM user ");
            
            return $dataquery+1;
            
        }
        public function getUser(User $user){

            array_push($this->$user_array,$user->getUserId(),$user->getUserCode(),$user->getUserDni(),
            $user->getUserName(),$user->getUserSurname(),$user->getUserEmail(),
            $user->getUserBirthday(),$user->getUserPhone(),$user->getUserPhoto(),
            $user->getUserCreatedDate());

            return $this->user_array;
        }
        
        public function setUser(User $user, $dataquery){
            
            $user->setUserId($dataquery['user_id']);
            $user->setUserCode($dataquery['user_code']);
            $user->setUserDni($dataquery['user_dni']);
            $user->setUserName($dataquery['user_name']);
            $user->setUserSurname($dataquery['user_surname']);
            $user->setUserEmail($dataquery['user_email']);
            $user->setUserBirthday($dataquery['user_birthday']);
            $user->setUserPhone($dataquery['user_phone']);
            $user->setUserPhoto($dataquery['user_photo']);
            $user->setUserCreatedDate($dataquery['user_created_date']);

            return $user;
        }
        public function registerUser($request){
            $datasource=new DataSource();
            $time=new Time();
            $user=new User();

            $user_code="US-".$this->countUser();
            $user_created_date=$time->getTime();

            $request["code"]=$user_code;
            $request["created_date"]=$user_created_date;

            $sql="INSERT INTO user (user_id,user_code,user_name,user_surname, 
            user_email,user_photo,user_created_date) VALUES 
            (DEFAULT, :user_code, :user_name, :user_surname, 
            :user_email, :user_photo, :user_created_date)";

            if($datasource->executeQuery_insert($sql,$request,$this->table,$this->parameters)){
                $user=$this->isUser($request["email"]);
                return $user;
            }else{
                return false;
            }
              
        }
    }

?>