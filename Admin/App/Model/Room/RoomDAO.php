<?php
    namespace App\Model\Room;

    use System\Core\Model;
    use App\Model\Room\Room;
    
    class RoomDAO extends Model{
       
        private $table="room";
        private $parameters=['room_id','room_number','room_code','room_seats','room_state','room_admin_id'];
        private $room_array=[];

        public function __contruct(){

        }
        public function register($request,$admin_code){

            $array_rooms=array();
            $quantity=$request['quantity'];
            $admin_id=$this->datasource->executeQuery("SELECT admin_id FROM admin WHERE admin_code=? ",array($admin_code))['admin_id'];
            $i=0; //INDEX WHILE
            while($i<$quantity){
                $room= new Room();
                foreach($request['data'][$i] as $key=>$value){
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
                array_push($this->room_array,$room);
                
                $sql="INSERT INTO room (room_id,room_number,room_code,room_seats,room_state,room_admin_id) VALUES 
                (DEFAULT,:room_number,:room_code,:room_seats,:room_state,:room_admin_id)";
                
                $array_rooms=array("number"=>$room->getRoomNumber(),"code"=>$room->getRoomCode(),"seats"=>$room->getRoomSeats(),"state"=>$room->getRoomState(),"admin_id"=>$room->getRoomAdminId());
                $dataquery=$this->datasource->executeQuery_insert($sql,$array_rooms,$this->table,$this->parameters);
                $i++;
            }
            if($dataquery){
                $dataquery=null;
                $this->datasource->closeConnection();
                return $array_rooms;
            }else{
                $dataquery=null;
                $this->datasource->closeConnection();
                return false;
            }
        }
        public function show(){
            $dataquery=$this->datasource->executeQuery("SELECT room_number,room_code,room_seats,room_state FROM room");
            return $dataquery;
        }
        public function edit($id){
            return "el id es: ".$id;
        }
    }


?>