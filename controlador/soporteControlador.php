<?php
    include_once ('model/soporte.php');
    class soporteControlador
    {
        private $model;

        public function __CONSTRUCT()
        {
            $this->model=new soporte();
            $this->soporte=new soporte();
        }
        public function ListaSoporte()
        {
            $soporte = new soporte();
            $soporte= $this->model->ListaSoporte();
            //return json_encode ($soporte, JSON_UNESCAPED_UNICODE);
            return $soporte;
        }
        public function DatosDelOperador()
        {
            $soporteOperador = new soporte();
            $soporteOperador= $this->model->DatosDelOperador();
            return $soporteOperador;
        }
        public function DatosEmpresa()
        {
            $soporteEmpresa = new soporte();
            $soporteEmpresa= $this->model->DatosEmpresa();
            return $soporteEmpresa;
        }
        public function DatosDelServicios()
        {
            $soporteServicios = new soporte();
            $soporteServicios= $this->model->DatosDelServicios();
            return $soporteServicios;
        }
    
    }
?>