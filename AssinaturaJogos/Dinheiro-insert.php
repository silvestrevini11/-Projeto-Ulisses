<?php
include __DIR__.'/database.php';
include __DIR__.'/includes/head.php';
?>

    <header class="header">
           <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

        <div class="header-content">
            <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
        </div>
</header>

<section class="din-card">
<form class="din-tabela" action="Dinheiro-conta.php" method="post">
      <div class="din-insert">
        <label>INSERIR DINHEIRO</label>
        <input type="number" placeholder="Coloque uma quantidade de dinheiro" name="dinheiro_num" step="0.01" require>
      </div>

      <button class="btn-connect" type="submit">-INSERIR-</button>
</form>
</section>

<?php
include __DIR__.'/includes/footer.php';
?>