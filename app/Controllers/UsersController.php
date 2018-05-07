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


    public function obtener() {

        $id = $_GET['id'];

        $usuario = $this->user->get($id);

        include dirname(__FILE__).'/../views/users/edit.php';
    }

    public function modificar() {

        $id = $_GET['id'];

        $resultado = $this->user->update($id, $data);

        include dirname(__FILE__).'/../planes/tablaplanes.php';

    }


    public function eliminar() {

        $id = $_GET['id'];

        $resultado = $usuarioDB->delete($id);
        
        include dirname(__FILE__).'/../planes/tablaplanes.php';

    }

    public function guardar() {
       
          $resultado = $usuarioDB->save($data);
        
          include dirname(__FILE__).'/../planes/tablaplanes.php';
            
    } 

}