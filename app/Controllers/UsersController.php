<?php 

namespace App\Controllers;

use app\Models\User;
use app\Helpers\Crypt;

class UsersController {

    protected $user;
    protected $crypt;
 
    function __construct($config) {
        $this->user = new User($config['mysql']);
        $this->crypt = new Crypt();
    }

    public function list() {

        $usuarios = $this->user->listar();

        include dirname(__FILE__).'/../views/users/index.php';
    }


    public function modificar() {

        $id = $_GET['id'];

        $usuario = $this->user->get($id);

        include dirname(__FILE__).'/../views/users/edit.php';
    }

    public function editar() {

        $id = $_GET['id'];
        $data = [
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'pass' => $this->crypt->encrypt($_POST['pass'])
          ];

        $resultado = $this->user->update($id, $data);

        if ($resultado === false) {
            echo "Actualizacion fallida";
        }else{
            header("Location: routes.php?controller=UsersController&action=list");
        } 
    }

}