<?php 
session_start();
print_r($_SESSION);
if(!isset($_SESSION['usuario'])) {
    //header("Location: index.php");
}

?>

<html>

<head>
<title> Prueba </title>

<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<?php echo 'Bienvenido'.$_SESSION['usuario']; ?>
<?php echo '<br><a href="salir.php?action=logout">Logout</a>'; ?>
<h1> Usted ha sido registrado con éxito! </h1>
<input type="button" class="btn btn-primary" onclick="location.href='index.php';" value="Inicio"  />


   
</body>

</html>