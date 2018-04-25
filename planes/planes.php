<?php
class Planes {
    
    private $mysql;

    public function  __construct($mysql) {
        $this->mysql = $mysql;
     } 

    public function listar() {

        $stmt = $this->mysql->prepare("SELECT * FROM planes");
        $stmt->execute();        
        $res = $stmt->get_result();

        $usuarios = []; // array()

        while($row = $res->fetch_assoc()){
            array_push($usuarios,$row);
        }
        
        return $usuarios;
    }
    /** OBTENER UN USUARIO POR SU ID */
     public function get($id) {
        $stmt = $this->mysql->prepare("SELECT * FROM planes WHERE plan_id = ? LIMIT 1");
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $res = $stmt->get_result();
        $usuario = $res->fetch_assoc();
        return $usuario;      
    }
    
    /** ACTUALIZAR UN USUARIO POR SU ID */
    public function update($id, $data) {
        $stmt = $this->mysql->prepare("UPDATE planes SET nombre = ?,  descripcion = ? , precio = ? WHERE plan_id = ?");
        $stmt->bind_param("sssi", $data['nombre'], $data['descripcion'], $data['precio'], $id);
        return $stmt->execute();
    }
    /** GUARDAR UN NUEVO USUARIO */
    public function save($data) {
        $stmt = $this->mysql->prepare("INSERT INTO planes (plan_id, nombre, descripcion, precio) VALUES (NULL , ?, ?, ?)");
        $stmt->bind_param("sss", $data['nombre'], $data['descripcion'], $data['precio']);
        return $stmt->execute();
      
    }
    /** ELIMINAR UN USUARIO POR SU ID */
    public function delete($id) {
        $stmt = $this->mysql->prepare("DELETE FROM planes WHERE plan_id = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    
}