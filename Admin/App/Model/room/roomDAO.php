<?php
    
    require_once("../model/room/room.php");
    require_once("../model/datasource/datasource.php");

    class roomDAO{
        
        public function __contruct(){

        }
        public function registerRoom($data,$admin_id){
            $array_rooms=array();
            $datasource=new DataSource();
            $quantity=$data['quantity'];
            $i=0; //INDEX WHILE
            while($i<$quantity){
                $room= new Room();
                foreach($data['data'][$i] as $key=>$value){
                    if($key=="room"){
                        $room->setRoomNumber($value);
                    }else if($key=="seats"){
                        $room->setRoomSeats($value);
                    }else{
                        $room->setRoomState($value);
                    }
                }
                $room->setRoomAdminId($admin_id);
                $room->setRoomCode($room->getRoomNumber());
                array_push($array_rooms,$room);
                $dataquery=$datasource->executeQuery_insert("INSERT into room (room_number,room_code,room_seats,room_state,room_admin_id) VALUES (:room_number,:room_code,:room_seats,:room_state,:room_admin_id)",array("room_number"=>$room->getRoomNumber(),"room_code"=>$room->getRoomCode(),"room_seats"=>$room->getRoomSeats(),"room_state"=>$room->getRoomState(),"room_admin_id"=>$room->getRoomAdminId()));
                $i++;
            }
            if($dataquery){
                $dataquery=null;
                $datasource->closeConnection();
                return $array_rooms;
            }else{
                $dataquery=null;
                $datasource->closeConnection();
                return false;
            }
        }
    }


?>