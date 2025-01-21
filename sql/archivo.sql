CREATE DATABASE tienda_virtual
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE tienda_virtual;

CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(8, 2),
    stock INT
);