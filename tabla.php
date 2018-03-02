<?php
include("modelos/usuario.php");
$config = include('config.php');

$usuarioDB = new Usuario($config['mysql']);

?>


<html>
<head>
<nav class="navbar navbar-light bg-light">
<a class="btn btn-primary btn-lg" style="position: fixed;"  href="index.php">Volver</a>
</nav>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<br>

<table  class="table" style="position: center;"  border="1">
<tr>  
<td>   Id_usuario </td>  
<td>   Nombre      </td>
<td>   Email      </td>
<td>   Password   </td>
<td colspan="2">   Operaciones </td>


</td>
<?php
$usuarios = $usuarioDB->listar();

for ($i=0; $i < count($usuarios); $i++) { 

?>
<tr>
  <td> <?php echo $usuarios[$i]['id_usuario'] ?> </td>
  <td> <?php echo $usuarios[$i]['nombre'] ?> </td>
  <td> <?php echo $usuarios[$i]['email'] ?> </td>
  <td> <?php echo $usuarios[$i]['pass'] ?> </td>
  <td> <a href="modificar.php?id=<?php echo $usuarios[$i]['id_usuario']; ?>" > Modificar </a> </td>
  <td> <a href="eliminar.php?id=<?php echo $usuarios[$i]['id_usuario']; ?>" > Eliminar </a> </td>
</tr>
<?php
}
?>
</table>


    
</body>
</html>