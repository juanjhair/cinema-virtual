<?php
    namespace App\Model\Datasource;
    
    class Datasource{

        protected $conexion;

        public function __construct(){
            try{
                $this->conexion=new \PDO('mysql:host=localhost; dbname=cinema_virtual','root','root');
                $this->conexion->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                $this->conexion->exec("SET CHARACTER SET utf8");
            }catch(\PDOException $e){
                echo "La linea de error en la conexion es: ".$e->getLine();
            }
        }
        public function executeQuery($sql="",$value=array()){
            if($sql!=""){
                $query=$this->conexion->prepare($sql);
                $query->execute($value);
                
                if($query->rowCount()==1){
                    return $query->fetch(\PDO::FETCH_ASSOC);
                }else{
                    return $query->fetchAll(\PDO::FETCH_ASSOC);
                }
            }else{
                return 0;
            }
        }
        public function executeQuery_count($sql=""){
            if($sql!=""){
                $query=$this->conexion->prepare($sql);
                $query->execute();
                return $query->rowCount();
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
        public function executeQuery_insert($sql="",$value=array(),$table,$parameters=[]){
            $array=[];
            $query="";
            if($sql!="" && $parameters!=""){
                
                $query=$this->conexion->prepare($sql);
                foreach($value as $key=>$values){
                    if(in_array($table."_".$key,$parameters)){
                        $query->bindparam(":".$table."_".$key,$value[$key]);
                    }
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