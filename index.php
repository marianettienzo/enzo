<?php
require_once('./app/autoload.php');

$config = include('config.php');

$controller = $_GET['controller'];
$action = $_GET['action'];

if(!$controller) {
    $controller = "UsersController";
}

if(!$action) {
    $action = "list";
}

$class = "app\\Controllers\\".$controller;

$instancia = new $class($config);
$instancia->$action();

?>
