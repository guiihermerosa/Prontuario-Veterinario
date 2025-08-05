//Banco de dados do Prontuário Veterinário

CREATE DATABASE IF NOT EXISTS ProntuarioVet;
USE ProntuarioVet;
//Tabela de Animais

CREATE TABLE IF NOT EXISTS Animais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especie VARCHAR(50) NOT NULL,
    raca VARCHAR(50),
    idade INT,
    peso DECIMAL(5,2),
    data_nascimento DATE,
    proprietario_id INT,
    FOREIGN KEY (proprietario_id) REFERENCES Proprietarios(id)
);
//Tabela de Proprietários

CREATE TABLE IF NOT EXISTS Proprietarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15),
    email VARCHAR(100),
    endereco VARCHAR(255)
);
//Tabela de Consultas

CREATE TABLE IF NOT EXISTS Consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    descricao TEXT,
    FOREIGN KEY (animal_id) REFERENCES Animais(id)
);
//Tabela de Tratamentos

CREATE TABLE IF NOT EXISTS Tratamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    consulta_id INT NOT NULL,
    medicamento VARCHAR(100),
    dosagem VARCHAR(50),
    duracao INT,
    FOREIGN KEY (consulta_id) REFERENCES Consultas(id)
);
//Tabela de Exames

CREATE TABLE IF NOT EXISTS Exames (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    resultado TEXT,
    FOREIGN KEY (animal_id) REFERENCES Animais(id)
);
//Tabela de Vacinas

CREATE TABLE IF NOT EXISTS Vacinas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    proxima_vacina DATE,
    FOREIGN KEY (animal_id) REFERENCES Animais(id)
);
//Tabela de Procedimentos

CREATE TABLE IF NOT EXISTS Procedimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    descricao TEXT,
    FOREIGN KEY (animal_id) REFERENCES Animais(id)
);
//Tabela de Agendamentos

CREATE TABLE IF NOT EXISTS Agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    motivo VARCHAR(255),
    FOREIGN KEY (animal_id) REFERENCES Animais(id)
);