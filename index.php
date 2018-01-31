<html>
<?php
    session_start(); 
    if(isset($_POST['login'])) {
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $resultado = mysqli_query($datos_conexion, 'SELECT * FROM login WHERE usuario="'.$usuario.'" and password="'.$password.'"');
    if(mysqli_num_rows($resultado)==1) {
        $_SESSION['usuario'] = $usuario;
        header("Location: mensaje_enviado.php");
    }
    else
    echo 'Cuenta invalida, vuelve a intentarlo';
    


    }
    if(isset($_GET['logout'])) {
        session_unregister('usuario');
    }
?>
<head>
<title> Prueba </title>
<meta charser="utf-8">
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>
<h1> Inicio de Sesión  </h1>
</ul>
    <div id="formulario">
<form method="POST">
<ul>
<li> Usuario: <input type="text" name="usuario" required</li>
<li> Contraseña:  <input type="password" name="password" required </li>
 
<li>  <input type="submit"  name="login" value="Enviar" </li>

</ul>
</form>

</body>

</html>