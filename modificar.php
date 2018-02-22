<?php
include("conexion.php");
?>

<html>
<head>
<title> Modificar </title>
<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<a href="tabla.php">Volver</a>
<h1>  </h1>

<?php
include("modelos/usuario.php");
$config = include('config.php');
$usuarioDB = new Usuario($config['mysql']);

$id = $_GET['id'];
$data = [
  'nombre' => $_POST['nombre'],
  'email' => $_POST['email'],
  'pass' => $_POST['pass']
];

$resultado = $usuarioDB->get($id);

if ($resultado === false) {
  echo "Actualizacion fallida";
}else{
  header("Location: tabla.php");
}   


if(!empty($usuario)) {

  ?>
<form action="modificar_progreso.php?id=<?php echo $usuario['id_usuario']?>" method="POST">
<ul id="formulario">
<li> Nombre: <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $usuario['nombre']?>"> </li>
<li> Email <input type="email" name="email" required class="form-control" style="width : 250px; heigth : 0.5px" value="<?php echo $usuario['email']?>"> </li>
<li> Password  <input type="password" name="pass" required class="form-control" style="width : 250px; heigth : 0.5px"  value="<?php echo $usuario['pass']?>"> </li>
 
<input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar" </li>

</ul>
</form>

<?php 
  
} else {
?>

  <h1>USUARIO NO ENCONTRADO</h1>
<?php
}
?>
   
</body>

</html>