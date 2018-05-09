<?php 

namespace App\Controllers;

use app\Models\Planes;

class PlanesController {

   protected $planes;

   public function __construct($config) {
     
        $this->planes = new Planes($config['mysql']);
   }

   public function list() {

        $planes = $this->planes->listar();

        include dirname(__FILE__).'/../views/planes/index.php';
    }

    public function formularioNuevo() {      
        include dirname(__FILE__).'/../views/planes/save.php';
    } 

    public function guardar() {

        $data = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio']
        ];
    
        $resultado = $this->planes->save($data);      
        header('Location: index.php?controller=PlanesController&action=list');
    } 

    public function formularioEditar() {

        $id = $_GET['id'];

        $plan = $this->planes->get($id);

        include dirname(__FILE__).'/../views/planes/edit.php';
    }

    public function modificar() {

        $id = $_GET['id'];
        $data = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio']
        ];

        $resultado = $this->planes->update($id, $data);
        header('Location: index.php?controller=PlanesController&action=list');
    }

    public function eliminar() {   
            
        $id = $_GET['id'];

        $resultado = $this->planes->delete($id);        
        header('Location: index.php?controller=PlanesController&action=list');
    }


}


