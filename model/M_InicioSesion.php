<?php

    require_once __DIR__."/database/conectar.php";

    class M_InicioSesion extends Conectar{

        public function __construct(){
            parent::__construct();
        }

        public function buscarAdministrador($nombre, $pw){
            $sql="SELECT * FROM usuarios WHERE nombreUsuario=? AND password=? AND perfil='c';";

            try{
                $stmt=$this->conexion->prepare($sql);
                $stmt->bind_param("ss", $nombre, $pw);
                $stmt->execute();
                $resultado=$stmt->get_result();

                $admin=[];

                if($fila=$resultado->fetch_assoc()){
                    $admin=$fila;
                }

                return $admin;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        public function buscarUsuario($nombre, $pw){
            $sql="SELECT * FROM usuarios WHERE nombreUsuario=? AND password=? AND perfil='u';";

            try{
                $stmt=$this->conexion->prepare($sql);
                $stmt->bind_param("ss", $nombre, $pw);
                $stmt->execute();
                $resultado=$stmt->get_result();

                $usuario=[];

                if($fila=$resultado->fetch_assoc()){
                    $usuario=$fila;
                }

                return $usuario;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }
    }

?>