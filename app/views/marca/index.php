<?php
//include("sesioncheck.php");
?>

<html>
<head>
    <title>Tabla</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="/public/style.css" type="text/css"> 
<meta charser="utf-8">
</head>
<body>
<?php include("navbar.php");  ?>

<br>
<table class="table table-striped table-dark" border="1">  
     
<tr>  
<td>   Id </td>  
<td>   Nombre      </td>
<td colspan="2">   Operaciones </td>
<td> <a href="index.php?controller=MarcaController&action=formularioNuevo">Agregar Marca </td></a>


</td>
<?php
for ($i=0; $i < count($marca); $i++) { 
?>
<tr>
  <td> <?php echo $marca[$i]['id'] ?> </td>
  <td> <?php echo $marca[$i]['nombre'] ?> </td>
  <td> <a class="btn btn-primary" role="button" href="index.php?controller=MarcaController&action=formularioEditar&id=<?php echo $marca[$i]['id']; ?>" > Modificar </a> </td>
  <td> <a class="btn btn-primary" role="button" href="index.php?controller=MarcaController&action=eliminar&id=<?php echo $marca[$i]['id']; ?>" > Eliminar </a> </td>
  <td></td>
</tr>
<?php
}
?>
</table>




    
</body>
</html>
