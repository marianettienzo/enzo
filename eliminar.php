<?php
include("conexion.php");

$id = $_GET['id'];

if (!($stmt = $mysqli->prepare("DELETE FROM usuarios WHERE id_usuario = ? LIMIT 1"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
  }
  
  /* Prepared statement, stage 2: bind and execute */
  if (!$stmt->bind_param("i", $id)) {
      echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }  
  
  if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }else{
    header("Location: tabla.php");
  }
   

?>