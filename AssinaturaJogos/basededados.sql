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
/*ID 7*/('Estrategia'),
/*ID 8*/('Sobrevivência'),
/*ID 9*/('Cartas'),
/*ID 10*/('Simulação');
INSERT INTO plataformas (nome_plataforma) VALUES
/*ID 1*/('PC'),
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
  ('uCaWqXP54Mc',49.99,'Uma_Musume_Pretty_Derby',		'Cygames',				'Uma Musume Pretty Derby é um jogo que mistura corrida, treinamento e elementos de RPG. O jogador assume o papel de treinador de garotas inspiradas em cavalos de corrida lendários da vida real, ajudando-as a desenvolver atributos, aprender habilidades e vencer competições cada vez mais difíceis. Além das corridas, o jogo apresenta histórias individuais para cada personagem, eventos especiais e apresentações musicais após as vitórias, criando uma experiência única para fãs de esportes, anime e gerenciamento.',   								    '2021-02-24','Corrida'   ,'PC',  8.5 ,6 ,1),
  ('7JFOLJv4s6Y',59.90,'Far_Cry_4',						'Ubisoft',				'Far Cry 4 é um jogo de ação e aventura em mundo aberto ambientado em Kyrat, uma região fictícia inspirada nos Himalaias. O jogador assume o papel de Ajay Ghale, que retorna à sua terra natal para cumprir o último desejo de sua mãe, mas acaba envolvido em uma guerra civil contra o tirânico rei Pagan Min. Com uma grande variedade de armas, veículos e atividades secundárias, o jogo oferece liberdade para explorar montanhas, florestas e fortalezas inimigas, permitindo diferentes estilos de combate, desde confrontos diretos até abordagens furtivas.',	'2014-11-18','Ação'      ,'PC',  8.7 ,1 ,1),	
  ('DfJaUpW_P00',39.90,'Lego_Batman',					'Traveller Tales',		'LEGO Batman: Legacy reúne o universo do Cavaleiro das Trevas em uma divertida aventura construída com peças LEGO. Os jogadores podem controlar Batman, Robin e diversos heróis e vilões da DC Comics enquanto enfrentam desafios, resolvem quebra-cabeças e participam de combates cheios de humor característicos da franquia LEGO. Com dezenas de personagens desbloqueáveis, fases inspiradas em momentos marcantes dos quadrinhos e animações divertidas, o jogo oferece entretenimento para jogadores de todas as idades.',    									'2008-09-23','Aventura'  ,'PC',  8.4 ,2 ,1),
  ('w8vPZrMFiZ4',59.99,'Honkai_Star_Rail',				'HoYoverse',			'Honkai: Star Rail é um RPG de turnos desenvolvido pela HoYoverse que leva os jogadores a uma aventura interplanetária a bordo do Expresso Astral. Durante a jornada, é possível conhecer diversos personagens com habilidades únicas, explorar diferentes mundos e enfrentar inimigos poderosos utilizando estratégias em combate. Com gráficos de alta qualidade, narrativa envolvente e atualizações frequentes, o jogo combina exploração, coleção de personagens e batalhas táticas em um universo de ficção científica.',												'2023-04-26','RPG'       ,'PC',  9.0 ,4 ,1),
  ('jkzRbc2VlXY',47.99,'Epic_Battle_Fantasy_5',			'Kupo Games',           'Epic Battle Fantasy 5 é um RPG por turnos indie que mistura combate estratégico com humor e referências a videogames clássicos (principalmente Final Fantasy e outros JRPGs). O jogo acompanha um grupo de personagens excêntricos (Matt, Natalie, Lance, Anna e NoLegs) em uma aventura cheia de batalhas, exploração e situações absurdas. O enredo começa com uma investigação sobre meteoros misteriosos e rapidamente evolui para eventos maiores envolvendo monólitos, criaturas corrompidas e ameaças cósmicas.',                      '2018-11-30','Aventura'  ,'PC',  9.0 ,2 ,1),
  ('CHAbHz8iYHc',18.70,'Plants_VS_Zombies',             'PopCap Games',          'Um jogo de ação-estratégia totalmente novo da PopCap, desenvolvedora de Bejeweled e Peggle! Zumbis estão invadindo seu lar e sua única defesa é seu arsenal de plantas! Armado com um viveiro de plantas exterminadoras de zumbis como atiradores de ervilha e bombas de cereja, você precisará pensar rápido e plantar mais rápido'                                                                                                                                                                                           ,                      '2009-05-05','Estrategia','PC', 9.5,7,1),                                                                       
  ('kWnzRGD9NDE', 19.99, 'Half-Life_2',                           'Valve',                  'Half-Life 2 é um dos jogos mais influentes da história dos videogames, trazendo uma experiência revolucionária de física aplicada, narrativa imersiva e gameplay em primeira pessoa extremamente fluido. O jogador controla Gordon Freeman em um mundo distópico dominado pela Combine, enfrentando soldados, criaturas alienígenas e resolvendo puzzles ambientais com a famosa Gravity Gun. O jogo se destaca pela ambientação, história cinematográfica e design de fases extremamente avançado para sua época.', '2004-11-16', 'Ação', 'PC', 9.8, 1, 1),
  ('JGhIXLO3ul8', 19.99, 'Dead_By_Daylight',                      'Behaviour Interactive', 'Dead by Daylight é um jogo multiplayer assimétrico de terror onde quatro sobreviventes precisam escapar de um assassino enquanto trabalham juntos para consertar geradores e fugir do mapa. Cada partida é única devido aos diferentes killers, perks e mapas, criando uma experiência intensa e imprevisível. O jogo se destaca pela atmosfera sombria, colaboração entre jogadores e a tensão constante de perseguição.', '2016-06-14', 'Terror', 'PC', 8.5, 5, 1),
  ('7DbBwNpOkEI', 0.00, 'Yu-Gi-Oh!_Master_Duel',                 'Konami',                   'Yu-Gi-Oh! Master Duel é a versão digital oficial do famoso jogo de cartas colecionáveis, trazendo regras completas do TCG com milhares de cartas disponíveis. O jogo possui gráficos animados durante as invocações, sistema competitivo online ranqueado e eventos sazonais. É uma experiência estratégica profunda onde montagem de deck, leitura do oponente e timing são essenciais para vencer duelos.', '2022-01-19', 'Cartas', 'PC', 9.0, 9, 1),
  ('HLUY1nICQRY', 0.00, 'Genshin_Impact', 'HoYoverse', 'Genshin Impact é um RPG de mundo aberto com foco em exploração livre, combate elemental e narrativa expansiva. O jogador assume o papel do Viajante, que percorre o mundo de Teyvat em busca de seu irmão perdido, encontrando diversas nações inspiradas em culturas diferentes, cada uma com sua própria história, política e conflitos. O jogo se destaca pelo sistema de elementos que interagem entre si, permitindo combos estratégicos no combate, além de um vasto elenco de personagens jogáveis com habilidades únicas e um mundo vivo repleto de segredos, chefes e eventos constantes.', '2020-09-28', 'RPG', 'PC', 9.2, 4, 1),
  ('aeu87fKjV5w', 0.00, 'Zenless_Zone_Zero', 'HoYoverse', 'Zenless Zone Zero é um RPG de ação ambientado em um mundo futurista pós-apocalíptico onde a humanidade sobrevive após a destruição causada por fenômenos chamados Hollows. O jogador atua como um Proxy, guiando equipes de personagens em combates rápidos, estilizados e altamente dinâmicos dentro dessas dimensões perigosas. O jogo combina exploração urbana com missões de combate em tempo real, sistema de esquiva e combos rápidos, além de forte identidade visual inspirada em estética cyberpunk e animações fluidas.', '2024-07-04', 'Ação', 'PC', 8.8, 1, 1),
