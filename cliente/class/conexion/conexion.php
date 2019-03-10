<?php

    class Conexion_db{

        protected $conexion_db;
        
        public function Conexion(){
            $con=NULL;
            try{
                $con=new PDO('mysql:host=localhost; dbname=cinema_virtual','root','root');
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $con->exec("SET CHARACTER SET utf8");
                $this->conexion_db=$con;
                return $this->conexion_db;
            }catch(PDOException $e){
                echo "La linea de error en la conexion es: ".$e->getLine();
            }
        }
        public function closeConnection(){
            $this->conexion_db=null;
        }
    }
?>