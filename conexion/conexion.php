<?php
    include 'config.php';
    class conexion
    {
        protected $conexion_db;

        public function __construct()
        {
            try
            {
                $dsn='mysql:host='.DB_HODT.';dbname='.DB_NOMBRE.';charset='.DB_CHARSET;
                $this->conexion_db= new PDO($dsn, DB_USUARIO, DB_CONTRA);
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo 'conectado';
                return $this->conexion_db;
            }
            catch(PDOException $e)
            {
                echo "Error:".$e->getMessage();
            }
        }
    }
?>