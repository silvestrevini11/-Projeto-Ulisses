<?php
include __DIR__.'/includes/head.php';
?>

<div class="stars" id="stars"></div>


<header class="header">
    <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

    <div class="header-content">
        <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
    </div>
</header>


<section class="Sec-Login-tabela"style="margin-top:140px">

  

<form class="Cadastro-tabela" action="Log-Mid.php" method="post">

<h1 class="login_titulo">Login</h1>

<div class="card">
    
<div class="FORM-INPUT">
    <div class="form-log-senha">
    <label class="label-cad">LOGIN: </label>
    <input type="text"  classe="txt-login" name="txt_login" require>
    </div>

    <div class="form-log-senha">
        <label class="label-cad">SENHA:  </label>
        <input type="password" classe="txt-password"name="txt_password"  require>
    </div>
    
   <button class="btn-login" type="submit" >Login</button>
    
</div>
</form>
</section>

<script>
    // Gera estrelas aleatórias no fundo
    const starsEl = document.getElementById('stars');
    for (let i = 0; i < 80; i++) {
      const s = document.createElement('div');
      s.className = 'star';
      s.style.left = Math.random() * 100 + '%';
      s.style.top  = Math.random() * 100 + '%';
      s.style.animationDelay    = Math.random() * 2 + 's';
      s.style.animationDuration = (1.5 + Math.random() * 2) + 's';
      starsEl.appendChild(s);
    }
  </script>

<?php
include __DIR__.'/includes/footer.php';
?>
