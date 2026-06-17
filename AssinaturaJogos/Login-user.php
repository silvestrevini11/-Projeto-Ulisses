<section class="body_login">
<?php
include __DIR__.'/includes/head.php';
?>

<div class="starsEl" id="stars"></div>


<header class="header">
    <div class="logo">
      <!--<img class="logo" src="IMG/Checkpoint.png" alt="">-->
    </div>

    <div class="header-content">
        <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
    </div>
</header>

<div class="login-card">
  <div class="login-content">
 
    <div class="status">
      <div class="status-dot"></div>
    </div>
 
    <img class="logoimg" src="IMG/Checkpoint.png" alt="">
    <h1>LOGIN</h1>
    <p class="subtitle">MELHOR-LOJA-DE-GAMES-DA-ÍNDIA</p>
 
    <div class="form-group">
 <form class="Cadastro-tabela" action="Log-Mid.php" method="post">
    
      <div class="field">
        <label>ID-DO-JOGADOR</label>
        <input type="text" placeholder="digite seu ID" name="txt_login" require>
      </div>
 
      <div class="field">
        <label>SENHA:</label>
        <input type="password" placeholder="••••••••" name="txt_password"  require>
      </div>
 
      <button class="btn-connect" type="submit">-LOGIN-</button>
      </form>
    </div>
  </div>
</div>

</section>
<?php
include __DIR__.'/includes/footer.php';
?>
