<?php

require_once __DIR__ . "/../models/ProfesorModel.php";

class ProfesoresController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new ProfesorModel();
    }

    public function index()
    {
        $profesores = $this->modelo->getAll();

        require_once __DIR__ . "/../views/profesores.php";
    }

    public function show()
    {
        if (!isset($_GET['id'])) {
            die("Profesor no encontrado.");
        }

        $id = $_GET['id'];

        $profesor = $this->modelo->getById($id);

        require_once __DIR__ . "/../views/profesor.php";
    }
}