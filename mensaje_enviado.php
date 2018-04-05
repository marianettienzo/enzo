<?php include("sesioncheck.php"); ?>

<html>

<head>
<title> Prueba </title>

<meta charser="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="style.css" type="text/css"> 
<link rel="stylesheet" href="estilo/style.css" type="text/css"> 
</head>
<body id="body">
<?php include("navbar.php");  ?>
<p> Bienvenido! <?php echo $_SESSION['usuario']['email']; ?></p>
<p> Usted ha sido registrado con éxito! </p>
   
</body>

</html>