<?php
require 'core/AyudaVistas.php';

$helper = new AyudaVistas();
?>
<a href=" <?php echo $helper->url("persona", 'crear') ?> ">crear persona</a>
