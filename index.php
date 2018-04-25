<?php session_start();
include("./services/Auth.php");
$objetoAuth = new Auth($_SESSION);
 ?>
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
 <div>  
 <h1 class="text-primary"> Inicio de Sesion </h1>
 </div>


</ul>
<form method="POST" action="login.php">
<div class="mx-auto" style="width: 200px;">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-white bg-dark">EMAIL ADDRESS</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-white bg-dark">PASSWORD</label>
    <input type="password" name ="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Enviar</button>
</form>

</body>

</html>