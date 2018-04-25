<?php
include("../sesioncheck.php");
include("./planes/planes.php");
$config = include('../config.php');

?>

<html>
<head>
<meta charser="utf-8">
    <title>Tabla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css" type="text/css"> 
</head>
<body>
<?php include("../navbar.php"); ?>

<br>
<table class="table table-striped table-dark" border="1">  
     
<tr>  
<td>   Id_usuario      </td>  
<td>    Nombre         </td>
<td>     Plan          </td>
<td>   Descripcion     </td>
<td>   Precio          </td>
<td> <a href="./crear_form.php">Agregar  </td></a>


</td>
<?php


for ($i=0; $i < count($usuarios); $i++) { 

?>
<tr>
  <td>   </td>
  <td>   </td>
  <td>   </td>
  <td>   </td>
  <td>   </td>
</tr>
<?php
}
?>
</table>




    
</body>
</html>