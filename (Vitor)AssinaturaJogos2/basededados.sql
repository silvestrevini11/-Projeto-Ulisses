-- 1. Apaga e recria o banco
DROP DATABASE IF EXISTS AssinaturaJogos;
CREATE DATABASE AssinaturaJogos;
USE AssinaturaJogos;

-- 2. Tabelas independentes PRIMEIRO
CREATE TABLE generos (
    id_genero INT AUTO_INCREMENT PRIMARY KEY,
    nome_genero VARCHAR(50) NOT NULL
);

CREATE TABLE plataformas (
    id_plataforma INT AUTO_INCREMENT PRIMARY KEY,
    nome_plataforma VARCHAR(50) NOT NULL
);

CREATE TABLE usuario (
    id_user INT AUTO_INCREMENT,
    nome_user VARCHAR(50) NOT NULL,
    login_user VARCHAR(50) NOT NULL,
    senha_user VARCHAR(50) NOT NULL,
    email_user VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_user)
);

-- 3. jogos DEPOIS (depende de generos e plataformas)
CREATE TABLE jogos (
    id_jogo INT AUTO_INCREMENT,
    preco_jogo DECIMAL(10,2) NOT NULL,
    nome_jogo VARCHAR(100) NOT NULL,
    criador_jogo VARCHAR(100) NOT NULL,
    descricao_jogo VARCHAR(200) NOT NULL,
    data_lancamento DATE,
    genero VARCHAR(50),
    plataforma VARCHAR(50),
    id_genero INT NOT NULL,
    id_plataforma INT NOT NULL,
    PRIMARY KEY(id_jogo),
    FOREIGN KEY (id_genero) REFERENCES generos(id_genero),
    FOREIGN KEY (id_plataforma) REFERENCES plataformas(id_plataforma)
);

CREATE TABLE itens_do_pedido (
    item_id INT AUTO_INCREMENT,
    pedido_id INT NOT NULL,
    id_jogo INT NOT NULL,
    id_plataforma INT NOT NULL,
    preco_na_venda DECIMAL(10,2),
    chave_de_ativacao VARCHAR(100),
    PRIMARY KEY(item_id),
    FOREIGN KEY(id_jogo) REFERENCES jogos(id_jogo),
    FOREIGN KEY(id_plataforma) REFERENCES plataformas(id_plataforma)
);

-- 4. Dados de exemplo para testar
INSERT INTO generos (nome_genero) VALUES ('Ação'), ('Aventura'), ('Luta');
INSERT INTO plataformas (nome_plataforma) VALUES ('PC'), ('PS2'), ('PS4');

INSERT INTO jogos (preco_jogo, nome_jogo, criador_jogo, descricao_jogo, data_lancamento, genero, plataforma, id_genero, id_plataforma)
VALUES
  (59.90, 'FarCry4',   'Ubisoft',       'Aventura em mundo aberto no Himalaia.',         '2014-11-18', 'Ação',     'PC',  1, 1),
  (39.90, 'LegoBatman','Traveller Tales','Jogo de aventura com personagens da DC.',       '2008-09-23', 'Aventura', 'PC',  2, 1),
  (49.90, 'GodOfWarII','Santa Monica',  'Kratos enfrenta os deuses do Olimpo.',           '2007-03-13', 'Ação',     'PS2', 1, 2);