<?php
include("formulario.php");
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if(
    isset($_POST['nombre']) &&
    !empty($_POST['nombre']) &&
    isset($_POST['email']) &&
    !empty($_POST['email']) &&
    isset($_POST['pass']) &&
    !empty($_POST['pass'])
    ){


  if (!($stmt = $mysqli->prepare("INSERT INTO `usuarios`(`id_usuario`, `nombre`, `email`, `pass`) VALUES (NULL,?, ?, ? "))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
  }
  
  /* Prepared statement, stage 2: bind and execute */
  if (!$stmt->bind_param("sss", $nombre, $email, $pass)) {
      echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }
  
  
  if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }

}
?>