<?php
    include_once ('modelo/soporte.php');
    class soporteControlador
    {
        private $model;

        public function __CONSTRUCT()
        {
            $this->model=new soporte();
            $this->soporte=new soporte();
        }
        public function index()
        {
            include_once 'vista/header.php';
            include_once 'vista/soporte/soporte.php';
            include_once 'vista/footer.php';
        }
        public function ListaSoporte()
        {
            $soporte = new soporte();
            $soporte= $this->model->ListaSoporte();
            return json_encode ($soporte, JSON_UNESCAPED_UNICODE);
        }
        
        public function guardar()
        {
            $soporte = new soporte();
           
            $soporte-> at_fechaop = $_REQUEST['fecha'];
            $soporte-> at_hora = $_REQUEST['horaInicio'];
            $soporte-> at_cod_cliente = $_REQUEST['empresaCod'];
            $soporte-> at_cod_sevicios = $_REQUEST['servicios'];
            $soporte-> at_obs = $_REQUEST['observacion'];
            $soporte-> at_estado= 1;//ver
            $soporte-> at_operador = $_REQUEST['operador_cod'];
            $soporte-> at_cod_ejecutable = $_REQUEST['ejecutable'];
            $soporte-> at_usuario = $_REQUEST['nomUsuario'];
            $soporte-> at_condicion = 2;
            $soporte-> at_comunicacion = 2;
            $soporte-> at_horafin = $_REQUEST['horaFin'];
            $soporte-> at_tiempo = $_REQUEST['resultado'];
            $soporte-> usuario =1;
            

            $this->model->Registrar($soporte);
            header(("Location: index.php"));

        }

        public function eliminar()
        {
            $this->model->delete($_REQUEST['id']);
            header ("location: index.php");
        }
        /*
        --------------------------------------------------------------------
        datos de otra tabla
        --------------------------------------------------------------------
        */
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
        public function DatosEjecutable()
        {
            $soporteEjecutable = new soporte();
            $soporteEjecutable= $this->model->DatosEjecutable();
            return $soporteEjecutable;
        }
    
    }
