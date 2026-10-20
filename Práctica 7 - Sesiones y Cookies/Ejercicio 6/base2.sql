CREATE DATABASE base2;
USE base2;
CREATE TABLE alumnos (codigo INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(100), codigocurso INT, mail VARCHAR(100));
INSERT INTO alumnos (nombre, codigocurso, mail) VALUES ('Juan Pérez', 1, 'juan@mail.com');
