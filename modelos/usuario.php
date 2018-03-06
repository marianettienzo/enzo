<?php
class Usuario {
    
    private $mysql;

    public function  __construct($mysql) {
        $this->mysql = $mysql;
     } 

    public function listar() {

        $stmt = $this->mysql->prepare("SELECT * FROM usuarios");
        $stmt->execute();        
        $res = $stmt->get_result();

        $usuarios = []; // array()

        while($row = $res->fetch_assoc()){
            array_push($usuarios,$row);
        }        
      
        $stmt->close();
        return $usuarios;
    }
    /** OBTENER UN USUARIO POR SU ID */
     public function get($id) {
        $stmt = $this->mysql->prepare("SELECT * FROM usuarios WHERE id_usuario = ? LIMIT 1");
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $res = $stmt->get_result();
        $usuario = $res->fetch_assoc();

        /* close statement */
        $stmt->close();
        return $usuario;      
    }
    
    /** ACTUALIZAR UN USUARIO POR SU ID */
    public function update($id, $data) {
        $stmt = $this->mysql->prepare("UPDATE usuarios SET nombre = ?, email = ?, pass = ? WHERE id_usuario = ?");
        $stmt->bind_param("sssi", $data['nombre'], $data['email'], $data['pass'], $id);

        $result = $stmt->execute();
        /* close statement */
        $stmt->close();

        return $result;
    }
    /** GUARDAR UN NUEVO USUARIO */
    public function save($data) {
        $stmt = $this->mysql->prepare("INSERT INTO usuarios (id_usuario, nombre, email, pass) VALUES (NULL , ?, ?, ?)");
        $stmt->bind_param("sss", $data['nombre'], $data['email'], $data['pass']);
        $result = $stmt->execute();
        /* close statement */
        $stmt->close();
        
        return $result;
      
    }
    /** ELIMINAR UN USUARIO POR SU ID */
    public function delete($id) {
        $stmt = $this->mysql->prepare("DELETE FROM usuarios WHERE id_usuario = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        /* close statement */
        $stmt->close();
        
        return $result;
    }
    
}