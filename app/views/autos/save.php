<?php
//include("sesioncheck.php");
?>
<html>
<head>
<title> Agregar Auto</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="/public/style.css" type="text/css"> 
<meta charser="utf-8">
</head>
<body>
<?php include("navbar.php");  ?>

<h1 id="h2"> Agregar nuevo Auto </h1>
<form action="index.php?controller=AutosController&action=guardar" method="POST">
<ul id="formulario">
<li> Marca <input type="text" name="marca" required class="form-control" style="width : 250px; heigth : 0.5px">  </li>
<li> Modelo <input type="text" name="modelo" required class="form-control" style="width : 250px; heigth : 0.5px">   </li>
<li> Nombre <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"> </li>
<li> Descripcion<input type="text" name="descripcion" required class="form-control" style="width : 250px; heigth : 0.5px">  </li>
<li> Color <input type="text" name="color" required class="form-control" style="width : 250px; heigth : 0.5px">  </li>
<li> Cantidad de Puertas <input type="cantidad_de_puertas" name="cantidad_de_puertas" required class="form-control" style="width : 250px; heigth : 0.5px">  </li>
<li> Es Nuevo <input type="text" name="es_nuevo" required class="form-control" style="width : 250px; heigth : 0.5px">  </li>
 
<input id="boton" type="submit" class="btn btn-primary btn-lg" name="enviar" value="Insertar"> </li>

</ul>
</form>



   
</body>

</html>