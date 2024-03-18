<?php
    class db{
        private $host;
        private $db;
        private $user;
        private $pass;

        public function __construct(){
            $this->host = 'localhost';
            $this->db = "agenciaviajesdb";
            $this->user = "admin";
            $this->pass = "admin.pass";
        }

        public function conexion(){

            try{
                $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db . ";", $this->user, $this->pass);
                return $conexion;
            }
            catch(Exception $e){
                echo "Error de conexión ".$e->getMessage()."";
            }            
         }
     }
     //$conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
?>

