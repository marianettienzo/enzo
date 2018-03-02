<html>

<?php
    session_start(); 
    if(isset($_POST['login'])) {
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $resultado = mysqli_query($db_connection, 'SELECT * FROM login WHERE usuario="'.$usuario.'" and password="'.$password.'"');
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"href='http://localhost/Sesion/style.css'  type="text/css"> 
<meta charser="utf-8">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
<input type="button"  class="btn btn-secondary" value="Formulario" style="position: fixed;"  onclick="window.location.href = 'formulario.php';">
<input type="button"   class="btn btn-secondary" value="Tabla" style="position: right;"  onclick="window.location.href = 'tabla.php';">
</nav>
<h1> Inicio de Sesión  </h1>
</ul>
    <div id="formulario">
<form method="POST">
<ul id="formu">
<li> Usuario: <input type="text" name="usuario" required class="form-control" style="width : 250px; heigth : 0.5px"   placeholder="Nombre" </li>
<li> Password  <input type="password" name="password" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Password" </li>
 
<input id="boton" type="submit"   class="btn btn-success"  </li>

</ul>
</form>
</div>

</body>

</html>