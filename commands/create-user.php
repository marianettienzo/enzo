<?php

$dir = dirname(__FILE__);
include($dir . "/../modelos/usuario.php");
$config = include($dir . '/../config.php');


var_dump($argv); //$argv es un arreglo
// verificar que el email esté presente 1
// verificar que el password este presente 2 
// verificar que el nombre este presente 3
// armar el objeto para enviar a la DB
// ejecutar la consulta a la DB
// devolver un mensaje con el resultado de la operacion

?>