/*PS1*/
 ('EdHQlvbTQmc', 15.00, 'JoJos_Venture', 'Capcom', 'JoJo\'s Venture é um jogo de luta baseado na famosa obra JoJo\'s Bizarre Adventure, trazendo personagens icônicos do arco Stardust Crusaders em combates 2D intensos. O jogo se destaca pelo sistema de Stands, que permite ataques únicos e estratégicos, além de animações estilizadas e fidelidade ao material original. Cada personagem possui habilidades distintas, tornando as lutas imprevisíveis e cheias de personalidade.', '1998-10-01', 'Luta', 'PS1', 7.8, 3, 2),
 ('E0-C5h7n7RA', 10.00, 'Digimon_World', 'Bandai', 'Digimon World é um RPG de criação e sobrevivência onde o jogador cuida, treina e evolui Digimons em um mundo digital aberto e instável. O gameplay mistura exploração, gerenciamento de recursos e evolução de criaturas, exigindo atenção constante ao estado do Digimon, como fome, disciplina e felicidade. O jogo é conhecido por sua dificuldade e sistema de evolução não linear.', '1999-01-28', 'RPG', 'PS1', 8.2, 4, 2),
 ('SNVudSA23yA', 12.00, 'Yu-Gi-Oh!_Forbidden_Memories', 'Konami', 'Yu-Gi-Oh! Forbidden Memories é um jogo de cartas que adapta o universo do anime em batalhas estratégicas simplificadas, porém desafiadoras. O sistema de fusão de cartas é uma das principais mecânicas, permitindo criar monstros poderosos combinando cartas específicas. O jogo também apresenta uma campanha baseada no Egito antigo, com duelos contra personagens icônicos da série.', '1999-12-09', 'Cartas', 'PS1', 8.0, 9, 2),
 ('p0WwkDg6PdU', 18.00, 'Resident_Evil_3:_Nemesis', 'Capcom', 'Resident Evil 3: Nemesis é um survival horror que coloca o jogador no meio do caos de Raccoon City durante o surto do T-Virus. O grande destaque é o perseguidor Nemesis, uma criatura implacável que caça a protagonista Jill Valentine ao longo do jogo. Com puzzles, gestão de recursos e atmosfera tensa, o jogo intensifica o terror e a sensação de desespero constante.', '1999-09-22', 'Terror', 'PS1', 9.1, 5, 2),
 ('n_pwOxMhhGs', 10.00, 'Crash_Bandicoot', 'Naughty Dog', 'Crash Bandicoot é um jogo de plataforma 3D com progressão linear, onde o jogador controla Crash em fases cheias de obstáculos, inimigos e desafios de precisão. O jogo se destaca pelo level design criativo, dificuldade progressiva e estilo carismático, sendo um dos maiores ícones do PS1.', '1996-09-09', 'Aventura', 'PS1', 8.5, 2, 2),
 ('TEN-p5e2WkM', 20.00, 'Final_Fantasy_VII', 'Square', 'Final Fantasy VII é um RPG clássico que acompanha Cloud Strife em uma jornada contra a corporação Shinra e o vilão Sephiroth. O jogo revolucionou a indústria com sua narrativa profunda, personagens marcantes e sistema de combate baseado em turnos com Materia, permitindo customização avançada de habilidades.', '1997-01-31', 'RPG', 'PS1', 9.7, 4, 2),
 ('5SA5VVBb2bU', 20.00, 'Metal_Gear_Solid', 'Konami', 'Metal Gear Solid é um jogo de espionagem tática que revolucionou o gênero stealth, colocando o jogador no papel de Solid Snake em uma missão para neutralizar ameaças nucleares. O jogo enfatiza furtividade, evitando combates diretos e utilizando estratégias inteligentes para passar pelos inimigos.', '1998-10-20', 'Ação', 'PS1', 9.6, 1, 2),
 ('kUjLG8ZxuHQ', 18.00, 'Resident_Evil_2', 'Capcom', 'Resident Evil 2 é um survival horror ambientado em Raccoon City durante o apocalipse zumbi, onde o jogador controla Leon Kennedy e Claire Redfield em campanhas separadas. O jogo combina exploração, puzzles e combate limitado, criando uma atmosfera de tensão constante.', '1998-01-21', 'Terror', 'PS1', 9.3, 5, 2),
 ('Ibbr_kbuIg4', 15.00, 'Gran_Turismo', 'Polyphony Digital', 'Gran Turismo é um simulador de corrida que revolucionou o gênero ao trazer física realista, grande variedade de carros licenciados e pistas detalhadas. O jogo possui modo carreira profundo onde o jogador evolui de iniciante até piloto profissional.', '1997-12-23', 'Corrida', 'PS1', 9.4, 6, 2),
 ('v7FYB1-aZQ4', 15.00, 'Castlevania:_Symphony_of_the_Night', 'Konami', 'Castlevania: Symphony of the Night é um action RPG com exploração estilo metroidvania, onde o jogador controla Alucard explorando o castelo de Drácula. O jogo se destaca pela liberdade de exploração, progressão por habilidades e atmosfera gótica marcante.', '1997-03-20', 'Ação', 'PS1', 9.5, 1, 2),
