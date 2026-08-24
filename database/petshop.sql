CREATE DATABASE IF NOT EXISTS petshop_brunoluiz;
USE petshop_brunoluiz;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
   
);

CREATE TABLE IF NOT EXISTS animais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    porte VARCHAR(50) NOT NULL,
    idade INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

INSERT INTO clientes (nome, email) VALUES
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

INSERT INTO animais (cliente_id, nome, porte, idade) VALUES
(1, 'Rex', 'Grande', 3),
(2, 'Mia', 'Pequeno', 2),
(3, 'Bolt', 'Médio', 1),
(4, 'Luna', 'Pequeno', 4),
(5, 'Max', 'Grande', 5);