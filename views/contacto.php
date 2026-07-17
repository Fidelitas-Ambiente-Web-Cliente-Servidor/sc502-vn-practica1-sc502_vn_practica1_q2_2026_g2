<?php
$paginaActiva = "contacto";
require_once __DIR__ . "/layout/header.php";
?>

<?php require_once __DIR__ . "/layout/header.php"; ?>

<main>
    <section class="encabezadoContacto">
        <div class="contenedor">
            <h1>Contacto</h1>
            <p>
                Comuníquese con TechCore Academy para solicitar información
                sobre cursos, profesores y servicios académicos.
            </p>
        </div>
    </section>

    <section class="seccionContacto">
        <div class="contenedor">
            <div class="filaContacto">
                <div class="columnaFormulario">
                    <div class="tarjetaContacto">
                        <h2>Formulario de contacto</h2>

                        <?php if ($mensajeExito): ?>
                            <p class="mensajeServidor exitoServidor">
                                El mensaje fue enviado correctamente.
                            </p>
                        <?php endif; ?>

                        <?php if ($mensajeError): ?>
                            <p class="mensajeServidor errorServidor">
                                Revise los datos ingresados e intente nuevamente.
                            </p>
                        <?php endif; ?>

                        <form id="formularioContacto" action="index.php?controller=contacto&action=store" method="POST">
                            <div class="grupoFormulario">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" id="nombre" name="nombre_completo">
                                <p class="mensajeError" id="errorNombre"></p>
                            </div>

                            <div class="grupoFormulario">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" id="correo" name="correo">
                                <p class="mensajeError" id="errorCorreo"></p>
                            </div>

                            <div class="grupoFormulario">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono">
                                <p class="mensajeError" id="errorTelefono"></p>
                            </div>

                            <div class="grupoFormulario">
                                <label for="asunto">Asunto</label>
                                <input type="text" id="asunto" name="asunto">
                                <p class="mensajeError" id="errorAsunto"></p>
                            </div>

                            <div class="grupoFormulario">
                                <label for="mensaje">Mensaje</label>
                                <textarea id="mensaje" name="mensaje" rows="5"></textarea>
                                <p class="mensajeError" id="errorMensaje"></p>
                            </div>

                            <button type="submit" class="botonEnviar" id="botonEnviar" disabled>
                                Enviar
                            </button>

                            <p class="mensajeExito" id="mensajeExito"></p>
                        </form>
                    </div>
                </div>

                <div class="columnaInfo">
                    <div class="tarjetaInfo">
                        <h2>Información de contacto</h2>

                        <p>
                            <strong>Dirección:</strong><br>
                            Avenida Central, San José, Costa Rica
                        </p>

                        <p>
                            <strong>Teléfono:</strong><br>
                            +506 2200-0000
                        </p>

                        <p>
                            <strong>Correo electrónico:</strong><br>
                            contacto@techcoreacademy.com
                        </p>

                        <p>
                            <strong>Horario de atención:</strong><br>
                            Lunes a viernes de 8:00 a.m. a 6:00 p.m.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seccionMapa">
        <div class="contenedor">
            <h2>Ubicación</h2>

            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps?q=San%20Jose%20Costa%20Rica&output=embed"
                    width="100%"
                    height="350">
                </iframe>
            </div>
        </div>
    </section>
</main>


<?php
$scriptPagina = "contacto.js";
require_once __DIR__ . "/layout/footer.php";
?>
