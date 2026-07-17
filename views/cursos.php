<?php require_once __DIR__ . "/layout/header.php"; ?>

<main>

<section class="encabezadoCursos">

    <div class="contenedor">

        <h1>Catálogo de Cursos</h1>

        <p>
            Explore nuestra oferta académica y descubra cursos
            diseñados para fortalecer sus conocimientos tecnológicos.
        </p>

    </div>

</section>

<section class="busquedaCursos">

    <div class="contenedor">

        <form method="GET" action="/index.php">

            <input type="hidden" name="controller" value="Cursos">
            <input type="hidden" name="action" value="index">

            <select name="categoria" onchange="this.form.submit()">

                <option value="Todos">Todas las categorías</option>

                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Programación">Programación</option>
                <option value="Base de Datos">Base de Datos</option>

            </select>

        </form>

    </div>

</section>

<section class="categoriaCursos">

    <div class="contenedor">

        <h2>Cursos Disponibles</h2>

        <div class="filaCursos">

            <?php foreach ($cursos as $curso): ?>

                <div class="cardCurso">

                    <img src="/Imagenes/<?php echo