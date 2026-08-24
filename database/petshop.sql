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

INSERT INTO clientes (nome, email, telefone) VALUES
('João Silva', 'joao.silva@email.com', '11999990001'),
('Maria Santos', 'maria.santos@email.com', '11999990002'),
('Carlos Oliveira', 'carlos.oliveira@email.com', '11999990003'),
('Ana Souza', 'ana.souza@email.com', '11999990004'),
('Pedro Costa', 'pedro.costa@email.com', '11999990005'),
('Juliana Lima', 'juliana.lima@email.com', '11999990006'),
('Rafael Almeida', 'rafael.almeida@email.com', '11999990007'),
('Camila Rodrigues', 'camila.rodrigues@email.com', '11999990008'),
('Lucas Ferreira', 'lucas.ferreira@email.com', '11999990009'),
('Beatriz Martins', 'beatriz.martins@email.com', '11999990010');

INSERT INTO animais (cliente_id, nome, porte, idade) VALUES
(1, 'Rex', 'Grande', 3),
(2, 'Mia', 'Pequeno', 2),
(3, 'Bolt', 'Médio', 1),
(4, 'Luna', 'Pequeno', 4),
(5, 'Max', 'Grande', 5);