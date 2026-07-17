<!DOCTYPE html>
<html lang="es">

<head>
    <title>Profesores - TechCore Academy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos generales -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Estilos de la página -->
    <link rel="stylesheet" href="../css/profesores.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Menú principal -->
    <header>
        <nav class="menuPrincipal">
            <div class="contenedorMenu">

                <a href="../index.php" class="logoAcademia">
                    TechCore Academy
                </a>

                <ul class="listaMenu">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../cursos.html">Cursos</a></li>
                    <li><a href="../index.php" class="activo">Profesores</a></li>
                    <li><a href="../contacto.html">Contacto</a></li>
                </ul>

            </div>
        </nav>
    </header>

    <main>

        <!-- Encabezado -->
        <section class="encabezadoProfesores">
            <div class="contenedor">

                <h1>Nuestro Equipo Docente</h1>

                <p>
                    Conozca a los profesionales que forman parte de TechCore Academy
                    y acompañan el crecimiento académico de nuestros estudiantes.
                </p>

            </div>
        </section>

        <!-- Profesores -->
        <section class="seccionProfesores">

            <div class="contenedor">

                <div class="gridProfesores">

                    <?php foreach ($profesores as $profesor): ?>

                        <div class="tarjetaProfesor">

                            <img
                                src="../Imagenes/<?php echo htmlspecialchars($profesor['foto']); ?>"
                                alt="<?php echo htmlspecialchars($profesor['nombre']); ?>">

                            <h2>
                                <?php echo htmlspecialchars($profesor['nombre']); ?>
                            </h2>

                            <h3>
                                <?php echo htmlspecialchars($profesor['especialidad']); ?>
                            </h3>

                            <p>
                                <?php echo htmlspecialchars($profesor['descripcion']); ?>
                            </p>

                            <a class="btn btn-primary"
                               href="../index.php?controller=Profesores&action=show&id=<?php echo $profesor['id']; ?>">
                                Ver perfil
                            </a>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>

        <!-- Misión y Visión -->
        <section class="seccionMisionVision">

            <div class="contenedor">

                <div class="contenedorMisionVision">

                    <div class="tarjetaMision">

                        <h2>Misión</h2>

                        <p>
                            Formar profesionales altamente capacitados mediante una
                            educación innovadora, práctica y orientada a las necesidades
                            actuales del mercado laboral.
                        </p>

                    </div>

                    <div class="tarjetaVision">

                        <h2>Visión</h2>

                        <p>
                            Ser una academia líder en educación tecnológica,
                            reconocida por la excelencia académica, la innovación
                            y el compromiso con el desarrollo integral de sus estudiantes.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="footerAcademia">

        <div class="contenedor">

            <p class="nombreFooter">
                TechCore Academy
            </p>

            <p>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">LinkedIn</a>
            </p>

            <p>
                © 2026 TechCore Academy. Todos los derechos reservados.
            </p>

        </div>

    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>