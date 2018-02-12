<html>
<?php
    session_start(); 
    if(isset($_POST['login'])) {
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $resultado = mysqli_query($datos_conexion, 'SELECT * FROM login WHERE usuario="'.$usuario.'" and password="'.$password.'"');
    }

    if(mysqli_num_rows($resultado)==1) {
        $_SESSION['usuario'] = $usuario;
        header("Location: mensaje_enviado.php");
    }
    
 
    
    
  
  
?>
<head>
<title> Prueba </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
<a href="formulario.php">Formulario</a>
<a href="tabla.php">Datos de Usuario</a>
</head>
<body>
<h1> Inicio de Sesión  </h1>
</ul>
    <div id="formulario">
<form method="POST">
<ul id="formu">
<li> Usuario: <input type="text" name="usuario" required class="form-control" style="width : 250px; heigth : 0.5px"   placeholder="Nombre" </li>
<li> Password  <input type="password" name="password" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Password" </li>
 
<input id="boton" type="submit"  class="btn btn-primary" name="login" value="Enviar" </li>

</ul>
</form>
</div>

</body>

</html>