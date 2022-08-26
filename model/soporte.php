<?php
require_once('conexion/conexion.php');
class soporte extends conexion
{
    private $pdo;
    public function __CONSTRUCT()
    {
        parent::__CONSTRUCT();
        $this->pdo = $this->conexion_db;
    }


    public function ListaSoporte()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM atencion_al_cliente");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            // return json_encode($Result, JSON_UNESCAPED_UNICODE);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListaSoporteAjax()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM atencion_al_cliente");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            // return json_encode($Result, JSON_UNESCAPED_UNICODE);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /*
    .....................................................................................................
        DATOS DE LA EMPRESA DE LA TABLA CLIENTE
    *****************************************************************************************************
    */
    public function DatosEmpresa()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM cliente_sofmar ");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            // return json_encode($Result, JSON_UNESCAPED_UNICODE);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    


    /*
    ....................................................................
        DATOS DEL OPERADOR DE QUIEN ESTA INICIANDO SESION, EJEMPLO.
    ....................................................................
    */
    public function DatosDelOperador()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM operadores WHERE op_codigo = 1");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /*
    ***************************************************************************
        DATOS DE LOS SERVICIOS QUE SE TIENE
    ***************************************************************************
    */
    public function DatosDelServicios()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM servicios_sofmar");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>