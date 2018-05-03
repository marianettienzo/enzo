<?php
include("sesioncheck.php");
include("navbar.php");
?>


<html>
<head>
    <title>Tabla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="style.css" type="text/css"> 
<meta charser="utf-8">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>



</head>
<body>
<br>
<table class="table table-striped table-dark" border="1">  
     
<tr>  
<td>   Id_usuario </td>  
<td>   Nombre      </td>
<td>   Email      </td>
<td colspan="2">   Operaciones </td>
<td> <a href="formulario.php">Agregar Usuario </td></a>


</td>
<?php
for ($i=0; $i < count($usuarios); $i++) { 
?>
<tr>
  <td> <?php echo $usuarios[$i]['id_usuario'] ?> </td>
  <td> <?php echo $usuarios[$i]['nombre'] ?> </td>
  <td> <?php echo $usuarios[$i]['email'] ?> </td>
  <td> <a class="btn btn-primary" role="button"   href="routes.php?controller=UsersController&action=modificar&id=<?php echo $usuarios[$i]['id_usuario']; ?>" > Modificar </a> </td>
  <td> <a class="btn btn-primary" role="button" href="eliminar.php?id=<?php echo $usuarios[$i]['id_usuario']; ?>" > Eliminar </a> </td>
  <td></td>
</tr>
<?php
}
?>
</table>




    
</body>
</html>