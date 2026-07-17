<?php

require_once __DIR__ . "/../models/IndexModel.php";
require_once __DIR__ . "/../config/database.php";

if (!class_exists('IndexModel')) {
    class IndexModel
    {
        public function getAll()
        {
            $database = new Database();
            $conexion = $database->connect();

            $sql = "SELECT nombre, descripcion, imagen, categoria FROM cursos LIMIT 3";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

class IndexController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new IndexModel();
    }

    public function index()
    {
        $cursos = $this->modelo->getAll();

        require_once __DIR__ . "/../views/index.php";
    }
}
