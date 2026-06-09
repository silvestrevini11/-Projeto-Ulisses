<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';

// Valida se o id foi passado e é numérico
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    die();
}

$id = (int) $_GET['id'];

// Busca o jogo com PDO (seguro contra SQL Injection)
$stmt = $conn->prepare('SELECT * FROM jogos WHERE id_jogo = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$jogo = $stmt->fetch(PDO::FETCH_OBJ);

// Jogo não encontrado — volta para index
if (!$jogo) {
    header('Location: index.php');
    die();
}
?>

<section class="jogo-container">

    <div class="jogo-capa">
        <img src="IMG/<?php echo htmlspecialchars($jogo->nome_jogo); ?>.png"
             alt="<?php echo htmlspecialchars($jogo->nome_jogo); ?>"
             class="jogo-img">
    </div>

    <div class="jogo-info">

        <h1 class="jogo-titulo"><?php echo htmlspecialchars($jogo->nome_jogo); ?></h1>

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

<style>
    .jogo-container {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        max-width: 1100px;
        margin: 140px auto 60px auto;
        padding: 0 40px;
    }

    .jogo-capa {
        flex-shrink: 0;
    }

    .jogo-img {
        width: 320px;
        height: 420px;
        object-fit: cover;
        box-shadow: 0 0 30px rgba(0, 0, 255, 0.4);
        border-radius: 6px;
    }

    .jogo-info {
        display: flex;
        flex-direction: column;
        gap: 16px;
        color: #e9e9e9;
    }

    .jogo-titulo {
        font-size: 2.5rem;
        color: #ffffff;
        text-shadow: 0 0 20px rgba(100, 100, 255, 0.6);
        margin: 0;
    }

    .jogo-meta {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .tag {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        color: #a0c4ff;
    }

    .jogo-criador,
    .jogo-data {
        font-size: 1rem;
        color: #b0b0b0;
        margin: 0;
    }

    .jogo-criador strong {
        color: #e9e9e9;
    }

    .jogo-descricao {
        font-size: 1.05rem;
        line-height: 1.7;
        color: #cccccc;
        max-width: 560px;
        margin: 0;
    }

    .jogo-compra {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-top: 10px;
    }

    .jogo-preco {
        font-size: 2rem;
        font-weight: bold;
        color: #64ff46;
        text-shadow: 0 0 10px rgba(100, 255, 70, 0.4);
    }

    .btn-comprar {
        min-width: 160px;
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .jogo-container {
            flex-direction: column;
            align-items: center;
            margin-top: 120px;
        }

        .jogo-img {
            width: 260px;
            height: 340px;
        }

        .jogo-info {
            text-align: center;
            align-items: center;
        }
    }
</style>

<?php
include __DIR__.'/includes/footer.php';
?>