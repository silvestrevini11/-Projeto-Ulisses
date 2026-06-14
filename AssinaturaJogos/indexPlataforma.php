<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
?>

<!-- CABEÇARIO --> 
    <header class="header">
    <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

        <div class="header-content">
            <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
        </div>

        <!-- From Uiverse.io by adamgiebl --> 

<div class="input-wrapper">
  <input type="text" placeholder="PESQUISAR..." name="text" class="input">
</div>

<div class="butões-reg">
    <a href="Login-user.php"><input class="btn" type="button" value="Login"></a>    
    <a href="Cad-User.php"><input class="btn" type="button" value="Cadastrar-se"></a>
</div>
    </header>
<!-- CABEÇARIO -->
<section style="display: flex; justify-content:right">
<div style="margin-top: 150px;" class="btn-plat">
<a href="plataforma.php"><h1 class="btn">Plataformas</h1></a>
<a href="genero.php"><h1 class="btn">Generos</h1></a>
</div>
</section>
 

    <section class="Games">
       <!-- Avisando isso aqui porque bem provavel que ninguem vai entender direito se eu tentar explicar na sala :P-->
     <!-- O Codigo abaixo serve para colocar os jogos de maneira mais facil, fazendo a gente apenas precisar colocar a foto na pasta + as informações no SQL denada-->
      <!-- não precisa mexer nesse codigo para melhorar a maneira de colocar jogos, a não ser que queira colocar umas decorações a mais ou mais informações-->
       <!-- AGORA PARA A EXPLICAÇÃO, APENAS LEIA OS COMENTARIOS -->
<?php
$id = (int) $_GET['id'];
$sql = $conn->query("SELECT * FROM jogos where id_plataforma = $id"); // busca os jogos, pegando a conexão e colocando na variavel SQL
$jogos = $sql->fetchAll(); //os jogos pegam tudo do sql, basicamente todas as colunas do jogos estão aqui
?>

<?php
foreach ($jogos as $jogo) { //voces sabem C# então não preciso explicar o "for" muito menos o "foreach" que é mais facil
    $nomeExibicao = str_replace(["_"], " ", $jogo['nome_jogo']); //troca os traços e underlines por espaços em branco, para não estragar os nomes e deixar com espaço
?>
<script src="js/busca.js"></script> 
    <div class="capa">
        <div class="cima-capa"><h1></h1></div>


        <a href="JogoTela.php?id=<?= $jogo['id_jogo'] ?>"> <!--manda pro JogoTela com o ID do jogo de agora-->
            <img class="fotoC" src="IMG/<?php echo $jogo['nome_jogo']; ?>.png"><!--pega a foto do nome do jogo de agora e adiciona ".PNG" TODAS AS FOTOS DEVEM SER .PNG AQUI A GENTE NÃO COAGULA COM JPG-->
        </a>

        <p class="Plataforma">
            <?php echo $jogo['plataforma']; ?><!--Pega a plataforma do jogo e exibe-->
        </p>

        <p class="legenda">
            <?php echo htmlspecialchars($nomeExibicao); ?><!--Pega o nome do jogo e exibe-->
        </p>


        <p class="preço">
            R$ <?php echo $jogo['preco_jogo']; ?><!--Pega o preço do jogo e exibe-->
        </p>

    </div>
<?php
}
?>
    </section>
</body>
</html>

