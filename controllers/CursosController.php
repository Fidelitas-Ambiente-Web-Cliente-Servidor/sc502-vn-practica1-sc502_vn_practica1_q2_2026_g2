<?php

require_once __DIR__ . "/../models/CursoModel.php";

class CursosController
{
    private $cursoModel;

    public function __construct()
    {
        $this->cursoModel = new CursoModel();
    }

    public function index()
    {
        if (
            isset($_GET["categoria"]) &&
            $_GET["categoria"] != "Todos"
        ) {

            $cursos = $this->cursoModel->getByCategory($_GET["categoria"]);

        } else {

            $cursos = $this->cursoModel->getAll();

        }

        require_once __DIR__ . "/../views/cursos.php";
    }
}