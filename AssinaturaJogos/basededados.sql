create database AssinaturaJogos;
use AssinaturaJogos;

CREATE TABLE IF NOT EXISTS usuario(
	id_user int auto_increment,
    nome_user varchar(50) not null,
    login_user varchar(50) not null,
    senha_user varchar(50) not null,
    email_user varchar(50) not null,
    primary key(id_user)
);  
CREATE TABLE IF NOT EXISTS jogos (
    id_jogo INT AUTO_INCREMENT,
    preco_jogo decimal (10,2) not null,
    nome_jogo VARCHAR(100) NOT NULL,
    criador_jogo VARCHAR(100) NOT NULL,
    descricao_jogo varchar(200) not null,
    data_lancamento DATE,
    genero VARCHAR(50),
    plataforma VARCHAR(50),
    id_genero INT NOT NULL,
    id_plataforma INT NOT NULL,
    PRIMARY KEY(id_jogo),
	FOREIGN KEY (id_genero) REFERENCES generos(id_genero),
    FOREIGN KEY (id_plataforma) REFERENCES plataformas(id_plataforma)
);
CREATE TABLE IF NOT EXISTS itens_do_pedido (
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
CREATE TABLE IF NOT EXISTS generos(
    id_genero INT AUTO_INCREMENT PRIMARY KEY,
    nome_genero VARCHAR(50) NOT NULL
);
CREATE TABLE IF NOT EXISTS plataformas (
    id_plataforma INT AUTO_INCREMENT PRIMARY KEY,
    nome_plataforma VARCHAR(50) NOT NULL
);
INSERT INTO jogos (preco_jogo, nome_jogo, criador_jogo, descricao_jogo, data_lancamento, genero, plataforma, id_genero, id_plataforma)
VALUES (59.90, 'FarCry4', 'Ubisoft', 'Aventura em mundo aberto no Himalaia.', '2014-11-18', 'Ação', 'PC', 1, 1);
select * from usuario;
select * from jogos;
select * from itens_do_pedido;
select * from generos;
select * from plataformas;