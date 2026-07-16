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
        $profesores = $this->modelo->obtenerProfesores();

        require_once __DIR__ . "/../views/profesores.php";
    }

    public function mostrar($id)
    {
        $profesor = $this->modelo->obtenerProfesor($id);

        require_once __DIR__ . "/../views/profesor.php";
    }
}