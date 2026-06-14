CREATE DATABASE AssinaturaJogos;
USE AssinaturaJogos;

CREATE TABLE IF NOT EXISTS generos (
    id_genero INT AUTO_INCREMENT PRIMARY KEY,
    nome_genero VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS plataformas (
    id_plataforma INT AUTO_INCREMENT PRIMARY KEY,
    nome_plataforma VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS usuario (
    id_user INT AUTO_INCREMENT,
    nome_user VARCHAR(50) NOT NULL,
    login_user VARCHAR(50) NOT NULL,
    senha_user VARCHAR(50) NOT NULL,
    email_user VARCHAR(50) NOT NULL UNIQUE,
    PRIMARY KEY(id_user)
);

CREATE TABLE IF NOT EXISTS jogos (
    id_jogo INT AUTO_INCREMENT,
    video_jogo VARCHAR(255),
    preco_jogo DECIMAL(10,2) NOT NULL,
    nome_jogo VARCHAR(100) NOT NULL UNIQUE,
    criador_jogo VARCHAR(100) NOT NULL,
    descricao_jogo VARCHAR(2000) NOT NULL,
    data_lancamento DATE,
    genero VARCHAR(50),
    plataforma VARCHAR(50),
	nota_jogo Decimal(10,1) NOT NULL,
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


INSERT INTO generos (nome_genero) VALUES
/*ID 1*/('Ação'),
/*ID 2*/('Aventura'),
/*ID 3*/('Luta'),
/*ID 4*/('RPG'),
/*ID 5*/('Terror'),
/*ID 6*/('Corrida'),
/*ID 7*/('Estrategia');
INSERT INTO plataformas (nome_plataforma) VALUES
/*ID 1*/ ('PC'),
/*ID 2*/('PS1'),
/*ID 3*/('PS2'),
/*ID 4*/('PS3'),
/*ID 5*/('PS4'),
/*ID 6*/('PS5'),
/*ID 7*/('Xbox'),
/*ID 8*/('Xbox 360'),
/*ID 9*/('Xbox One'),
/*ID 10*/('Xbox Series S'),
/*ID 11*/('PSP');


INSERT INTO jogos (video_jogo, preco_jogo, nome_jogo, criador_jogo, descricao_jogo, data_lancamento, genero, plataforma, nota_jogo, id_genero, id_plataforma)
VALUES
/*PC*/
  ('uCaWqXP54Mc',49.99,'Uma_Musume_Pretty_Derby',					'Cygames',				'Uma Musume Pretty Derby é um jogo que mistura corrida, treinamento e elementos de RPG. O jogador assume o papel de treinador de garotas inspiradas em cavalos de corrida lendários da vida real, ajudando-as a desenvolver atributos, aprender habilidades e vencer competições cada vez mais difíceis. Além das corridas, o jogo apresenta histórias individuais para cada personagem, eventos especiais e apresentações musicais após as vitórias, criando uma experiência única para fãs de esportes, anime e gerenciamento.',   								    '2021-02-24','Corrida'   ,'PC',  8.5 ,6 ,1),
  ('7JFOLJv4s6Y',59.90,'Far_Cry_4',								'Ubisoft',				'Far Cry 4 é um jogo de ação e aventura em mundo aberto ambientado em Kyrat, uma região fictícia inspirada nos Himalaias. O jogador assume o papel de Ajay Ghale, que retorna à sua terra natal para cumprir o último desejo de sua mãe, mas acaba envolvido em uma guerra civil contra o tirânico rei Pagan Min. Com uma grande variedade de armas, veículos e atividades secundárias, o jogo oferece liberdade para explorar montanhas, florestas e fortalezas inimigas, permitindo diferentes estilos de combate, desde confrontos diretos até abordagens furtivas.',	'2014-11-18','Ação'      ,'PC',  8.7 ,1 ,1),	
  ('DfJaUpW_P00',39.90,'Lego_Batman',								'Traveller Tales',		'LEGO Batman: Legacy reúne o universo do Cavaleiro das Trevas em uma divertida aventura construída com peças LEGO. Os jogadores podem controlar Batman, Robin e diversos heróis e vilões da DC Comics enquanto enfrentam desafios, resolvem quebra-cabeças e participam de combates cheios de humor característicos da franquia LEGO. Com dezenas de personagens desbloqueáveis, fases inspiradas em momentos marcantes dos quadrinhos e animações divertidas, o jogo oferece entretenimento para jogadores de todas as idades.',    									'2008-09-23','Aventura'  ,'PC',  8.4 ,2 ,1),
  ('w8vPZrMFiZ4',59.99,'Honkai_Star_Rail',						'HoYoverse',			'Honkai: Star Rail é um RPG de turnos desenvolvido pela HoYoverse que leva os jogadores a uma aventura interplanetária a bordo do Expresso Astral. Durante a jornada, é possível conhecer diversos personagens com habilidades únicas, explorar diferentes mundos e enfrentar inimigos poderosos utilizando estratégias em combate. Com gráficos de alta qualidade, narrativa envolvente e atualizações frequentes, o jogo combina exploração, coleção de personagens e batalhas táticas em um universo de ficção científica.',												'2023-04-26','RPG'       ,'PC',  9.0 ,4 ,1),
  ('jkzRbc2VlXY',47.99,'Epic_Battle_Fantasy_5',					'Kupo Games',           'Epic Battle Fantasy 5 é um RPG por turnos indie que mistura combate estratégico com humor e referências a videogames clássicos (principalmente Final Fantasy e outros JRPGs). O jogo acompanha um grupo de personagens excêntricos (Matt, Natalie, Lance, Anna e NoLegs) em uma aventura cheia de batalhas, exploração e situações absurdas. O enredo começa com uma investigação sobre meteoros misteriosos e rapidamente evolui para eventos maiores envolvendo monólitos, criaturas corrompidas e ameaças cósmicas.',                                                   '2018-11-30','Aventura'  ,'PC',  9.0 ,2 ,1),
/*PS1*/

/*PS2*/
  ('oe0OmX9hINA',49.90,'God_Of_War_II',							'Santa Monica',			'God of War II é um jogo de ação e aventura que continua a jornada de Kratos após sua ascensão ao posto de Deus da Guerra. Traído por Zeus e privado de seus poderes divinos, Kratos embarca em uma busca por vingança que o leva a enfrentar criaturas mitológicas, Titãs e os próprios deuses do Olimpo. Com combates intensos, quebra-cabeças desafiadores, batalhas épicas contra chefes gigantescos e uma narrativa marcante baseada na mitologia grega, o jogo é considerado um dos maiores clássicos do PlayStation 2.',           								 	'2007-03-13','Ação'      ,'PS2', 9.4 ,1 ,3),
  ('SCqjjgi2MJg',18.99,'Devil_May_Cry_3',							'Capcom',				'Devil May Cry 3 é um jogo de ação hack and slash que conta a origem da rivalidade entre os irmãos Dante e Vergil. Utilizando espadas, armas de fogo e diversos estilos de combate, os jogadores enfrentam hordas de demônios em batalhas rápidas e cheias de estilo. Conhecido por sua dificuldade desafiadora, chefes memoráveis e sistema de combos avançado, o jogo é considerado por muitos fãs como um dos melhores títulos da franquia Devil May Cry.',																											'2005-02-17','Ação'      ,'PS2', 9.5 ,1 ,3),
/*PS3*/

/*PS4*/
  ('BY9-jWQQHgw',191.59,'Five_Nights_at_Freddys_Security_Breach', 'Steel Wool Studios',	'Five Nights at Freddys: Security Breach é um jogo de terror e sobrevivência ambientado em um enorme centro de entretenimento chamado Mega Pizzaplex. O jogador controla Gregory, uma criança presa dentro do local durante a noite, que precisa escapar dos animatrônicos enquanto desvenda os mistérios do estabelecimento. Diferente dos jogos anteriores da série, Security Breach oferece exploração livre em um ambiente tridimensional, perseguições intensas e diversas áreas para investigar.',																	'2021-12-16','Terror'    ,'PS4', 6.0 ,5 ,5),
  ('CRLglREYEDs',39.99,'Shadow_of_Mordor',						'Monolith Productions',	'Middle-earth: Shadow of Mordor é um jogo de ação e aventura ambientado no universo de O Senhor dos Anéis. O jogador controla Talion, um guardião que retorna da morte em busca de vingança contra as forças de Sauron. O grande destaque do jogo é o Sistema Nêmesis, que permite que inimigos sobrevivam aos confrontos, evoluam em poder e desenvolvam rivalidades únicas com o jogador. Com combate dinâmico, exploração em mundo aberto e elementos de furtividade, o jogo oferece uma experiência marcante para fãs da Terra-média.',									'2014-09-30','Ação'      ,'PS4', 8.5 ,1 ,5),
/*PS5*/

/*XBOX*/

/*XBOX 360*/

/*XBOX ONE*/

/*XBOX SERIES S*/

/*PSP*/
  ('vYYZm2-HKvI',250.00,'Yu-Gi-Oh!_5Ds_Tag_Force_5',				'Konami',               'Yu-Gi-Oh! 5Ds Tag Force 5 (2010, PSP) mergulha no universo da terceira temporada do anime, onde o jogador, como o "Hat Guy", explora Neo Domino City e Satellite. A trama foca no WRGP e no confronto contra os Três Imperadores de Iliaster, que viajam do futuro para destruir a cidade com robôs androides. Junto aos Signers (Yusei, Jack, Crow, entre outros), você luta para impedir essa ameaça, com a narrativa mudando conforme o parceiro de duelo escolhido para o torneio final.', 																		'2010-09-16','Estrategia','PSP', 8.0 ,7 ,11);

SELECT * FROM USUARIO;
SELECT * FROM JOGOS;