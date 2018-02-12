<?php
    /* Empezamos la sesión */
    session_start();
 
    /* Creamos la sesión */
    $_SESSION['usuario'] = $_POST['usuario'];
 
    /* Si no hay una sesión creada, redireccionar al index. */
    if(empty($_SESSION['usuario'])) { // Recuerda usar corchetes.
        header('Location: mensaje_enviado.php');
    } // Recuerda usar corchetes

    include("conexion.php");

mysqli_query($datos_conexion, "INSERT INTO formulario VALUES (0,'$usuario', '$password' )");

header("Location: mensaje_enviado.php");

$usuario=$_POST['usuario'];
$password=$_POST['password'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
            <title>Creamos y mostramos la sesión</title>
    </head>
 
    <body>
        <div class="c1">
            <h2>Mostramos los datos guardados</h2>
 
            <section>
                <p>
                    Tu nombre de usuario es <?=$_SESSION['usuario'];?>
                </p>
            </section>
        </div>
 
        <div class="c2">
            <section>
                <p>
                    <a href="./index.php">Eliminar sesión</a> <!-- de esta forma se crea la nueva session, sin necesidad de crear otro script en php. -->
                </p>
            </section>
        </div>
    </body>
</html>
