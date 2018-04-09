<?php
include("sesioncheck.php");
include("modelos/usuario.php");
$config = include('config.php');
$usuarioDB = new Usuario($config['mysql']);

$id = $_GET['id'];

$resultado = $usuarioDB->delete($id);

if ($resultado === false) {
  echo "Actualizacion fallida";
}else{
  header("Location: tabla.php");
}   

?>