
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

<form action="index.php?controller=MarcaController&action=modificar&id=<?php echo $marca1['id']?>" method="POST">
  <ul id="formu">
  <li> Nombre <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $marca1['nombre']?>"> </li>
  
  <input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar" </li>

  </ul>
</form>
   
</body>

</html>