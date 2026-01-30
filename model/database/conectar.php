<?php

    require_once __DIR__."/../../config/configBD.php";

    class Conectar{
        protected $conexion;

        public function __construct() {
            $this->conexion=new mysqli(SERVER, USER, PW, BBDD);
        }

        public function __destruct(){
            if($this->conexion){
                $this->conexion->close();
            }
        }
    }

?>