<?php

require_once __DIR__ . "/../models/IndexModel.php";

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