<?php

    class Room{

        private $room_id; 
        private $room_number;
        private $room_code;
        private $room_seats;
        private $room_state;
        private $room_admin_id; 
        public function __construct(){

        }
        public function setRoomId($room_id){
            $this->room_id=$room_i;
        }
        public function getRoomId(){
            return $this->room_id;
        }
        public function setRoomNumber($room_number){
            $this->room_number=$room_number;
        }
        public function getRoomNumber(){
            return $this->room_number;
        }
        public function setRoomCode($room_number){
            $this->room_code="R-".$room_number;
        }
        public function getRoomCode(){
            return $this->room_code;
        }
        public function setRoomSeats($room_seats){
            $this->room_seats=$room_seats;
        }
        public function getRoomSeats(){
            return $this->room_seats;
        }
        public function setRoomState($room_state){
            $this->room_state=$room_state;
        }
        public function getRoomState(){
            return $this->room_state;
        }
        public function setRoomAdminId($room_admin_id){
            $this->room_admin_id=$room_admin_id;
        }
        public function getRoomAdminId(){
            return $this->room_admin_id;
        }

        
        
    }
?>