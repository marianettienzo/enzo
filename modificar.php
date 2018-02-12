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

$sql="SELECT * FROM usuarios";
$result=mysqli_query($conexion,$sql);

$mostrar=mysqli_fetch_array($result);


  ?>
<form action="modificar_progreso.php?id=" method="POST">
<ul id="formulario">
<li> Nombre: <input type="text" name="nombre2" required class="form-control" style="width : 250px; heigth : 0.5px"   placeholder="Nombre" </li>
<li> Email <input type="email" name="email2" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Email" </li>
<li> Password  <input type="password" name="pass2" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Password" </li>
 
<input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar" </li>

</ul>
</form>



   
</body>

</html>