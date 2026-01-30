<?php

    require_once __DIR__."/database/conectar.php";

    class M_Menu extends Conectar{

        public function __construct(){
            parent::__construct();
        }

        public function mostrarDatosUsuarios(){
            $sql="  SELECT u.nombreUsuario, d.nombreDep FROM usuarios u
                    INNER JOIN usuarios_deportes ud ON u.idUsuario=ud.idUsuario
                    INNER JOIN deportes d ON ud.idDeporte=d.idDeporte
                    ORDER BY u.nombreUsuario;";
            
            try{
                $resultado=$this->conexion->query($sql);

                $datos=[];
                while($fila=$resultado->fetch_assoc()){
                    $datos[]=$fila;
                }

                return $datos;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        public function totalDeportesPorAlumno(){
            $sql="  SELECT count(DISTINCT ud.idDeporte) AS total
                    FROM usuarios_deportes ud;";
            
            try{
                $resultado=$this->conexion->query($sql);

                if($fila=$resultado->fetch_assoc()){
                    $dato=$fila;
                }

                return $dato;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        public function mostrarUsuariosPorDeporte(){
            $sql="  SELECT d.nombreDep, u.nombreUsuario FROM usuarios u
                    INNER JOIN usuarios_deportes ud ON u.idUsuario=ud.idUsuario
                    INNER JOIN deportes d ON ud.idDeporte=d.idDeporte
                    ORDER BY d.nombreDep;";
            
            try{
                $resultado=$this->conexion->query($sql);

                $datos=[];
                while($fila=$resultado->fetch_assoc()){
                    $datos[]=$fila;
                }

                return $datos;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }
    }

?>