<!--
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠋⢨⠹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⣼⠸⡀⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⢸⣇⢧⡀⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⡏⣝⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⣿⣿⡿⠿⠁⢸⣿⡸⣿⣦⠈⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣷⢹⣷⣜⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⣛⣯⣭⣶⣶⣶⣶⠿⠤⠀⠀⠁⣸⢿⣧⢻⣿⣷⣄⢩⣭⣭⣭⣝⣉⡛⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣧⠙⣿⣧⡙⠿⣿⣿⣿⣿⣿⡿⢋⣡⣼⣿⣿⣿⡿⠟⣋⡭⠔⢚⣩⣤⣶⡆⣿⢸⣿⣆⢻⣿⣿⣦⠰⣶⣶⣤⠌⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣇⠈⢿⣿⣷⣮⡙⠻⣿⡏⣀⠻⣿⠿⢟⠋⠁⠀⣨⣤⣶⣿⣿⣿⣿⣿⡇⢸⢸⣿⣿⣆⢻⣿⣿⣇⠙⠿⠋⠀⡄⠘⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⠈⣦⠹⣿⣿⣿⣦⡌⠈⣙⠓⢒⠊⡁⠰⠾⠇⠀⠹⣿⣿⡿⠿⠛⡋⠁⠘⡇⢿⣿⣿⣆⢻⣿⣿⡄⠀⠀⣼⣿⠀⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⡀⢻⢳⣌⠻⣿⣿⣿⡄⣿⠇⡿⡇⢿⣧⡐⣤⡆⠀⠉⠁⢀⣠⣤⣶⣾⡆⢻⡌⢿⣿⣿⡌⣿⣿⠃⠀⠸⠿⢿⣇⠈⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣧⠈⢆⠻⣷⡘⢿⣿⡇⠟⡰⢁⢻⣦⣬⡤⢸⣧⠀⠀⣾⣿⣿⣿⣿⣿⣿⡈⢿⣌⠻⣿⢃⣿⡟⣠⢸⣶⣄⠲⣤⣄⠐⣭⡛⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣧⡈⢷⣜⠻⣎⢻⡇⠺⣇⠻⢠⣼⠋⡀⢸⡋⠀⣸⣿⣿⣿⠿⠟⣋⣩⡀⠈⣿⣷⣄⣼⣿⣥⣿⡺⢿⣿⣷⡈⢿⣷⡈⢿⣧⡉⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⠗⠀⠙⢷⣦⠄⠀⠳⠘⣆⣿⠁⠚⡠⠟⠁⣰⠿⠛⣉⡄⠒⢿⣿⣿⠿⣆⢻⣿⣿⣿⡿⣿⣿⣿⣶⡌⠙⢿⡄⢿⣿⡌⢻⣿⣦⡈⠻⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⢏⣤⣎⠀⠀⢡⣾⡏⠃⠀⣿⡇⢠⠬⠁⣀⣠⣴⣾⣿⣿⣿⡆⠘⣿⣿⣧⢹⡎⣿⣿⣿⣷⣜⢿⣿⣿⣿⣦⡀⠀⠘⣿⣿⡌⣿⣿⣿⣆⠙⣿⣿⣿⣿⣿⣿
⣿⣿⣿⠏⣾⠋⠁⣰⠂⣾⡟⣿⣷⣶⣶⣶⣶⣾⣿⣿⡏⢿⣿⣿⣿⣿⣿⡄⣿⣿⣿⣇⢷⠘⣿⣿⣿⣿⣧⡙⢿⣿⣿⣿⣆⠀⢹⣿⣧⢸⣿⣿⣿⣆⠘⣿⣿⣿⣿⣿
⣿⣿⣿⠀⠼⠂⠠⠋⣼⡿⢰⣿⣿⣿⣿⣿⣿⣿⣿⡏⣿⡌⣿⣿⣿⣿⣿⣧⢸⢸⣿⣿⢸⠀⠘⣿⣿⣿⣿⣷⡈⢻⣿⣿⣿⣧⠘⣿⣿⡀⣿⣿⣿⣿⣆⠘⣿⣿⣿⣿
⣿⡿⠋⢄⠀⠀⣠⣾⣿⢇⣿⢃⣿⣿⣿⣿⣿⣿⣿⣷⢻⡇⡍⢿⣿⣿⢹⣿⠈⢸⣿⣿⢸⢸⣆⠈⢿⣿⣿⣿⣿⡀⠹⣿⣿⣿⡆⢿⣿⡇⠙⣿⣿⣿⣿⡀⢸⣿⣿⣿
⣿⡀⠲⠏⠀⠘⣿⣿⣿⢸⡏⣼⣿⣿⣿⣿⣿⣿⣼⣿⢸⡇⣿⢸⣿⣿⡎⣿⡆⢸⣿⣿⠀⠸⣿⣷⣄⠙⢿⣿⣿⣷⠀⠙⣿⣿⡇⢸⣿⡇⣰⠸⣿⣿⣿⣇⠀⣿⣿⣿
⣿⣷⠀⢰⠃⠀⣿⢿⣿⢸⢡⣿⠋⣿⣿⣿⡟⣿⢸⡇⡈⡇⢸⢸⣿⣿⡇⣿⠀⢸⣿⣿⠀⣀⠈⠻⠿⢷⣦⡙⢿⣿⣧⠁⢹⣿⡇⠸⠿⠇⢸⣇⢻⣿⣿⢻⠀⣿⣿⣿
⣿⣿⣧⡀⠀⢸⡟⢸⡇⢸⢸⣿⢸⣿⣿⣿⡇⡏⢸⡇⡇⡇⠸⢸⣿⣿⣇⡟⠀⢈⣽⡿⠀⣿⣧⡀⠘⣈⠙⢿⣷⣭⣿⡇⠀⠡⣶⣿⣿⣿⣶⣤⠘⢿⣿⡜⡅⢸⣿⣿
⣿⣿⣿⡇⢸⢼⡇⢸⡇⠈⠈⣿⢸⣿⣿⣿⣇⡇⠸⢰⡇⠃⡄⢸⣿⡏⠙⠁⠄⢼⠿⠃⣠⣿⣿⣿⣄⠈⣁⣀⠉⠛⠿⠃⣼⣿⣿⣍⠟⠉⣀⣤⣤⡀⠻⢸⡇⢸⣿⣿
⣿⣿⣿⣧⠀⠸⡇⠘⡇⡆⠀⠹⠀⢿⣿⣿⡿⠇⠀⠘⡇⢰⠃⠘⠁⠀⠀⣀⠀⠀⠀⠀⠈⠙⠿⣿⣿⣿⣦⣝⡻⠶⠀⣾⣿⣿⣿⠋⢠⣾⣿⢻⣿⣿⣦⢸⡇⢸⣿⣿
⣿⣿⣿⣿⡄⡄⢿⡄⠁⠻⠀⠆⠀⠘⢿⠿⠛⠀⠠⠀⠁⠀⠀⠀⣴⣶⡾⠋⠀⠀⠀⠀⠀⠀⠀⠀⠙⢿⣿⣿⣿⡟⢸⣿⣿⣿⠇⢀⣾⣿⣿⠇⣿⣿⣿⡈⠃⢸⣿⣿
⣿⣿⣿⣿⣿⡀⠈⠻⠀⠘⠃⠀⠀⠀⠀⠀⠀⠀⢤⣤⡆⠀⠀⣾⣿⣿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣀⣀⣀⡀⣼⣿⣿⣿⠀⢸⣿⣶⣶⣾⣿⣿⣿⡇⠀⣾⣿⣿
⣿⣿⣿⣿⣿⣿⣌⠀⠀⣠⣶⣿⠋⠀⠀⠀⠀⠀⠈⠉⠁⠀⠀⠙               ⣿⣿⡇⣿⣿⣿⣿⠀⢸⣿⣿⠿⠛⣋⣉⠛⡇⠀⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡏⠀⠀⢿⣿⡇⠀⠀⠀⠀⠀⠀⠀⣿⣶⡀⠀⠺⠷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣇⢸⣿⣿⣿⡀⠸⠋⣡⣶⣿⣿⣿⡇⠁⣰⣬⡻⣿
⣿⣿⣿⣿⣿⣿⠀⠀⠀⠘⣿⡁⠀⠀⠀⠀⠀⠀⠀⣿⣿⣷⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣾⣿⣿⣿⣿⣿⣿⡈⣿⠟⢋⠁⠀⠸⣿⣿⣿⣿⣿⠇⠀⢿⣿⣿⣦
⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠻⠿⠂⠀⠀⠀⠀⠀⣠⣿⣿⣿⣿⣿⣶⣤⣤⣀⣀⣠⣤⣴⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠁⣼⣿⣷⣆⠀⠙⣿⣿⣿⠃⡀⠀⠀⠈⢛⣯
⣿⣿⣿⣿⣿⣿⣿⣷⡀⢀⠀⠀⠀⠀⠀⢀⣴⡟⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠃⠄⠘⢿⣿⣿⣷⣄⡀⠉⢁⣴⠁⢀⣤⣤⣪⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⣁⠀⣄⢠⣶⣿⣿⣿⣌⣻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⢠⡶⠄⣠⣈⠙⠛⡉⠀⡐⣿⡏⠀⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣆⠈⠸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⡄⠀⠀⣿⡏⠈⣡⣴⣿⠁⣿⡇⢸⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⠀⢻⣿⣿⣿⣿⣿⣭⣷⣶⣶⣶⣮⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⠀⠀⣴⠀⣿⠁⣾⣿⠹⣿⢸⣿⡇⢰⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⠈⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠁⠀⣰⠀⣿⠀⣿⢀⣿⣿⡀⣿⡄⣿⡇⢸⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⡀⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠋⢀⣴⣿⣿⠀⣿⡄⣿⢸⣿⣿⡇⣿⡇⣿⡇⢸⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠈⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⣉⣤⣾⣿⣿⣿⣿⠀⣿⣇⢹⠀⢹⣿⡇⢹⣧⢸⡇⢸⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⠰⣿⡆⡙⢿⣿⣿⣿⣿⣿⣿⣿⡿⠛⣉⣴⣾⣿⣿⣿⣿⣿⣿⣿⠀⣿⣿⡀⠀⠀⣿⡇⡈⣿⡄⡇⢸⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀⣿⡇⡇⢠⠙⠻⠿⠟⠋⣩⣴⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠀⡉⣿⣷⠀⠀⠙⢳⣷⢹⣷⡀⠀⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⢰⣿⠃⡇⢸⠀⣷⣿⡏⣤⣉⣛⣛⠛⠻⠿⢿⣿⡿⢋⣩⣤⣶⣾⡿⠇⠈⠀⠀⠀⠀⢸⢿⣇⢻⣷⡀⢹⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠀⣿⡿⢰⠇⠈⠘⠛⠛⠃⠙⠻⢿⣿⣿⣿⣷⣶⣦⠁⣾⣿⣿⡟⠉⠀⣤⠄⠀⠀⠀⠀⠀⠇⣿⣎⢻⣷⡄⠹⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠃⣸⣿⠃⠏⡀⠀⣶⡾⠋⠀⠀⠀⠀⠀⠉⠛⢿⣿⣿⡇⣿⡿⠋⠀⠀⠀⠁⠀⠀⠀⠀⠀⠈⠦⠙⢿⣆⠻⣿⣄⠘⢿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⢠⣿⠃⠀⡐⠁⠀⠈⠰⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⠇⠙⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⣷⣦⣄⡈⠳⠌⢻⣦⡈⢻
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⢠⠟⠁⣀⣤⣴⣾⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠺⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⣿⣿⣿⣷⣶⣶⣬⣭⣀
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣉⣁⣤⣤⣶⣾⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠔⣲⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿-->
