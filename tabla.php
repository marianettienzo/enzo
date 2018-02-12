<?php
 $conexion = mysqli_connect("localhost", "root", "", "formulario");

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
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){




?>
<tr>
<td> <?php echo $mostrar['id_usuario'] ?> </td>
<td> <?php echo $mostrar['nombre'] ?> </td>
<td> <?php echo $mostrar['email'] ?> </td>
<td> <?php echo $mostrar['pass'] ?> </td>
<td> <a href="modificar.php?id<?php echo $mostrar['id_usuario']; ?>" > Modificar </a> </td>
<td> <a href="eliminar.php?id<?php echo $mostrar['id_usuario']; ?>" > Eliminar </a> </td>


</tr>
<?php
}
?>
</table>


    
</body>
</html>