<?php 

namespace App\Controllers;

use app\Models\Autos;

class AutosController {

   protected $autos;

   public function __construct($config) {
     
        $this->autos = new Autos($config['mysql']);
   }

   public function list() {

        $autos = $this->autos->listar();

        include dirname(__FILE__).'/../views/autos/index.php';
    }

    public function formularioNuevo() {      
        include dirname(__FILE__).'/../views/autos/save.php';
    } 

    public function guardar() {

        $data = [
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'color' => $_POST['color'],
            'cantidad_de_puertas' => $_POST['cantidad_de_puertas'],
            'es_nuevo' => $_POST['es_nuevo']

        ];
    
        $resultado = $this->autos->save($data);      
        header('Location: index.php?controller=AutosController&action=list');
    } 

    public function formularioEditar() {

        $id = $_GET['id'];

        $auto = $this->autos->get($id);

        include dirname(__FILE__).'/../views/autos/edit.php';
    }

    public function modificar() {

        $id = $_GET['id'];
        $data = [
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'color' => $_POST['color'],
            'cantidad_de_puertas' => $_POST['cantidad_de_puertas'],
            'es_nuevo' => $_POST['es_nuevo']

        ];

        $resultado = $this->autos->update($id, $data);
        header('Location: index.php?controller=AutosController&action=list');
    }

    public function eliminar() {   
            
        $id = $_GET['id'];

        $resultado = $this->autos->delete($id);        
        header('Location: index.php?controller=AutosController&action=list');
    }


}
