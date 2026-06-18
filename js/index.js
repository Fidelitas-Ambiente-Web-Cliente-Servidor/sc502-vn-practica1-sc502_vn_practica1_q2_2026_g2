// 1. ARRAY DE CURSOS DESTACADOS
const cursosDestacados = [
    {
        nombre: "HTML5",
        descripcion: "Aprende a crear la estructura de sitios web modernos.",
        imagen: "./Imagenes/html.png",
        categoria: "Desarrollo Web"
    },
    {
        nombre: "CSS3",
        descripcion: "Diseña y personaliza páginas web con estilos profesionales.",
        imagen: "./Imagenes/css.png",
        categoria: "Desarrollo Web"
    },
    {
        nombre: "JavaScript",
        descripcion: "Agrega interactividad y dinamismo a tus proyectos web.",
        imagen: "./Imagenes/javascript.png",
        categoria: "Desarrollo Web"
    }
];



// 2. RENDERIZAR LAS TARJETAS DINÁMICAMENTE
const contenedorTarjetas = document.querySelector(".contenedorTarjetas");

contenedorTarjetas.innerHTML = "";

cursosDestacados.forEach(curso => {

    const tarjeta = document.createElement("div");
    tarjeta.classList.add("tarjeta");

    const img = document.createElement("img");
    img.src = curso.imagen;
    img.alt = `Curso ${curso.nombre}`;

    const titulo = document.createElement("h3");
    titulo.textContent = curso.nombre;

    const descripcion = document.createElement("p");
    descripcion.textContent = curso.descripcion;

    const boton = document.createElement("a");
    boton.classList.add("boton2");
    boton.href = "cursos.html";
    boton.textContent = "Ver más";

    tarjeta.appendChild(img);
    tarjeta.appendChild(titulo);
    tarjeta.appendChild(descripcion);
    tarjeta.appendChild(boton);

    contenedorTarjetas.appendChild(tarjeta);
});
