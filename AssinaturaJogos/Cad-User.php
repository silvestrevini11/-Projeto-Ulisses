<section class="body_login">
<?php
include __DIR__.'/includes/head.php';
?>

<div class="starsEl" id="stars"></div>


<header class="header">
    <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

    <div class="header-content">
        <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
    </div>
</header>

<div class="login-card">
  <div class="login-content">
 
 
    <img class="logoimg" src="IMG/Checkpoint.png" alt="">
    <h1>CADASTRAR-SE</h1>
    <p class="subtitle">MELHOR-LOJA-DE-GAMES</p>
 
    <div class="form-group">
 <form class="Cadastro-tabela" action="insert-user.php" method="post">
    
      <div class="field">
        <label>LOGIN</label>
        <input type="text" placeholder="digite seu ID" name="login_txt" require>
      </div>
 
      <div class="field">
        <label>SENHA:</label>
        <input type="password" placeholder="••••••••" name="senha_txt"  require>
      </div>

      <div class="field">
        <label>NOME:</label>
        <input type="text" placeholder="digite seu nome" name="nome_txt" require>
      </div>

      <div class="field">
        <label>E-MAIL:</label>
        <input type="email" placeholder="seu.email@dominio.com" name="email_txt"  require>
      </div>
 
      <button class="btn-connect" type="submit">-Cadastrar-</button>
      </form>
    </div>
  </div>
</div>

</section>
<?php
include __DIR__.'/includes/footer.php';
?>


<?php
include __DIR__.'/includes/head.php';
?>