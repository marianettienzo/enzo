<?php
include("modelos/usuario.php");
$config = include('config.php');
$usuarioDB = new Usuario($config['mysql']);

$id = $_GET['id'];
$data = [
  'nombre' => $_POST['nombre'],
  'email' => $_POST['email'],
  'pass' => $_POST['pass']
];

$resultado = $usuarioDB->save($id, $data);

if ($resultado === false) {
  echo "Actualizacion fallida";
}else{
  header("Location: tabla.php");
}   

?>