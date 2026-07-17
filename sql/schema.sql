CREATE DATABASE IF NOT EXISTS appdb;
USE appdb;



-- ==========================================
-- TABLA PROFESORES
-- ==========================================

CREATE TABLE profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    foto VARCHAR(100) NOT NULL
);

-- ==========================================
-- DATOS DE PRUEBA
-- ==========================================

INSERT INTO profesores
(nombre, especialidad, correo, descripcion, foto)
VALUES
('Andrés Rodríguez',
 'Desarrollo Web',
 'andres@techcore.com',
 'Especialista en HTML, CSS y JavaScript.',
 'profesor1.jpg'),

('Carlos Méndez',
 'Bases de Datos',
 'carlos@techcore.com',
 'Especialista en MySQL y Oracle.',
 'profesor2.jpg'),

('María Vargas',
 'Ciberseguridad',
 'maria@techcore.com',
 'Especialista en Seguridad Informática.',
 'profesor3.jpg'),

('Daniela Solano',
 'Programación',
 'daniela@techcore.com',
 'Especialista en Programación Orientada a Objetos.',
 'profesor4.jpg'),

('José Fernández',
 'Inteligencia Artificial',
 'jose@techcore.com',
 'Especialista en Machine Learning y Ciencia de Datos.',
 'profesor5.jpg');

 CREATE TABLE IF NOT EXISTS contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    correo VARCHAR(120) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    asunto VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contacto (nombre_completo, correo, telefono, asunto, mensaje) VALUES
('Ana Rodríguez', 'ana.rodriguez@correo.com', '88889999', 'Información de cursos', 'Deseo recibir información sobre los cursos disponibles de programación web.'),
('Carlos Pérez', 'carlos.perez@correo.com', '87776655', 'Consulta de horarios', 'Quisiera conocer los horarios disponibles para los cursos de la academia.'),
('María López', 'maria.lopez@correo.com', '89998877', 'Matrícula', 'Estoy interesada en matricular un curso y deseo conocer los requisitos.'),
('José Ramírez', 'jose.ramirez@correo.com', '86665544', 'Profesores', 'Me gustaría obtener información sobre los profesores y sus especialidades.'),
('Laura Sánchez', 'laura.sanchez@correo.com', '85554433', 'Consulta general', 'Tengo una consulta general sobre los servicios académicos ofrecidos por la institución.');

CREATE TABLE IF NOT EXISTS  cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    duracion VARCHAR(50) NOT NULL,
    imagen VARCHAR(100) NOT NULL
);

INSERT INTO cursos 
(nombre, descripcion, categoria, duracion, imagen)
VALUES
('Desarrollo Web',
'Aprenda HTML, CSS y JavaScript.',
'Desarrollo Web',
'3 meses',
'web.jpg'),

('Programación Java',
'Aprenda programación orientada a objetos.',
'Programación',
'4 meses',
'java.jpg'),

('Bases de Datos MySQL',
'Gestión y consultas SQL.',
'Base de Datos',
'2 meses',
'mysql.jpg');