/*PS2*/
  ('oe0OmX9hINA',49.90,'God_Of_War_II',							'Santa Monica',			'God of War II é um jogo de ação e aventura que continua a jornada de Kratos após sua ascensão ao posto de Deus da Guerra. Traído por Zeus e privado de seus poderes divinos, Kratos embarca em uma busca por vingança que o leva a enfrentar criaturas mitológicas, Titãs e os próprios deuses do Olimpo. Com combates intensos, quebra-cabeças desafiadores, batalhas épicas contra chefes gigantescos e uma narrativa marcante baseada na mitologia grega, o jogo é considerado um dos maiores clássicos do PlayStation 2.',           								 	'2007-03-13','Ação'      ,'PS2', 9.4 ,1 ,3),
  ('SCqjjgi2MJg',18.99,'Devil_May_Cry_3',							'Capcom',				'Devil May Cry 3 é um jogo de ação hack and slash que conta a origem da rivalidade entre os irmãos Dante e Vergil. Utilizando espadas, armas de fogo e diversos estilos de combate, os jogadores enfrentam hordas de demônios em batalhas rápidas e cheias de estilo. Conhecido por sua dificuldade desafiadora, chefes memoráveis e sistema de combos avançado, o jogo é considerado por muitos fãs como um dos melhores títulos da franquia Devil May Cry.',																											'2005-02-17','Ação'      ,'PS2', 9.5 ,1 ,3),
 /*Dark cloud 2
 God Hand
 GTA San Andreas
 Resident Evil 4
 Chaos Legion
 Shadow of The colossus
 Kingdom Hearts II
 Bully
 */
