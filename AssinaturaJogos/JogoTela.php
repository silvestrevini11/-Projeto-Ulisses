<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';

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

<section class="jogo-container">

    <div class="jogo-capa">
        <img src="IMG/<?php echo htmlspecialchars($jogo->nome_jogo); ?>.png"
             alt="<?php echo htmlspecialchars($jogo->nome_jogo); ?>"
             class="jogo-img">
    </div>

    <div class="jogo-info">

        <h1 class="jogo-titulo"><?php echo htmlspecialchars($nomeExibicao); ?></h1>

        <div class="jogo-meta">
            <span class="tag"><?php echo htmlspecialchars($jogo->genero); ?></span>
            <span class="tag"><?php echo htmlspecialchars($jogo->plataforma); ?></span>
        </div>

        <p class="jogo-criador">Desenvolvido por: <strong><?php echo htmlspecialchars($jogo->criador_jogo); ?></strong></p>

        <p class="jogo-data">Lançamento: <?php echo date('d/m/Y', strtotime($jogo->data_lancamento)); ?></p>

        <p class="jogo-descricao"><?php echo htmlspecialchars($jogo->descricao_jogo); ?></p>

        <div class="jogo-compra">
            <span class="jogo-preco">R$ <?php echo number_format($jogo->preco_jogo, 2, ',', '.'); ?></span>
            <button class="btn-comprar">Comprar</button>
        </div>

    </div>

</section>


<?php
include __DIR__.'/includes/footer.php';
?>