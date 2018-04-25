<?php 
include("../sesioncheck.php");?>


<html>
<head>
<title> Formulario </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="style.css" type="text/css"> 
<meta charser="utf-8">
</head>
<body>
<?php include("../navbar.php"); ?>


<h1 id="h2"> Insertar nuevo usuario </h1>
<form action="modificar_form.php" method="POST">
<ul id="formulario">
<li> Nombre <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"  </li>
<li> Descripcion <input type="text" name="descripcion" required class="form-control" style="width : 250px; heigth : 0.5px"   </li>
<li> Precio  <input type="text" name="precio" required class="form-control" style="width : 250px; heigth : 0.5px"  </li>
 
<input id="boton" type="submit" class="btn btn-primary btn-lg" name="enviar" value="Insertar" </li>

</ul>
</form>



   
</body>

</html>





