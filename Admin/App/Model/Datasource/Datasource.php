<?php
    namespace Model\Datasource;
    
    class Datasource{

        protected $conexion;

        public function __construct(){
            try{
                $this->conexion=new PDO('mysql:host=localhost; dbname=cinema_virtual','root','root');
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conexion->exec("SET CHARACTER SET utf8");
            }catch(PDOException $e){
                echo "La linea de error en la conexion es: ".$e->getLine();
            }
        }
        public static function dataso(){
            echo "estoy en datasource";
        }
        public function executeQuery($sql="",$value=array()){
            if($sql!=""){
                $query=$this->conexion->prepare($sql);
                $query->execute($value);
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return 0;
            }
        }
        public function executeQuery_update($sql="",$value=array()){
            if($sql!=""){
                $query=$this->conexion->prepare($sql);
                $query->execute($value);
                $query=null;
                return true;
            }else{
                return false;
            }
        }
        public function executeQuery_insert($sql="",$value=array()){
            if($sql!=""){
                $query=$this->conexion->prepare($sql);
                foreach($value as $key=>$values){
                    $query->bindparam(":".$key,$value[$key]);
                }
                $query->execute();
                $query=null;
                return true;
            }else{
                return false;
            }
        }
        public function closeConnection(){
            $this->conexion=null;
        }

    }
?>