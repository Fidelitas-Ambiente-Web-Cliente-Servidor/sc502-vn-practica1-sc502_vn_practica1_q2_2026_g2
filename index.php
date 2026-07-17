<?php

$controller = $_GET['controller'] ?? 'Index';
$action = $_GET['action'] ?? 'index';

$controllerName = $controller . "Controller";
$controllerFile = __DIR__ . "/controllers/" . $controllerName . ".php";

if (!file_exists($controllerFile)) {
    die("Controlador no encontrado.");
}

require_once $controllerFile;

if (!class_exists($controllerName)) {
    die("La clase del controlador no existe.");
}

$controllerObject = new $controllerName();

if (!method_exists($controllerObject, $action)) {
    die("La acción solicitada no existe.");
}

$controllerObject->$action();