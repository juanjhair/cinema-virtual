<?php 
    @session_start();
    include "../model/room/roomDAO.php";
    $data_json=$_POST['json'];
    $data=json_decode($data_json,true); // convert array assoc
   // $quantity=$data['quantity'];
    
//$array=array("0"=>array("room"=>"room","seats"=>"seats","state"=>"Enabled"));
   //$array=array('quantity'=>'2','data'=>array("0"=>array("room"=>"1","seats"=>"30","state"=>"Enabled"),"1"=>array("room"=>"2","seats"=>"40","state"=>"Enabled")));
   $roomDAO=new roomDAO();
   $room=$roomDAO->registerRoom($data,$_SESSION['admin_id']);
   if($room!=false){
       echo json_encode(array("message"=>"Successful registration","data"=>array())); 
   }else{
    echo json_encode(array("message"=>"An error occurred, try again please","data"=>null)); 
   }
   /*$room=new Room();
    
    $room->registerRoom($array);*/
    /*$quantity=htmlentities($_POST['data.quantity']);
*/
    /*for(int i=0;i<$quantity;i++){
        $array_all=array()
    }*/
    
    /*$room=htmlentities($_POST['room-'.$index]);
    $seats=htmlentities($_POST['seats-'.$index]);
    $state=htmlentities($_POST['state-'.$index]);*/
    
    

?>