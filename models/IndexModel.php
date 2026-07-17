<?php

require_once __DIR__ . "/../config/database.php";

class IndexModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT nombre, descripcion, imagen, categoria FROM cursos LIMIT 3";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}