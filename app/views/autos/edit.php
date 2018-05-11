
<?php //include("sesioncheck.php"); ?>

<html>
<head>
<title> Modificar </title>
<meta charser="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <link rel="stylesheet"  href="/public/style.css" type="text/css"> 
</head>
<body>
<?php include("navbar.php"); ?>

<form action="index.php?controller=AutosController&action=modificar&id=<?php echo $auto['id']?>" method="POST">
  <ul id="formu">
  <li> Marca <input type="text" name="marca" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['marca']?>"> </li>
  <li> Modelo <input type="text" name="modelo" required class="form-control" style="width : 250px; heigth : 0.5px" value="<?php echo $auto['modelo']?>"> </li>
  <li> Nombre  <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['nombre']?>"> </li>
  <li> Descripcion  <input type="text" name="descripcion" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['descripcion']?>"> </li>
  <li> Color  <input type="text" name="color" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['color']?>"> </li>
  <li> Cantidad de Puertas  <input type="text" name="cantidad_de_puertas" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['cantidad_de_puertas']?>"> </li>
  <li> Es Nuevo  <input type="text" name="es_nuevo" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $auto['es_nuevo']?>"> </li>
  <input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar"> </li>

  </ul>
</form>
   
</body>

</html>