<html>
<head>
<title> Prueba </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charser="utf-8">
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<a href="index.php">Volver</a>
<h1>  </h1>
<form action="registro.php" method="POST">
<ul id="formulario">
<li> Nombre: <input type="text" name="nombre" required class="form-control" style="width : 250px; heigth : 0.5px"   placeholder="Nombre" </li>
<li> Email <input type="email" name="email" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Email" </li>
<li> Password  <input type="password" name="pass" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Password" </li>
 
<input id="boton" type="submit"  class="btn btn-primary" name="enviar" value="Guardar" </li>

</ul>
</form>



   
</body>

</html>