
CREATE DATABASE testepratico DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE testepratico;

CREATE TABLE pessoa(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) DEFAULT NULL,
    sobrenome VARCHAR(50) DEFAULT NULL,
    endereco VARCHAR(255) DEFAULT NULL,
    numero INT UNSIGNED NOT NULL DEFAULT 0,
    cidade VARCHAR(50) DEFAULT NULL,
    estado VARCHAR(50) DEFAULT NULL,
    cep INT UNSIGNED NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    PRIMARY KEY (id)
);

