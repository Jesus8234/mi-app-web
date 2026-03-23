-- 1. Crear la base de datos
CREATE DATABASE IF NOT EXISTS taskboard_smr CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE taskboard_smr;

-- 2. Crear la tabla 'aulas'
CREATE TABLE aulas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

-- 3. Crear la tabla 'incidencias' y añadir la relación (FOREIGN KEY)
CREATE TABLE incidencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    estado ENUM('Pendiente', 'En proceso', 'Resuelta') DEFAULT 'Pendiente' NOT NULL,
    id_aula INT NOT NULL,
    CONSTRAINT fk_incidencias_aulas 
        FOREIGN KEY (id_aula) 
        REFERENCES aulas(id) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
);

-- 4. Insertar 5 registros de prueba en la tabla 'aulas'
INSERT INTO aulas (nombre) VALUES 
('Aula 101 (Teoría)'),
('Aula 102 (Teoría)'),
('Aula de Informática 1'),
('Aula de Informática 2'),
('Biblioteca');

-- 5. Insertar 5 registros de prueba en la tabla 'incidencias'
INSERT INTO incidencias (descripcion, fecha, estado, id_aula) VALUES 
('El proyector no enciende, parpadea luz roja.', '2026-03-20 09:15:00', 'Pendiente', 1),
('Falta el ratón en el equipo del profesor.', '2026-03-21 10:30:00', 'En proceso', 3),
('Pantalla azul al iniciar Windows en el PC del alumno 5.', '2026-03-22 11:45:00', 'Pendiente', 4),
('No hay conexión a internet en toda la clase.', '2026-03-22 16:20:00', 'Resuelta', 2),
('El router de la sala está apagado y no responde.', '2026-03-23 08:00:00', 'Pendiente', 5);

-- Insertar 5 aulas de prueba
INSERT INTO aulas (nombre) VALUES 
('Aula 101 - Informática'),
('Aula 102 - Redes'),
('Aula 201 - Teoría'),
('Laboratorio de Hardware'),
('Sala de Profesores');

-- Insertar 5 incidencias de prueba (el id_aula debe coincidir con los IDs de arriba)
INSERT INTO incidencias (descripcion, fecha, estado, id_aula) VALUES 
('El proyector no enciende', '2026-03-20', 'Pendiente', 3),
('Ratón y teclado rotos en el PC del profesor', '2026-03-21', 'Resuelto', 1),
('Falla la conexión a internet en toda la fila', '2026-03-22', 'En proceso', 2),
('Monitor parpadea de color verde', '2026-03-23', 'Pendiente', 4),
('Impresora sin tinta y atascada', '2026-03-23', 'Pendiente', 5);
