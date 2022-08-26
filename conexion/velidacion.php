<?php
    function validar($datos)
    {
        $datos = trim($datos);
        $datos = stripcslashes($datos);
        $datos=htmlspecialchars($datos);
        return $datos;
    }
    function check_not_empty($s , $include_whitespace = false)
    {
        if ($include_whitespace)
        {
            $s=trim($s);
        }
        return(isset($s)&&strlen($s));
    }
?>