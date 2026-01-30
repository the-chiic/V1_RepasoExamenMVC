<?php

    require_once __DIR__."/../model/M_InicioSesion.php";

    class C_InicioSesion{
        private $model;
        public $vista;

        public function __construct(){
            $this->model=new M_InicioSesion();
        }

        public function inicioSesion(){
            $this->vista="V_InicioSesion";
            return [];
        }

        public function iniciarSesion(){
            $nombre=!empty($_POST["nombre"]) ? trim($_POST["nombre"]) : null;
            $pw=!empty($_POST["pw"]) ? trim($_POST["pw"]) : null;

            $usuario=null;
            $admin=$this->model->buscarAdministrador($nombre,$pw);
            if(!$admin){
                $usuario=$this->model->buscarUsuario($nombre,$pw);
            }

            if($admin){
                session_start();
                $_SESSION["usuario"]=$admin;
                $this->vista="V_MenuAdmin";
                return ["usuario" => $admin];
            }else if($usuario){
                session_start();
                $_SESSION["usuario"]=$usuario;
                $this->vista="V_MenuUsuario";
                return ["usuario" => $usuario];
            }else{
                $this->vista="V_ErrorInicioSesion";
                return ["mensajeError" => "ERROR AL INCIAR SESIÓN"];
            }
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
            $this->vista="V_Inicio";
            return [];
        }
    }

?>