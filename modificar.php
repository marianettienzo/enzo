<?php
include("conexion.php");
?>

<html>
<head>
<title> Modificar </title>
<meta charser="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="formulario.php">Formulario</a>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="tabla.php">Tabla</a>
     </li>
   </ul>
 </div>
</nav>





</head>
<body>

<?php
include("modelos/usuario.php");
$config = include('config.php');
$usuarioDB = new Usuario($config['mysql']);

$id = $_GET['id'];
$usuario = $usuarioDB->get($id);

if ($usuario === false) {
  echo "Actualizacion fallida";
}else{
 header ("Location tabla.php");
}

if(!empty($usuario)) {

  

  ?>
<form action="modificar_progreso.php?id=<?php echo $usuario['id_usuario']?>" method="POST">
<ul id="formu">
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