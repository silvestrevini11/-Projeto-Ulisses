create database AssinaturaJogos;
use AssinaturaJogos;

CREATE TABLE IF NOT EXISTS usuario(
	id_user int auto_increment,
    nome_user varchar(50) not null,
    login_user varchar(50) not null,
    senha_user varchar(50) not null,
    data_nasc_user date not null,
    cpf_user varchar(50) not null,
    email_user varchar(50) not null,
    tel_user varchar(20),
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

select * from usuario;
select * from jogos;
select * from itens_do_pedido;
select * from generos;
select * from plataformas;

insert into usuario (nome_user, login_user, senha_user, data_nasc_user, cpf_user, email_user, tel_user)values
('neymar','neymazinho',11,'1984-02-02','Cristiano Ronaldo','neymar@gmail.com',11213232123);

insert into generos (nome_genero) values
("ação");

insert into jogos values
(1,20.45,'Grand Theft Auto: San Andreas','rockstar',' é um clássico jogo de ação em mundo aberto ambientado no início dos anos 90','2004-10-26','ação','playstation',1,1);

insert into plataformas (nome_plataforma) values
('Playstation');

insert into itens_do_pedido (pedido_id, id_jogo, id_plataforma, preco_na_venda, chave_de_ativacao) values
(1,1,1,10.00,'pauzinho');