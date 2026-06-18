const formulario = document.getElementById("formularioContacto");

const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");

const errorNombre = document.getElementById("errorNombre");
const errorCorreo = document.getElementById("errorCorreo");
const errorTelefono = document.getElementById("errorTelefono");
const errorAsunto = document.getElementById("errorAsunto");
const errorMensaje = document.getElementById("errorMensaje");

const botonEnviar = document.getElementById("botonEnviar");
const mensajeExito = document.getElementById("mensajeExito");

function mostrarError(campo, elementoError, textoError) {
    campo.classList.remove("campoCorrecto");
    campo.classList.add("campoIncorrecto");
    elementoError.textContent = textoError;
}

function limpiarError(campo, elementoError) {
    campo.classList.remove("campoIncorrecto");
    campo.classList.add("campoCorrecto");
    elementoError.textContent = "";
}

function validarNombre() {
    const valor = nombre.value.trim();
    const regexNombre = /^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/;

    if (valor.length < 5) {
        mostrarError(nombre, errorNombre, "El nombre debe tener mínimo 5 caracteres.");
        return false;
    }

    if (!regexNombre.test(valor)) {
        mostrarError(nombre, errorNombre, "El nombre solo puede contener letras y espacios.");
        return false;
    }

    limpiarError(nombre, errorNombre);
    return true;
    
}

function validarCorreo() {
    const valor = correo.value.trim();
    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexCorreo.test(valor)) {
        mostrarError(correo, errorCorreo, "Digite un correo electrónico válido.");
        return false;
    }

    limpiarError(correo, errorCorreo);
    return true;
}

function validarTelefono() {
    const valor = telefono.value.trim();
    const regexTelefono = /^[0-9]+$/;

    if (!regexTelefono.test(valor)) {
        mostrarError(telefono, errorTelefono, "El teléfono solo puede contener números.");
        return false;
    }

    if (valor.length < 8) {
        mostrarError(telefono, errorTelefono, "El teléfono debe tener mínimo 8 dígitos.");
        return false;
    }

    limpiarError(telefono, errorTelefono);
    return true;
}

function validarAsunto() {
    const valor = asunto.value.trim();

    if (valor.length < 3) {
        mostrarError(asunto, errorAsunto, "El asunto debe tener mínimo 3 caracteres.");
        return false;
    }

    limpiarError(asunto, errorAsunto);
    return true;
}

function validarMensaje() {
    const valor = mensaje.value.trim();

    if (valor.length < 20) {
        mostrarError(mensaje, errorMensaje, "El mensaje debe tener mínimo 20 caracteres.");
        return false;
    }

    limpiarError(mensaje, errorMensaje);
    return true;
}

function validarFormulario() {
    const nombreValido = validarNombre();
    const correoValido = validarCorreo();
    const telefonoValido = validarTelefono();
    const asuntoValido = validarAsunto();
    const mensajeValido = validarMensaje();

    if (nombreValido && correoValido && telefonoValido && asuntoValido && mensajeValido) {
        botonEnviar.disabled = false;
    } else {
        botonEnviar.disabled = true;
    }
}

nombre.addEventListener("input", validarFormulario);
correo.addEventListener("input", validarFormulario);
telefono.addEventListener("input", validarFormulario);
asunto.addEventListener("input", validarFormulario);
mensaje.addEventListener("input", validarFormulario);

formulario.addEventListener("submit", function(evento) {
    evento.preventDefault();

    if (!botonEnviar.disabled) {
        mensajeExito.textContent = "Formulario enviado correctamente.";

        formulario.reset();

        nombre.classList.remove("campoCorrecto");
        correo.classList.remove("campoCorrecto");
        telefono.classList.remove("campoCorrecto");
        asunto.classList.remove("campoCorrecto");
        mensaje.classList.remove("campoCorrecto");

        botonEnviar.disabled = true;
    }
});