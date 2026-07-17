<?php
$paginaActiva = "index";
require_once __DIR__ . "/layout/header.php";
?>

<main>
    <section class="encabezadoIndex">
        <div class="contenedor">
            <img src="./Imagenes/logo-techcore.png"
                 alt="Logo TechCore Academy"
                 class="logoHero">

            <h1>Bienvenido a TechCore Academy</h1>
            <p class="slogan">
                “Impulsando tu futuro desde el núcleo de la tecnología.”
            </p>
        </div>
    </section>

    <section class="bienvenidaAccion">
        <div class="contenedorBoton">
            <span class="fraseCursos">
                Comienza tu camino hoy mismo
            </span>

            <a class="boton" href="index.php?controller=cursos&action=index">
                Ver Cursos
            </a>
        </div>
    </section>

    <section class="cursos contenedor">
        <h2>Cursos Destacados</h2>

        <div class="contenedorTarjetas">
            <?php foreach ($cursos as $curso): ?>
                <div class="tarjeta">
                    <img src="./Imagenes/<?php echo htmlspecialchars($curso["imagen"]); ?>"
                         alt="Curso <?php echo htmlspecialchars($curso["nombre"]); ?>">

                    <h3><?php echo htmlspecialchars($curso["nombre"]); ?></h3>

                    <p><?php echo htmlspecialchars($curso["descripcion"]); ?></p>

                    <p>
                        <strong><?php echo htmlspecialchars($curso["categoria"]); ?></strong>
                    </p>

                    <a class="boton2" href="index.php?controller=cursos&action=index">
                        Ver más
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="estadisticas contenedor">
        <div class="estadistica">
            <h3>+500</h3>
            <p>Estudiantes activos</p>
        </div>

        <div class="estadistica">
            <h3>+5</h3>
            <p>Cursos disponibles</p>
        </div>

        <div class="estadistica">
            <h3>+10</h3>
            <p>Profesores expertos</p>
        </div>
    </section>

    <section class="testimonios contenedor">
        <h2>Testimonios</h2>

        <div class="contenedorTestimonios">
            <div class="caja-testimonio">
                <p>"Excelente academia, aprendí muchísimo."</p>
                <h4>- Ana López</h4>
            </div>

            <div class="caja-testimonio">
                <p>"Los profesores explican muy bien."</p>
                <h4>- Carlos Pérez</h4>
            </div>

            <div class="caja-testimonio">
                <p>"Los cursos son claros, prácticos y fáciles de seguir."</p>
                <h4>- María Rodríguez</h4>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . "/layout/footer.php"; ?>