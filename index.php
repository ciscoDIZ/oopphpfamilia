<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'models/Persona.php';
if(isset($_REQUEST["nombre"]) && isset($_REQUEST["apellidos"]) && isset($_REQUEST["dni"])){
    $persona = new Persona($_REQUEST["dni"], $_REQUEST["nombre"], $_REQUEST["apellidos"]);
}
?>
<form action="index.php">
    nombre:<input type="text" name="nombre"><br>
    apellidos: <input type="text" name="apellidos"><br>
    dni: <input type="text" name="dni">
    <input type="submit">
</form>
<?php
    if(isset($persona))
        echo $persona->id . " " . $persona->name . " " . $persona->surname;
?>
</body>
</html>

