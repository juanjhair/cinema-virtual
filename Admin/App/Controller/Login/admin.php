<?php 
        namespace Controller;
        require_once("../../Config/Autoload.php");
        use Config\Autoload;
        use Model\Admin\AdminSession;
        use Model\Admin\AdminDAO;
        use Model\User\UserDAO;
        Autoload::run();

        $admin_session=new AdminSession();
        $adminDAO=new adminDAO();
        $userDAO=new UserDAO();

/*
        $admin_session=new AdminSession();
        $adminDAO=new adminDAO();
        $userDAO=new UserDAO();

        $name=htmlentities($_POST['name']);
        $surname=htmlentities($_POST['surname']);
        $email=htmlentities($_POST['email']);
        $photo=htmlentities($_POST['photo']);
        $red=htmlentities($_POST['red']);
        
        //ADD $_SESSION
        $admin_session->setSessionName($name);
        $admin_session->setSessionSurname($surname);
        $admin_session->setSessionEmail($email);
        $admin_session->setSessionPhoto($photo);

        //OBJETS IF THERE IS AN ADMIM
        $user=$userDAO->isAdmin($email);
        $admin=$adminDAO->isAdmin($email);

        if($user!= false && $admin!=false){
            $user_id=$user->getUserId();
            $admin_id=$admin->getAdminId();
            $admin->setAdminCode($admin_id); //CREATE ADMIN CODE
            $admin_code=$admin->getAdminCode(); 
            
            //ADD $_SESSION
            $admin_session->setSessionCode($admin_code);
            $admin_session->setSessionId($admin->getAdminId());

            if($admin->getAdminUserId()==""){
                if($adminDAO->registerAdmin($admin_code,$user_id)){ 
                    echo json_encode(array("message"=>"Successful registration, welcome ","data"=>array("id"=>$admin_id,"name"=>$name))); 
                }
            }else{
                echo json_encode(array("message"=>"Welcome ","data"=>array("id"=>$admin_id,"name"=>$name)));
            }
        }else{
            echo json_encode(array("message"=>"You aren´t administrator ","data"=>null));
        }
*/
?>
