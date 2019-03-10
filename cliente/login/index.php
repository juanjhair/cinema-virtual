<?php 

        include "../class/user/user.php";
        include "../class/user/user_session.php";

        $user=new User();
        $user_session=new UserSession();

        $name=htmlentities($_POST['name']);
        $surname=htmlentities($_POST['surname']);
        $email=htmlentities($_POST['email']);
        $photo=htmlentities($_POST['photo']);
        $red=htmlentities($_POST['red']);
        
        
        $user_session->setSessionName($name);
        $user_session->setSessionSurname($surname);
        $user_session->setSessionEmail($email);
        $user_session->setSessionPhoto($photo);
        
        
        $selec_user=$user->selectUser($email);
        $row= $selec_user->rowCount();
        
        if($row==0){
            $pass=password_hash(rand(0000,9999).rand(00,99),PASSWORD_BCRYPT);
            date_default_timezone_set("America/Lima");
            $created_date=date("Y-m-d H:i:s");
            $birthdate=null;
            $phone=null;
            $user->registerUser($name,$pass,$surname,$email,$photo,$created_date,$birthdate,$phone);
        
        }else{
            if($sel=$selec_user->fetch()){
                $pass=$sel['users_pass'];
            }
        }
        $select_user=null;
        $user_session->setSessionPass($pass);
    

?>
