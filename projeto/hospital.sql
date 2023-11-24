CREATE DATABASE IF NOT EXISTS nome_do_banco_de_dados;

USE nome_do_banco_de_dados;

CREATE TABLE IF NOT EXISTS logar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS consulta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_do_paciente VARCHAR(255) NOT NULL,
    data_horario DATETIME NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);
