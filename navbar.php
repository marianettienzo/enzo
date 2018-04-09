
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">

 <?php if (!isset($_SESSION['usuario'])) { ?>
    <li class="nav-item active">
       <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
     </li>
<?php } ?>
   
<?php if ($_SESSION['usuario']) { ?>
    <li class="nav-item">
       <a class="nav-link" href="formulario.php">Formulario</a>
     </li>
<?php } ?>
<?php if ($_SESSION['usuario']) { ?>
    <li class="nav-item">
       <a class="nav-link disabled" href="tabla.php">Tabla</a>
     </li>
<?php } ?>
<?php if ($_SESSION['usuario']) { ?>
    <li class="nav-item">
       <a class="nav-link" href="salir.php">Logout</a>
     </li>
<?php } ?>     
   </ul>
 </div>
</nav>


