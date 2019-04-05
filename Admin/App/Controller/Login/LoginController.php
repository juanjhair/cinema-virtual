<?php
    namespace App\Controller\Login;
    
    use System\Core\Controller;
    use App\Model\Session\Session;
    use App\Model\Admin\AdminDAO;
    use App\Model\User\UserDAO;

    class LoginController extends Controller{
        
        protected $session;

        public function __construct(){
            $this->session=new Session();
            $this->session->init();
        }
        public function index(){
            //$this->render(__CLASS__);
        }
       
        public function login($request){
            
            $userDAO=new UserDAO();
            $adminDAO=new AdminDAO();
            
            $name=$request['name'];
            $surname=$request['surname'];
            $email=$request['email'];
            $photo=$request['photo'];
            $red=$request['red'];
            
            
            if(($user=$userDAO->isUser($email)) == null){
                /*--------------REGISTER------------------*/
                /*$user=$userDAO->registerUser($request);
                if(($user=$userDAO->registerUser($request))==false){
                    return json_encode(array("message"=>"An error occurred, try again please... ","data"=>null)); 
                
                }else{
                    return json_encode(array("message"=>"Successful registration ","data"=>array("user"=>$user->getUserSurname()))); 
                
                }*/

                return json_encode(array("message"=>"You aren't admin, try again...","data"=>null)); 
                
            }
            else{
                if(($admin=$adminDAO->isAdmin($email,$user->getUserId()))==null){
                    return json_encode(array("message"=>"You aren't admin, try again... ","data"=>null)); 
                }else{
                    $arr=$this->session(array('name'=>$name,'surname'=>$surname,'photo'=>$photo,'code'=>$admin->getAdminCode()));
                  
                    return json_encode(array("message"=>"Welcome ","data"=>array("name"=>$user->getUserName()))); 
                   
                }
            }
        }
        public function session($data_session){
            foreach($data_session as $key=>$value){
                $this->session->add($key,$value);
               
            }
            return $this->session->getAll();
        }
        public function logout(){
            $_SESSION = array();
            session_destroy();
            header("location: http://localhost/cinema_virtual/Admin/Home");
        }

    }
?>