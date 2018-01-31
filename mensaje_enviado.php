<html>
<?php
session_start();
echo 'Bienvenido'.$_SESSION['usuario'];
echo '<br><a href="index.php?action=logout">Logout</a>';
?>
<head>
<title> Prueba </title>

<meta charser="utf-8">
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>
<h1> Usted ha sido registrado con éxito! </h1>
<ul>
<li> <a href="index.php"> Inicio </a> </li>


   
</body>

</html>