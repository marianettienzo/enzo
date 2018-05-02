<?php

$dir = dirname(__FILE__);
include($dir . "/../modelos/usuario.php");
include($dir . '/../crypt.php');
$config = include($dir . '/../config.php');

if (!isset($argv[1])) {     
    echo 'error';
    return 1;
}

if (!isset($argv[2])) {     
    echo 'error';
    return 1;
}

if (!isset($argv[3])) {     
    echo 'error';
    return 1;
}

$dbnew = new Usuario($config['mysql']);
$encrypt = new Crypt();

$data = [
    'email' => $argv[1],
    'pass' => $encrypt->encrypt($argv[2]),
    'nombre' => $argv[3]
  ];

$resultado = $dbnew->save($data);
if ($resultado === false) {
  echo "Actualizacion fallida";
}else{
  echo "Realizado con éxito";
} 



var_dump($argv);

 //$argv es un arreglo
// verificar que el email esté presente 1
// verificar que el password este presente 2 
// verificar que el nombre este presente 3
// armar el objeto para enviar a la DB
// ejecutar la consulta a la DB
// devolver un mensaje con el resultado de la operacion



?>