<?php

    require_once __DIR__."/../model/M_Menu.php";

    class C_Menu{
        private $model;
        public $vista;

        public function __construct(){
            $this->model=new M_Menu();
        }

        public function volverMenu(){
            session_start();
            $this->vista="V_MenuAdmin";
            return ["usuario" => $_SESSION["usuario"]];
        }

        public function deportesUsuarios(){
            $datos=$this->model->mostrarDatosUsuarios();
            $this->vista="V_DeportesUsuarios";
            return ["datos" => $datos];
        }

        public function totalDeportes(){
            $dato=$this->model->totalDeportesPorAlumno();
            $this->vista="V_TotalDeportes";
            return ["dato" => $dato];
        }

        public function usuariosDeportes(){
            $datos=$this->model->mostrarUsuariosPorDeporte();
            $this->vista="V_UsuariosDeportes";
            return ["datos" => $datos];
        }
    }

?>