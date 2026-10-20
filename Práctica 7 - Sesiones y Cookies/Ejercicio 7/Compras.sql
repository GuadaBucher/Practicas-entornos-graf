CREATE DATABASE Compras;
USE Compras;
CREATE TABLE catalogo (id INT AUTO_INCREMENT PRIMARY KEY, producto VARCHAR(100), precio DECIMAL(11,2));
INSERT INTO catalogo (producto, precio) VALUES ('Teclado', 45000.00), ('Mouse', 18500.50), ('Monitor', 210000.00);