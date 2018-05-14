<?php 

namespace App\Controllers;

use app\Models\Marca;

class MarcaController {

   protected $marca;

   public function __construct($config) {
     
        $this->marca = new Marca($config['mysql']);
   }

   public function list() {

        $marca = $this->marca->listar();

        include dirname(__FILE__).'/../views/marca/index.php';
    }

    public function formularioNuevo() {      
        include dirname(__FILE__).'/../views/marca/save.php';
    } 

    public function guardar() {

        $data = [
            'nombre' => $_POST['nombre']
        ];
    
        $resultado = $this->marca->save($data);      
        header('Location: index.php?controller=MarcaController&action=list');
    } 

    public function formularioEditar() {

        $id = $_GET['id'];

        $marca1 = $this->marca->get($id);

        include dirname(__FILE__).'/../views/marca/edit.php';
    }

    public function modificar() {

        $id = $_GET['id'];
        $data = [

            'nombre' => $_POST['nombre']

        ];

        $resultado = $this->marca->update($id, $data);
        header('Location: index.php?controller=MarcaController&action=list');
    }

    public function eliminar() {   
            
        $id = $_GET['id'];

        $resultado = $this->marca->delete($id);        
        header('Location: index.php?controller=MarcaController&action=list');
    }


}