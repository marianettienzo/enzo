<?php 
session_start();
require(dirname(__FILE__). "/services/Auth.php");
$objetoAuth = new Auth($_SESSION);

if(!$objetoAuth->isLoggedIn()) { 
    header("Location: index.php");
}

?>

