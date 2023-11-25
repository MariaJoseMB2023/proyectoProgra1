CREATE DATABASE srd_ujmd CHARACTER SET utf8 COLLATE utf8_general_ci;

USE srd_ujmd;

CREATE TABLE usuarios(
    idusuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    clave TEXT NOT NULL,
    tipo INT,
    estado INT
);

INSERT INTO usuarios (idusuario, usuario, clave, tipo, estado) VALUES
(1, 'rigorellana', '$2y$10$zfhsLRDG8cSlh44v8EbgCe42Hcq.bpWm6MeiHRrMJb09Mgz5Y1TD6', 1, 1);

CREATE TABLE categorias(
    idcategoria INT PRIMARY KEY AUTO_INCREMENT,
    categoria TEXT
);

CREATE TABLE documentos (
    iddocumento INT PRIMARY KEY AUTO_INCREMENT,
    detalle TEXT,
    idcategoria INT,
    fecha_registro DATE,
    ruta TEXT
);
