<?php
session_start();
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
$idUser = $_SESSION['usuario']['id'];
$sql = $conn->prepare("SELECT * FROM usuario WHERE id_user = :id");
$sql->execute(['id' => $idUser]);
$usuario = $sql->fetch();
?>

<header class="header">
    <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

    <div class="header-content">
        <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
    </div>
    <?php
         echo '<h2 class="saldo">Saldo: R$ '.number_format($usuario['saldo'], 2, ',', '.').'</h2>';
    ?>
</header>

<section class="Games_car" style="margin-top:140px">

<?php
$idUser = $_SESSION['usuario']['id'];
$sql = $conn->prepare("SELECT * FROM carrinho c JOIN jogos j ON c.id_jogo = j.id_jogo WHERE c.id_user = ?"); 
$sql->execute([$idUser]);
$jogos = $sql->fetchAll(); 
?>
<section class="Games_car">
<?php

foreach ($jogos as $jogo) { 
    $nomeExibicao = str_replace(["_"], " ", $jogo['nome_jogo']); 
?>

    <section class="Game_car">

        <div class="Game_back">

            <div class="Game_img">
                <a href="JogoTela.php?id=<?= $jogo['id_jogo'] ?>"> 
                    <img class="img_Game" src="IMG/<?php echo $jogo['nome_jogo']; ?>.png">
                </a>
            </div>

            <div class="Game_name">
                <p class="legenda_game">
                    <?php echo htmlspecialchars($nomeExibicao); ?>
                </p>
            </div>

            <div class="Game_preco">
                        <?php if($jogo['preco_jogo'] < 1){
            ?>
        <p class="preço_game">Gratis</p>
        <?php
        }else{?>
        <p class="preço_game">
            R$ <?php echo $jogo['preco_jogo']; ?>
        </p>
        <?php
        }?>
            </div>

            <div class="Aceitar">
                <a href="comprar.php?id=<?= $jogo['id_jogo'] ?>"><input type="button" class="car_btn" value="Comprar" style="background-color: green"></a>
            </div>
            <div class="Rejeitar">
                <a href="remover.php?id=<?=$jogo['id_jogo']?>"><input type="button" class="car_btn" value="Remover" style="background-color: red"></a>
            </div>

        </div>
    </section>
    </div>
<?php
}
?>
    </section>
<?php
include __DIR__.'/includes/footer.php';
?>