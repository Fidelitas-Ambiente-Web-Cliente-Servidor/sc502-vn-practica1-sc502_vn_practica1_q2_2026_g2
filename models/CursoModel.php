<?php

require_once __DIR__ . "/../config/database.php";

class CursoModel
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    // Obtener todos los cursos
    public function getAll()
    {
        $sql = "SELECT * FROM cursos";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener cursos por categoría
    public function getByCategory($categoria)
    {
        $sql = "SELECT * FROM cursos WHERE categoria = :categoria";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            ":categoria" => $categoria
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}