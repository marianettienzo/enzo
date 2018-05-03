
<?php include("sesioncheck.php"); ?>

<html>
<head>
<title> Modificar </title>
<meta charser="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>
<body>
<?php include("navbar.php"); ?>

<?php
if ($usuario === false) {
  echo "Actualizacion fallida";
}else{
 header ("Location tabla.php");
}
if(!empty($usuario)) { 

  ?>
<form action="routes.php?controller=UsersController&action=editar&id=<?php echo $usuario['id_usuario']?>" method="POST">
<ul id="formu">
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