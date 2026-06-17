// Lista de profesores
const profesores = [
    {
        nombre: "Andres Rodríguez",
        especialidad: "Desarrollo Web",
        descripcion: "Especialista en HTML, CSS y JavaScript con amplia experiencia en desarrollo web.",
        foto: "./Imagenes/profesor1.jpg",
        correo: "andres@techcore.com",
        cursosQueImparte: "HTML, CSS y JavaScript"
    },

    {
        nombre: "Carlos Méndez",
        especialidad: "Bases de Datos",
        descripcion: "Consultor especializado en MySQL y SQL Server.",
        foto: "./Imagenes/profesor2.jpg",
        correo: "carlos@techcore.com",
        cursosQueImparte: "MySQL y SQL Server"
    },

    {
        nombre: "María Vargas",
        especialidad: "Ciberseguridad",
        descripcion: "Especialista en seguridad informática y protección de redes.",
        foto: "./Imagenes/profesor3.jpg",
        correo: "maria@techcore.com",
        cursosQueImparte: "Ciberseguridad Empresarial"
    },

    {
        nombre: "Daniela Solano",
        especialidad: "Programación",
        descripcion: "Ingeniera de software con experiencia en Java y Python.",
        foto: "./Imagenes/profesor4.jpg",
        correo: "daniela@techcore.com",
        cursosQueImparte: "Java y Python"
    }
];

// Contenedor donde se agregan las tarjetas
const contenedor = document.getElementById("contenedorProfesores");

// Recorrer el arreglo de profesores
profesores.forEach((profesor, index) => {

    // Crear la tarjeta
    const tarjeta = document.createElement("div");

    tarjeta.classList.add("tarjetaProfesor");

    // Guardar el id del profesor
    tarjeta.dataset.id = index;

    // Información que se muestra en la tarjeta
    tarjeta.innerHTML = `
    <img src="${profesor.foto}" alt="${profesor.nombre}">

    <h3>${profesor.nombre}</h3>

    <h4>${profesor.especialidad}</h4>

    <p>${profesor.descripcion}</p>
    `;

    // Agregar la tarjeta al contenedor
    contenedor.appendChild(tarjeta);

    // Mostrar información al dar click
    tarjeta.addEventListener("click", () => {

    console.log("Click en:", profesor.nombre);

    document.getElementById("tituloModal").textContent =
        profesor.nombre;

    document.getElementById("especialidadModal").textContent =
        profesor.especialidad;

    document.getElementById("correoModal").textContent =
        profesor.correo;

    document.getElementById("cursosModal").textContent =
        profesor.cursosQueImparte;

    document.getElementById("descripcionModal").textContent =
        profesor.descripcion;

    document.getElementById("fotoModal").src =
        profesor.foto;

    // Crear y abrir el modal
    const modal = new bootstrap.Modal(
        document.getElementById("modalProfesor")
    );

    modal.show();

    });

});