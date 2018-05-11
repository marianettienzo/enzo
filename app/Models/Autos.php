<?php

namespace App\Models;

class Autos {
 
    private $mysql;
    
    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    public function listar() {
        $listar ="SELECT * FROM autos";

        $stmt = $this->mysql->prepare($listar);
        $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }          
        $res = $stmt->get_result();

        $autos = []; // array()

        while($row = $res->fetch_assoc()){
            array_push($autos,$row);
        } 
        $stmt->close();
        return $autos;

    }

    public function get($id) {
        $stmt = $this->mysql->prepare("SELECT * FROM autos WHERE id = ? LIMIT 1");
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
        $stmt = $this->mysql->prepare("UPDATE autos SET marca = ?, modelo = ?, nombre = ?, descripcion = ?, color = ?, cantidad_de_puertas = ?,  es_nuevo = ? WHERE id = ?");
        $stmt->bind_param("sssssisi", $data['marca'], $data['modelo'], $data['nombre'], $data['descripcion'], $data['color'],  $data['cantidad_de_puertas'],  $data['es_nuevo'], $id);
        return $stmt->execute();
    }
    /** GUARDAR UN NUEVO USUARIO */
    public function save($data) {
        $stmt = $this->mysql->prepare("INSERT INTO autos (id, marca, modelo, nombre, descripcion, color, cantidad_de_puertas, es_nuevo) VALUES (NULL , ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssis", $data['marca'], $data['modelo'],  $data['nombre'], $data['descripcion'], $data['color'],  $data['cantidad_de_puertas'],  $data['es_nuevo']);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
      
    }
    /** ELIMINAR UN USUARIO POR SU ID */
    public function delete($id) {
        $stmt = $this->mysql->prepare("DELETE FROM autos WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        if($stmt->error) {
            printf("Error: %s.\n", $stmt->error);        
        }       
        $stmt->close();
        return $result;
    }
    


}