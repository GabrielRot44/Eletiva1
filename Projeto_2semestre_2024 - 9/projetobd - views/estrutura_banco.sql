CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel ENUM('adm', 'colab') NOT NULL
);

CREATE TABLE participante (
    id int AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) not null,
    telefone VARCHAR(20) not null,
    
);
CREATE TABLE palestra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    palestrante VARCHAR(100),
    participante_id,
    FOREIGN KEY (participante_id) REFERENCES participante(id)
);

CREATE TABLE evento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    palestra_id INT,
    FOREIGN KEY (palestra_id) REFERENCES palestra(id)
);


