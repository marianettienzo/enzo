<?php
include("formulario.php");
$db_connection = mysqli_connect("localhost", "root", "", "formulario");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
///BASE DE DATOS///
//$db_name = "formulario";
//$db_host = "localhost";
//$db_password="";
//$db_user= "root";


if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass']))
{


$resu = " INSERT INTO `usuarios`(`id_usuario`, `nombre`, `email`, `pass`) VALUES ('', '$nombre', '$email', '$pass')";
$con = $db_connection -> query($resu);





}
?>