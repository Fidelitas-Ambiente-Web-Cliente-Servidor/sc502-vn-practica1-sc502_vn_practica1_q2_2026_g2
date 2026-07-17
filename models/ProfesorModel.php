<?php

require_once __DIR__ . "/../config/database.php";

class ProfesorModel
{
    private $conexion;

    public function __construct()
    {
        $database = new Database();
        $this->conexion = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM profesores";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM profesores WHERE id = ?";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([$id]);

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}