<?php

require_once __DIR__ . "/../models/ContactoModel.php";

class ContactoController {
    private $model;

    public function __construct() {
        $this->model = new ContactoModel();
    }

    public function index() {
        $mensajeExito = $_GET["success"] ?? null;
        $mensajeError = $_GET["error"] ?? null;

        require_once __DIR__ . "/../views/contacto.php";
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: index.php?controller=contacto&action=index");
            exit;
        }

        $datos = [
            "nombre_completo" => trim($_POST["nombre_completo"] ?? ""),
            "correo" => trim($_POST["correo"] ?? ""),
            "telefono" => trim($_POST["telefono"] ?? ""),
            "asunto" => trim($_POST["asunto"] ?? ""),
            "mensaje" => trim($_POST["mensaje"] ?? "")
        ];

        if (!$this->validarDatos($datos)) {
            header("Location: index.php?controller=contacto&action=index&error=1");
            exit;
        }

        $resultado = $this->model->create($datos);

        if ($resultado) {
            header("Location: index.php?controller=contacto&action=index&success=1");
            exit;
        }

        header("Location: index.php?controller=contacto&action=index&error=1");
        exit;
    }

    private function validarDatos($datos) {
        if (strlen($datos["nombre_completo"]) < 5) {
            return false;
        }

        if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/", $datos["nombre_completo"])) {
            return false;
        }

        if (!filter_var($datos["correo"], FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (!preg_match("/^[0-9]{8,}$/", $datos["telefono"])) {
            return false;
        }

        if (strlen($datos["asunto"]) < 3) {
            return false;
        }

        if (strlen($datos["mensaje"]) < 20) {
            return false;
        }

        return true;
    }
}