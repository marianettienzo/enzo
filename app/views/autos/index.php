<?php
//include("sesioncheck.php");
?>

<html>
<head>
    <title>Autos</title>
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
<td>   Marca      </td>
<td>   Modelo      </td>
<td>   Nombre     </td>
<td>   Descripcion     </td>
<td>   Color     </td>
<td>   Cantidad de Puertas     </td>
<td>   Es nuevo     </td>
<td colspan="2">   Operaciones </td>
<td> <a href="index.php?controller=AutosController&action=formularioNuevo">Agregar Auto </td></a>


</td>
<?php
for ($i=0; $i < count($autos); $i++) { 
?>
<tr>
  <td> <?php echo $autos[$i]['id'] ?> </td>
  <td> <?php echo $autos[$i]['marca'] ?> </td>
  <td> <?php echo $autos[$i]['modelo'] ?> </td>
  <td> <?php echo $autos[$i]['nombre'] ?> </td>
  <td> <?php echo $autos[$i]['descripcion'] ?> </td>
  <td> <?php echo $autos[$i]['color'] ?> </td>
  <td> <?php echo $autos[$i]['cantidad_de_puertas'] ?> </td>
  <td> <?php echo $autos[$i]['es_nuevo'] ?> </td>
  <td> <a class="btn btn-primary" role="button" href="index.php?controller=AutosController&action=formularioEditar&id=<?php echo $autos[$i]['id']; ?>" > Modificar </a> </td>
  <td> <a class="btn btn-primary" role="button" href="index.php?controller=AutosController&action=eliminar&id=<?php echo $autos[$i]['id']; ?>" > Eliminar </a> </td>
  <td></td>
</tr>
<?php
}
?>
</table>




    
</body>