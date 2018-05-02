<?php 
$dir = dirname(__FILE__);
include($dir . "/../modelos/usuario.php");
$config = include($dir . '/../config.php');
$usuarioDB = new Usuario($config['mysql']);

if (!isset($argv[1])) {     
    echo 'error';
    return 1;
}

$id = [
    'id_usuario' =>$argv[1]

  ];

  $resultado = $usuarioDB->delete($argv[1]);

  if ($resultado === false) {
    echo "Actualizacion fallida";
  }else{
    echo "Exito";
  }   



var_dump($argv);


?>