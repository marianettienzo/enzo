<?php
include("sesioncheck.php");
include("modelos/usuario.php");
include("crypt.php");
$config = include('config.php');
$encrypt = new Crypt();
$usuarioDB = new Usuario($config['mysql']);

$id = $_GET['id'];
$data = [
  'nombre' => $_POST['nombre'],
  'email' => $_POST['email'],
  'pass' => $encrypt->encrypt($_POST['pass'])
];

$resultado = $usuarioDB->update($id, $data);

if ($resultado === false) {
  echo "Actualizacion fallida";
}else{
  header("Location: tabla.php");
}   

?>