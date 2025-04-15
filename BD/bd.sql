CREATE DATABASE syntonize;

USE syntonize;

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(70) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL,
    profile ENUM('Admin', 'Professor', 'Aluno') NOT NULL,
    status ENUM('Ativo', 'Inativo') NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);