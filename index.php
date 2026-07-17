<?php

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerClass = ucfirst($controllerName) . 'Controller';
$controllerFile = __DIR__ . '/controllers/' . $controllerClass . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            echo 'Acción no encontrada';
        }
    } else {
        echo 'Controlador no encontrado';
    }
} else {
    echo 'Archivo de controlador no encontrado';
}