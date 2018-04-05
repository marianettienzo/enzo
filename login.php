<?php
session_start(); 
$config = include('config.php');
 
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password)) {


    $stmt = $config['mysql']->prepare("SELECT * FROM usuarios WHERE email = ? and pass = ? LIMIT 1");
    $stmt->bind_param("ss", $email, $password); 
    $stmt->execute();
    $res = $stmt->get_result();
    $result = $res->fetch_assoc();

    if($result) {
        $_SESSION['usuario'] = $result;
        header("Location: mensaje_enviado.php");
    }else{
        header("Location: index.php");
    }

}else{
    header("Location: index.php");
}


