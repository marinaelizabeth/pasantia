<?php
    date_default_timezone_set('America/Asuncion');
    include 'controlador/soporteControlador.php';
    $controller = new soporteControlador();
    
   if(!isset($_REQUEST['c'])){
    $controller->index();
   }else{
    $action = $_REQUEST['c'];
    call_user_func(array($controller, $action));
   }
?>