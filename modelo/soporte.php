<?php
require_once('conexion/conexion.php');
class soporte extends conexion
{
    private $pdo;

    public $at_cod ;
    public $at_fechaop;
    public $at_hora;
    public $at_cod_cliente;
    public $at_cod_sevicios;
    public $at_obs;
    public $at_estado;
    public $at_operador; 
    public $at_cod_ejecutable; 
    public $at_usuario;
    public $at_condicion;
    public $at_comunicacion;
    public $at_horafin;
    public $at_tiempo;
    public $usuario;

    public function __CONSTRUCT()
    {
        parent::__CONSTRUCT();
        $this->pdo = $this->conexion_db;
    }


    public function ListaSoporte()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM atencion_al_cliente ORDER BY at_cod DESC");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            // return json_encode($Result, JSON_UNESCAPED_UNICODE);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(soporte $data)
    {
        try {
            $sql = "INSERT INTO atencion_al_cliente
            ( at_fechaop, at_hora, at_cod_cliente, at_cod_sevicios, at_obs, at_estado, at_operador, at_cod_ejecutable, 
            at_usuario, at_condicion, at_comunicacion, at_horafin, at_tiempo, usuario) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->at_fechaop,
                        $data->at_hora,
                        $data->at_cod_cliente,
                        $data->at_cod_sevicios,
                        $data->at_obs,
                        $data->at_estado,
                        $data->at_operador,
                        $data->at_cod_ejecutable,
                        $data->at_usuario,
                        $data->at_condicion,
                        $data->at_comunicacion,
                        $data->at_horafin,
                        $data->at_tiempo,
                        $data->usuario
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $stm = $this->pdo
            ->prepare("DELETE FROM atencion_al_cliente WHERE at_cod = ?");
            $stm->execute(array($id));
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
    /*
    ***************************************************************************
        DATOS DE LOS tipo ejecutable sofmar
    ***************************************************************************
    */
    public function  DatosEjecutable()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM tipo_ejecutable_sofmar");
            $consulta->execute();
            $Result = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $Result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>