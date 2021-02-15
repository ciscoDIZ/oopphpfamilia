<?php
require_once 'core/EntidadBase.php';
require_once 'models/Persona.php';
require_once 'config/global.php';
require_once 'core/ControladorBase.php';
require_once 'core/ControladorFrontal.func.php';
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
?>
