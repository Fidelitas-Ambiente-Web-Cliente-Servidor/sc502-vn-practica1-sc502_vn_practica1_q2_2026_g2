<?php
$paginaActiva = "profesores";
require_once __DIR__ . "/layout/header.php";
?>

<main>
    <section class="encabezadoProfesores">
        <div class="contenedor">
            <h1>Nuestro Equipo Docente</h1>

            <p>
                Conozca a los profesionales que forman parte de TechCore Academy
                y acompañan el crecimiento académico de nuestros estudiantes.
            </p>
        </div>
    </section>

    <section class="seccionProfesores">
        <div class="contenedor">
            <div class="gridProfesores">
                <?php foreach ($profesores as $profesor): ?>

                    <div class="tarjetaProfesor">
                        <img
                            src="Imagenes/<?php echo htmlspecialchars($profesor['foto']); ?>"
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
                           href="index.php?controller=profesores&action=show&id=<?php echo $profesor['id']; ?>">
                            Ver perfil
                        </a>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

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

<?php require_once __DIR__ . "/layout/footer.php"; ?>