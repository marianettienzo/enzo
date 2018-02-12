<?php
include("conexion.php");
$db_connection = mysqli_connect("localhost", "root", "", "formulario");
$nombre2 = $_POST['nombre2'];
$email2 = $_POST['email2'];
$pass2 = $_POST['pass2'];
$id = ['id_usuario'];
///BASE DE DATOS///

$resu = "UPDATE `usuarios` SET `id_usuarios`='$id',  `nombre`='$nombre', `email`='$email', `pass`='$pass'
WHERE `id_usuario`= '$id'";

$con = $db_connection -> query($resu);

if ($resu) {

    header("Location: tabla.php");
}
else {
    echo "error";
}

?>