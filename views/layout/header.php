<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TechCore Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/cursos.css">
        <link rel="stylesheet" href="css/profesores.css">
        <link rel="stylesheet" href="css/contacto.css">
    </head>

    <body>
        <header>
            <nav class="menuPrincipal">
                <div class="contenedorMenu">
                    <a href="index.php?controller=index&action=index" class="logoAcademia">
                        TechCore Academy
                    </a>

                    <ul class="listaMenu">
                        <li>
                            <a href="index.php?controller=index&action=index"
                               class="<?php echo ($paginaActiva ?? '') === 'index' ? 'activo' : ''; ?>">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="index.php?controller=cursos&action=index"
                               class="<?php echo ($paginaActiva ?? '') === 'cursos' ? 'activo' : ''; ?>">
                                Cursos
                            </a>
                        </li>

                        <li>
                            <a href="index.php?controller=profesores&action=index"
                               class="<?php echo ($paginaActiva ?? '') === 'profesores' ? 'activo' : ''; ?>">
                                Profesores
                            </a>
                        </li>

                        <li>
                            <a href="index.php?controller=contacto&action=index"
                               class="<?php echo ($paginaActiva ?? '') === 'contacto' ? 'activo' : ''; ?>">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>