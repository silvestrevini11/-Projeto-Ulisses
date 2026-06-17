<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
include __DIR__.'/verificar.php';

// Valida se o id foi passado e é numérico
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    die();
}

$id = (int) $_GET['id'];

// Busca o jogo
$stmt = $conn->prepare('SELECT * FROM jogos WHERE id_jogo = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$jogo = $stmt->fetch(PDO::FETCH_OBJ);

// Jogo não encontrado
if (!$jogo) {
    header('Location: index.php');
    die();
}
?>

<?php
$nomeExibicao = str_replace(["_"], " ", $jogo->nome_jogo);
?>
  <header class="header-telajogo">
        <div">
        <img src="IMG/Banner_<?php echo htmlspecialchars($jogo->nome_jogo); ?>.png"
             alt="<?php echo htmlspecialchars($jogo->nome_jogo); ?>"
             class="jogo-img">
    </div>
  </header>

<section class="jogo-container">

<section class="top-bottom">

<div class="container-video">
  <iframe class="videojogo"
  width='560'
  height='315'
  src="https://www.youtube.com/embed/<?= $jogo->video_jogo?>"
  frameborder='0'
  allowfullscreen>
  </iframe>

<p class="jogo-descricao"><?php echo htmlspecialchars($jogo->descricao_jogo); ?></p>

</section>
<aside class="sidebar">

    <div class="jogo-info">

        <h1 class="jogo-titulo"><?php echo htmlspecialchars($nomeExibicao); ?></h1>

        <div class="jogo-meta">
            <span class="tag"><?php echo htmlspecialchars($jogo->genero); ?></span>
            <span class="tag"><?php echo htmlspecialchars($jogo->plataforma); ?></span>
        </div>

        <p class="jogo-criador">Desenvolvido por: <strong><?php echo htmlspecialchars($jogo->criador_jogo); ?></strong></p>

        <p class="jogo-data">Lançamento: <?php echo date('d/m/Y', strtotime($jogo->data_lancamento)); ?></p>

    <?php if($jogo->preco_jogo == 0){
    ?>        
        <div class="jogo-compra">
            <span class="jogo-preco">Gratis</span>
            <button class="btn-comprar"><a style="text-decoration: none;"href="adicionarCarrinho.php?id=<?= $jogo->id_jogo ?>"><h1 style="font-size:30px">Adicionar ao Carrinho</h1></a></button>
        </div>
        <?php
    }else{
        ?>
        <div class="jogo-compra">
            <span class="jogo-preco">R$ <?php echo number_format($jogo->preco_jogo, 2, ',', '.'); ?></span>
            <button class="btn-comprar"><a style="text-decoration: none;"href="adicionarCarrinho.php?id=<?= $jogo->id_jogo ?>"><h1 style="font-size:30px">Adicionar ao Carrinho</h1></a></button>
        </div>
        <?php
    }?>

        <h1 class="Nota-avaliação">Avaliação:</h1>
        <?php if($jogo->nota_jogo >= 9) {
            ?>
            <div class="Nota-container" style="border-color: #009a1a;background-color: #22ff00d8;">
            <span class="Nota" style = "color: #009a1a"> <?php echo htmlspecialchars($jogo->nota_jogo) ?></span>
            </div>
            
            <?php
            }else if ($jogo->nota_jogo >= 6.5) {
                ?>
                <div class="Nota-container" style="border-color: #538300fe;background-color: #a2ff00e6;">
            <span class="Nota" style = "color: #538300fe"> <?php echo htmlspecialchars($jogo->nota_jogo) ?></span>
            </div>

                <?php
            }else if ($jogo->nota_jogo >= 5) {
                ?>
                <div class="Nota-container" style="border-color: #b2b500;background-color: #eeff00;">
            <span class="Nota" style = "color: #b2b500"> <?php echo htmlspecialchars($jogo->nota_jogo) ?></span>
            </div>

                <?php
            }else if ($jogo->nota_jogo >= 2.5) {
                ?>
                <div class="Nota-container" style="border-color: #b57000;background-color: #ff9d00;">
            <span class="Nota" style = "color: #b57000"> <?php echo htmlspecialchars($jogo->nota_jogo) ?></span>
            </div>

                <?php
            }else if ($jogo->nota_jogo >= 0) {
                ?>
                <div class="Nota-container" style="border-color: #b50000;background-color: #ff0000;">
            <span class="Nota" style = "color: #b50000"> <?php echo htmlspecialchars($jogo->nota_jogo) ?></span>
            </div>

                <?php
            }
         ?>

    </div>

    

</section>


<?php
include __DIR__.'/includes/footer.php';
?>