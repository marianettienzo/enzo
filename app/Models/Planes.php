<?php

namespace App\Models;

class Planes {
 
    private $mysql;
    
    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    public function listar() {
        $listar ="SELECT * FROM planes";

        $stmt = $this->mysql->prepare($listar);
        $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }          
        $res = $stmt->get_result();

        $planes = []; // array()

        while($row = $res->fetch_assoc()){
            array_push($planes,$row);
        } 
        $stmt->close();
        return $planes;

    }

    public function get($id) {
        $stmt = $this->mysql->prepare("SELECT * FROM planes WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }     
        $res = $stmt->get_result();
        $usuario = $res->fetch_assoc();

        $stmt->close();
        return $usuario;      
    }
    /** ACTUALIZAR UN USUARIO POR SU ID */
    public function update($id, $data) {
        $stmt = $this->mysql->prepare("UPDATE planes SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?");
        $stmt->bind_param("ssdi", $data['nombre'], $data['descripcion'], $data['precio'], $id);
        return $stmt->execute();
    }
    /** GUARDAR UN NUEVO USUARIO */
    public function save($data) {
        $stmt = $this->mysql->prepare("INSERT INTO planes (id, nombre, descripcion, precio) VALUES (NULL , ?, ?, ?)");
        $stmt->bind_param("ssd", $data['nombre'], $data['descripcion'], $data['precio']);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
      
    }
    /** ELIMINAR UN USUARIO POR SU ID */
    public function delete($id) {
        $stmt = $this->mysql->prepare("DELETE FROM planes WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
    }
    


}




