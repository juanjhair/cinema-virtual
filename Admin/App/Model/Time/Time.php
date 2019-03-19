<?php

    namespace App\Model\Time;

    class Time {

        public function __construct(){
            date_default_timezone_set('America/Lima');
        }
        public function getTime(){
            $date = date("Y-m-d H:i:s");
            return $date;
        }

    }






?>