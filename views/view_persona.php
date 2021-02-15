<?php
require 'controllers/PersonaController.php';
require 'core/Conectar.php';
$adapter = new Conectar();
$persona_controller = new PersonaController();
/*if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['dni'])){
    $nombre = $_POST['nombre'];
    $edad = new DateTime($_POST['edad']);
    $dni = $_POST['dni'];
    $persona_controller->add(new Persona($dni, $nombre, $edad,$adapter));
}*/
$persona_controller->crear();
?>
<form action="view_persona.php" method="post">
    nombre: <input type="text" name="nombre">
    edad: <input type="text" name="edad">
    dni: <input type="text" name="dni">
    <input type="submit">
</form>