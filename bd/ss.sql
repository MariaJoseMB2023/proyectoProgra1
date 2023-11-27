-- Active: 1700944449298@@127.0.0.1@3306
CREATE DATABASE srd_ujmd CHARACTER SET utf8 COLLATE utf8_general_ci;

USE srd_ujmd;

CREATE TABLE usuarios(
    idusuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    clave TEXT NOT NULL,
    tipo INT,
    estado INT
);

INSERT INTO usuarios (usuario, clave, tipo, estado) VALUES       
('marmorales', '$2y$10$0.5WQewU3502iP8kSWmPI.9B/CmrHAIKXXRa.Mztjtov0CtjjIbCK', 1, 1);

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
