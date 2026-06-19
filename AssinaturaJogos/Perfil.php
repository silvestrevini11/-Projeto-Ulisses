<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
include __DIR__.'/verificar.php';
?>

<?php
$idUser = $_SESSION['usuario']['id'];
$sql = $conn->prepare("SELECT * FROM usuario WHERE id_user = :id");
$sql->execute(['id' => $idUser]);
$usuario = $sql->fetch();
?>

<section class="All-perfil" style="margin-top:140px">

    <?php
echo '<h1 class="titulo_perfil">'.'Seja Bem Vindo(a) '.$_SESSION['usuario']['nome'].'</h1>';
echo '<h2>Saldo: R$ '.number_format($usuario['saldo'], 2, ',', '.').'</h2>';
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
<a  href="verCarrinho.php" class="link">Ver Carrinho</a>
<a  href="logout.php" class="link">Sair</a>
<a  href="form-update.php" class="link">Alterar</a>
<a  href="Dinheiro-insert.php" class="link">Inserir Dinheiro</a>
<a  href="delete-user.php" class="link" onclick="return confirmarExclusao(event)">Excluir</a>





<script>
function confirmarExclusao(event) {
    const certeza = confirm("Tem certeza absoluta que deseja excluir sua conta? Esta ação não pode ser desfeita.");
    if (!certeza) {
        event.preventDefault();
        return false;
    }
}
</script>
</section>
    </header>
<!-- CABEÇARIO --> 

<?php
include __DIR__.'/includes/footer.php'
?>