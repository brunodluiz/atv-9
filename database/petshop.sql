create database crud_clientes;
use crud_clientes;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,

);

CREATE TABLE animais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    porte VARCHAR(50) NOT NULL,
    idade INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

insert into usuarios (nome, email) values
('João Silva', 'joao.silva@email.com'),
('Maria Santos', 'maria.santos@email.com'),
('Carlos Oliveira', 'carlos.oliveira@email.com'),
('Ana Souza', 'ana.souza@email.com'),
('Pedro Costa', 'pedro.costa@email.com'),
('Juliana Lima', 'juliana.lima@email.com'),
('Rafael Almeida', 'rafael.almeida@email.com'),
('Camila Rodrigues', 'camila.rodrigues@email.com'),
('Lucas Ferreira', 'lucas.ferreira@email.com'),
('Beatriz Martins', 'beatriz.martins@email.com');