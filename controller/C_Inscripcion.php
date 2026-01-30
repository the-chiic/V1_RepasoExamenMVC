<?php

    require_once __DIR__."/../model/M_Inscripcion.php";

    class C_Inscripcion{
        private $model;
        public $vista;

        public function __construct(){
            $this->model=new M_Inscripcion();
        }

        public function inscripcion(){
            $deportes=$this->model->recogerDeportes();
            $this->vista="V_Inscripcion";
            return ["deportes" => $deportes];
        }

        public function inscribirse(){
            $nombreUsuario=!empty($_POST["nombreUsuario"]) ? trim($_POST["nombreUsuario"]) : null;
            $apeNombre=!empty($_POST["apeNombre"]) ? trim($_POST["apeNombre"]) : null;
            $pw=!empty($_POST["pw"]) ? trim($_POST["pw"]) : null;
            $correo=!empty($_POST["correo"]) ? trim($_POST["correo"]) : null;
            $tel=!empty($_POST["tel"]) ? trim($_POST["tel"]) : null;
            $deportes=isset($_POST["deportes"]) ? $_POST["deportes"] : [];
            $condiciones=isset($_POST["condiciones"]) ? true : false;

            if(!$condiciones){
                $this->vista="V_ErrorInscripcion";
                return ["mensajeError" => "Debe Aceptar las Condiciones"];
            }else{
                if(!$nombreUsuario || !$apeNombre || !$pw || !$correo){
                    $this->vista="V_ErrorInscripcion";
                    return ["mensajeError" => "No Rellenaste los Campos Obligatorios"];
                }else{
                    $idUsuario=$this->model->inscribirUsuario($nombreUsuario, $apeNombre, $pw, $correo, $tel);
                    $insertado=true;
                    foreach($deportes as $deporte){
                        $deporteIntroducido=$this->model->inscribirDeportesUsuario($deporte, $idUsuario);
                        if(!$deporteIntroducido){
                            $insertado=false;
                        }
                    }
                }
            }

            if($idUsuario && $insertado){
                $this->vista="V_InscripcionCorrecta";
                return [];
            }else{
                $this->vista="V_ErrorInscripcion";
                return ["mensajeError" => "Fallo en la Inscripción"];
            }
        }
    }

?>