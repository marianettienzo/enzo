<html>
<?php 
session_start();
if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}





echo 'Bienvenido'.$_SESSION['usuario'];
echo '<br><a href="salir.php?action=logout">Logout</a>';



?>
<head>
<title> Prueba </title>

<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<h1> Usted ha sido registrado con éxito! </h1>
<input type="button" class="btn btn-primary" onclick="location.href='index.php';" value="Inicio"  />


   
</body>

</html>