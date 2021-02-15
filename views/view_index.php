<?php
require 'core/AyudaVistas.php';

$helper = new AyudaVistas();
?>
<form action="<?php echo $helper->url('persona', 'crear') ?>">
    nombre: <input type="text" name="nombre">
    edad: <input type="text" name="edad">
    dni: <input type="text" name="dni">
    <input type="submit">
</form>
