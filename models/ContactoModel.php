<?php

require_once __DIR__ . "/../config/database.php";

class ContactoModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($datos) {
        $sql = "INSERT INTO contacto 
                (nombre_completo, correo, telefono, asunto, mensaje)
                VALUES 
                (:nombre_completo, :correo, :telefono, :asunto, :mensaje)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([


    
            ":nombre_completo" => $datos["nombre_completo"],
            ":correo" => $datos["correo"],
            ":telefono" => $datos["telefono"],
            ":asunto" => $datos["asunto"],
            ":mensaje" => $datos["mensaje"]
        ]);
    }
}