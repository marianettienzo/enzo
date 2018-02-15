<?php
include("conexion.php");
?>

<html>
<head>
<title> Modificar </title>
<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<a href="tabla.php">Volver</a>
<h1>  </h1>
<?php

$id = $_GET['id'];


//MYSQL PREPARED STATEMENTS

/* Prepared statement, stage 1: prepare */
if (!($stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE id_usuario = ? "))) {
  echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

/* Prepared statement, stage 2: bind and execute */
if (!$stmt->bind_param("i", $id)) {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
}


if (!$stmt->execute()) {
  echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}


$res = $stmt->get_result();
$usuario = $res->fetch_assoc();

if(!empty($usuario)) {

  ?>
<form action="modificar_progreso.php?id=<?php echo $usuario['id_usuario']?>" method="POST">
<ul id="formulario">
<li> Nombre: <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $usuario['nombre']?>"> </li>
<li> Email <input type="email" name="email" required class="form-control" style="width : 250px; heigth : 0.5px" value="<?php echo $usuario['email']?>"> </li>
<li> Password  <input type="password" name="pass" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $usuario['pass']?>"> </li>
 
<input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar" </li>

</ul>
</form>

<?php 
  
} else {
?>

  <h1>USUARIO NO ENCONTRADO</h1>
<?php
}
?>
   
</body>

</html>