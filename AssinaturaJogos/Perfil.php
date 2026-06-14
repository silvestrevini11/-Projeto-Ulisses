<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
include __DIR__.'/verificar.php';
?>

<section class="All-perfil">
    <?php
echo '<h1 class="titulo_perfil">'.'Bem Vindo(a) '.$_SESSION['usuario']['nome'].'</h1>';
    ?>
    </section>
    <!-- CABEÇARIO --> 
    <header class="header">
           <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

        <div class="header-content">
            <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
        </div>
<section class="perfil-options">
<a  href="logout.php" class="link">Sair</a>
<a  href="form-update.php" class="link">Alterar</a>
<a href="delete-user.php" class="link" onclick="return confirmarExclusao(event)">Excluir</a>

<script>
function confirmarExclusao(event) {
    const certeza = confirm("Tem certeza absoluta que deseja excluir sua conta? Esta ação não pode ser desfeita.");
    if (!certeza) {
        event.preventDefault(); // Cancela o clique se ele desistir
        return false;
    }
}
</script>
<!--<a  href="delete-user.php" class="link">Excluir</a>-->
</section>
    </header>
<!-- CABEÇARIO --> 



<?php
include __DIR__.'/includes/footer.php'
?>