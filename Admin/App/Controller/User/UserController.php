<?php
    namespace App\Controller\User;

    use System\Core\Controller;
    use App\Model\Session\Session;
    use App\Model\Admin\AdminDAO;
    use App\Model\User\UserDAO;

    class UserController extends Controller{
        
        public function __construct($controller_name){
            
           // $this->class=$controller_name;

            
        }
        public function index(){
            /*$data=User::data();
            $this->render(__CLASS__,["name"=>"juan","apellido"=>"roda"]);
            echo "<br>";
            echo __CLASS__;*/
            
        }
        public function login($request){
            $session=new Session();
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
                    /*--------------------ADD $_SESSION--------------------*/ 
                    $session->add('name',$name);
                    $session->add('surname',$surname);
                    $session->add('email',$email);
                    $session->add('photo',$photo);
                    return json_encode(array("message"=>"You aren't admin, try again... ","data"=>null)); 
                }else{
                    return json_encode(array("message"=>"Welcome ","data"=>array("name"=>$user->getUserName()))); 
                
                }
            }
        }
    }


?>