/*PS3*/
 /*The Last of Us
Uncharted 2: Among Thieves
God of War III
Demon's Souls
LittleBigPlanet
Metal Gear Solid 4: Guns of the Patriots
Infamous
Gran Turismo 5
Killzone 2
Journey
*/
/*PS4*/
  ('BY9-jWQQHgw',191.59,'Five_Nights_at_Freddys_Security_Breach', 'Steel Wool Studios',	'Five Nights at Freddys: Security Breach é um jogo de terror e sobrevivência ambientado em um enorme centro de entretenimento chamado Mega Pizzaplex. O jogador controla Gregory, uma criança presa dentro do local durante a noite, que precisa escapar dos animatrônicos enquanto desvenda os mistérios do estabelecimento. Diferente dos jogos anteriores da série, Security Breach oferece exploração livre em um ambiente tridimensional, perseguições intensas e diversas áreas para investigar.',																	'2021-12-16','Terror'    ,'PS4', 6.0 ,5 ,5),
  ('CRLglREYEDs',39.99,'Shadow_of_Mordor',						'Monolith Productions',	'Middle-earth: Shadow of Mordor é um jogo de ação e aventura ambientado no universo de O Senhor dos Anéis. O jogador controla Talion, um guardião que retorna da morte em busca de vingança contra as forças de Sauron. O grande destaque do jogo é o Sistema Nêmesis, que permite que inimigos sobrevivam aos confrontos, evoluam em poder e desenvolvam rivalidades únicas com o jogador. Com combate dinâmico, exploração em mundo aberto e elementos de furtividade, o jogo oferece uma experiência marcante para fãs da Terra-média.',									'2014-09-30','Ação'      ,'PS4', 8.5 ,1 ,5),
    ('JnUbg-9v_bE', 39.99, 'Dragon_Ball_Xenoverse 2',               'Bandai Namco',           'Dragon Ball Xenoverse 2 é um RPG de ação baseado no universo de Dragon Ball, onde o jogador cria seu próprio personagem e participa de batalhas icônicas da série, alterando eventos da história original. O jogo possui combates em arena 3D, customização profunda de personagens, habilidades especiais e exploração de cidades como Conton City. Ele também conta com modo online, missões cooperativas e diversos DLCs com personagens adicionais.', '2016-10-25', 'Luta', 'PS4', 8.7, 3, 5),
 /*God of War 4
Marvel's Spider-Man
Horizon Zero Dawn
Persona 5
The Last of Us Part II
Ghost of Tsushima
Detroit: Become Human
*/
/*PS5*/
 /*Marvel's Spider-Man 2
God of War Ragnarök
Demon's Souls
Ratchet & Clank: Rift Apart
Final Fantasy XVI
Astro Bot
Stellar Blade
Horizon Forbidden West
Returnal
Gran Turismo 7
*/
/*XBOX*/
 /*Halo: Combat Evolved
Halo 2
Fable
Ninja Gaiden Black
Project Gotham Racing 2
Jet Set Radio Future
Star Wars: Knights of the Old Republic
Splinter Cell
Dead or Alive 3
The Elder Scrolls III: Morrowind
*/
/*XBOX 360*/
 /*Halo 3
Gears of War
Gears of War 2
Forza Motorsport 4
The Elder Scrolls V: Skyrim
Red Dead Redemption
Fable II
Left 4 Dead
Mass Effect 2
Alan Wake
*/
/*XBOX ONE*/
 /*Halo 5: Guardians
Forza Horizon 4
Forza Horizon 5
Gears 5
Sea of Thieves
Ori and the Will of the Wisps
Minecraft
The Witcher 3: Wild Hunt
Cuphead
Sunset Overdrive
*/
/*XBOX SERIES S*/
 /*Halo Infinite
Forza Horizon 5
Starfield
Gears 5
Ori and the Will of the Wisps
Sea of Thieves
Grounded
Psychonauts 2
Hi-Fi Rush
Senua's Saga: Hellblade II
*/
/*PSP*/
  ('vYYZm2-HKvI',250.00,'Yu-Gi-Oh!_5Ds_Tag_Force_5',				'Konami',               'Yu-Gi-Oh! 5Ds Tag Force 5 (2010, PSP) mergulha no universo da terceira temporada do anime, onde o jogador, como o "Hat Guy", explora Neo Domino City e Satellite. A trama foca no WRGP e no confronto contra os Três Imperadores de Iliaster, que viajam do futuro para destruir a cidade com robôs androides. Junto aos Signers (Yusei, Jack, Crow, entre outros), você luta para impedir essa ameaça, com a narrativa mudando conforme o parceiro de duelo escolhido para o torneio final.', 																		'2010-09-16','Estrategia','PSP', 8.0 ,7 ,11);
 /*God of War: Chains of Olympus
God of War: Ghost of Sparta
Crisis Core: Final Fantasy VII
Monster Hunter Freedom Unite
Grand Theft Auto: Liberty City Stories
Grand Theft Auto: Vice City Stories
Metal Gear Solid: Peace Walker
Daxter
Tekken: Dark Resurrection
*/
SELECT * FROM USUARIO;
SELECT * FROM JOGOS;