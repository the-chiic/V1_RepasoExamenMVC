<?php

    require_once __DIR__."/database/conectar.php";

    class M_Inscripcion extends Conectar{

        public function __construct(){
            parent::__construct();
        }

        public function recogerDeportes(){
            $sql="SELECT idDeporte, nombreDep FROM deportes;";

            try{
                $resultado=$this->conexion->query($sql);

                $datos=[];

                while($fila=$resultado->fetch_assoc()){
                    $datos[]=$fila;
                }

                return $datos;
            }catch(mysqli_sql_exception $e){
                return [];
            }
        }

        public function inscribirUsuario($nombreUsuario, $apeNombre, $pw, $correo, $tel){
            $sql="INSERT INTO usuarios(nombreUsuario,apeNombre,password,correo,telefono,perfil) VALUES (?, ?, ?, ?, ?, 'u')";

            try{
                $stmt=$this->conexion->prepare($sql);
                $stmt->bind_param("sssss", $nombreUsuario, $apeNombre, $pw, $correo, $tel);

                if($stmt->execute()){
                    return $this->conexion->insert_id;
                }else{
                    return false;
                }
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        public function inscribirDeportesUsuario($idDeporte, $idUsuario){
            $sql="INSERT INTO usuarios_deportes(idDeporte, idUsuario) VALUES (?, ?)";

            try{
                $stmt=$this->conexion->prepare($sql);
                $stmt->bind_param("ii", $idDeporte, $idUsuario);

                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }
    }

?>