const cursos = [
    {
        nombre: "HTML5",
        descripcion: "Creación de la estructura de sitios web modernos.",
        categoria: "Desarrollo Web",
        duracion: "20 horas",
        precio: "$50",
        imagen: "./Imagenes/html.png"
    },
    {
        nombre: "CSS3",
        descripcion: "Diseño y personalización visual de páginas web.",
        categoria: "Desarrollo Web",
        duracion: "25 horas",
        precio: "$60",
        imagen: "./Imagenes/css.png"
    },
    {
        nombre: "JavaScript",
        descripcion: "Programación interactiva para aplicaciones web.",
        categoria: "Desarrollo Web",
        duracion: "30 horas",
        precio: "$80",
        imagen: "./Imagenes/javascript.png"
    },
    {
        nombre: "Java",
        descripcion: "Desarrollo de aplicaciones orientadas a objetos.",
        categoria: "Programación",
        duracion: "40 horas",
        precio: "$120",
        imagen: "./Imagenes/java.png"
    },
    {
        nombre: "Python",
        descripcion: "Automatización y desarrollo de software moderno.",
        categoria: "Programación",
        duracion: "35 horas",
        precio: "$100",
        imagen: "./Imagenes/python.jpeg"
    },
    {
        nombre: "MySQL",
        descripcion: "Gestión y administración de bases de datos.",
        categoria: "Base de Datos",
        duracion: "20 horas",
        precio: "$70",
        imagen: "./Imagenes/mysql.png"
    }
];
// Referencias del DOM

const contenedorCursos = document.getElementById("contenedorCursos");
const buscarCurso = document.getElementById("buscarCurso");
const filtroCategoria = document.getElementById("filtroCategoria");

// Función para mostrar cursos

function mostrarCursos(listaCursos) {

    contenedorCursos.innerHTML = "";

    listaCursos.forEach(curso => {

        const tarjeta = document.createElement("div");
        tarjeta.classList.add("tarjetaCurso");

        tarjeta.innerHTML = `
            <img src="${curso.imagen}" alt="${curso.nombre}">
            <h3>${curso.nombre}</h3>
            <p><strong>Categoría:</strong> ${curso.categoria}</p>
            <p>${curso.descripcion}</p>
            <p><strong>Duración:</strong> ${curso.duracion}</p>
            <p><strong>Precio:</strong> ${curso.precio}</p>
        `;

        contenedorCursos.appendChild(tarjeta);

    });

}

// Función de filtrado

function filtrarCursos() {

    const texto = buscarCurso.value.toLowerCase();
    const categoria = filtroCategoria.value;

    const cursosFiltrados = cursos.filter(curso => {

        const coincideTexto =
            curso.nombre.toLowerCase().includes(texto) ||
            curso.descripcion.toLowerCase().includes(texto);

        const coincideCategoria =
            categoria === "Todos" ||
            curso.categoria === categoria;

        return coincideTexto && coincideCategoria;

    });

    mostrarCursos(cursosFiltrados);

}

// Eventos

buscarCurso.addEventListener("input", filtrarCursos);

filtroCategoria.addEventListener("change", filtrarCursos);

// Mostrar todos los cursos al cargar

mostrarCursos(cursos);