<?php 
session_start();
include("./services/Auth.php");
$objetoAuth = new Auth($_SESSION);

if(!$objetoAuth->isLoggedIn()) { 
    header("Location: index.php");
}

?>

