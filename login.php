<?php
session_start(); 
$config = include('config.php');
include('crypt.php');
$encrypt = new Crypt();

 
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email)) {


    $stmt = $config['mysql']->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email); 
    $stmt->execute();
    $res = $stmt->get_result();
    $result = $res->fetch_assoc();

    $resultado = $encrypt->verify($password, $result['pass']);


    
    if($resultado) {
        $_SESSION['usuario'] = $result;
        header("Location: mensaje_enviado.php");
    }   
        else {
            header("Location: index.php");
        
    }

}


