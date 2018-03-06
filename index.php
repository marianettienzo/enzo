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

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="formulario.php">Formulario</a>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="tabla.php">Tabla</a>
     </li>
   </ul>
 </div>
</nav>
<h1> Inicio de Sesión  </h1>
</ul>
    <div id="formulario">

    <form method="POST" action="/login.php">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email"  placeholder="E-mail" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>  
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>

</html>