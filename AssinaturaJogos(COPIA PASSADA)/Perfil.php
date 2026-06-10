<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
include __DIR__.'/verificar.php'
?>

<section class="boas-vindas">
    <?php
echo '<h1>'.'Bem Vindo '.$_SESSION['usuario']['nome'].'</h1>';
    ?>
</section>
<a href="logout.php" class="link-sair">Sair</a>
<a href="form-update.php" class="link-alterar">Alterar</a>
<a href="delete-user.php" class="link-excluir">Excluir</a>

<?php
include __DIR__.'/includes/footer.php'
?>