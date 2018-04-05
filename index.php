<html>
<head>
<title> Prueba </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="style.css" type="text/css"> 
<meta charser="utf-8">
</head>
<body>
<?php include("navbar.php"); ?>

<h1> Inicio de Sesión  </h1>
</ul>
    <div id="formulario">
<form method="POST" action="login.php">
<ul id="formu">
<li> Email: <input type="text" name="email" required class="form-control" style="width : 250px; heigth : 0.5px"   placeholder="Email" </li>
<li> Password  <input type="password" name="password" required class="form-control" style="width : 250px; heigth : 0.5px"  placeholder="Password" </li>
 
<input id="boton" type="submit" name="login"  class="btn btn-success"  </li>

</ul>
</form>
</div>

</body>

</html>