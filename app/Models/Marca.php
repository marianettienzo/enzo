<?php

namespace App\Models;

class Marca {
 
    private $mysql;
    
    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    public function listar() {
        $listar ="SELECT * FROM marca";

        $stmt = $this->mysql->prepare($listar);
        $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }          
        $res = $stmt->get_result();

        $marca = []; // array()

        while($row = $res->fetch_assoc()){
            array_push($marca,$row);
        } 
        $stmt->close();
        return $marca;

    }

    public function get($id) {
        $stmt = $this->mysql->prepare("SELECT * FROM marca WHERE id = ? LIMIT 1");
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
        $stmt = $this->mysql->prepare("UPDATE marca SET nombre = ? WHERE id = ?");
        $stmt->bind_param("si", $data['nombre'], $id);
        return $stmt->execute();
    }
    /** GUARDAR UN NUEVO USUARIO */
    public function save($data) {
        $stmt = $this->mysql->prepare("INSERT INTO marca (id, nombre) VALUES (NULL ,?)");
        $stmt->bind_param("s", $data['nombre']);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
      
    }
    /** ELIMINAR UN USUARIO POR SU ID */
    public function delete($id) {
        $stmt = $this->mysql->prepare("DELETE FROM marca WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
    }
    


}
