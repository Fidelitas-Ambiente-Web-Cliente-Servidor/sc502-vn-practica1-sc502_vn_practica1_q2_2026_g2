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