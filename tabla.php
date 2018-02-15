<?php
include("modelos/usuario.php");
$config = include('config.php');

$usuarioDB = new Usuario($config['mysql']);

?>

<!DOCTYPE html>
<html>
<head>
<a href="index.php">Volver</a>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body>

<br>

<table id="table" border="1">
<tr>  
<td>   Id_usuario </td>  
<td>   Nombre      </td>
<td>   Email      </td>
<td>   Password   </td>
<td colspan="2">   Operaciones </td>


</tr>
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