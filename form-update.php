<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/select-update.php';
?>

        <header class="header">
    <div class="logo">
      <img class="logo" src="IMG/Carrinho.png" alt="">
    </div>

        <div class="header-content">
            <a href="index.php" style="text-decoration:none;"><h1 class="titulo"> CH<span class="highlight">3</span>CKPOINT </h1></a>
        </div>
            </header>


<section class="Sec-Cadastro-tabela" style="margin-top:140px">
<form class="Cadastro-tabela" action="update-user.php" method="post">

    <h1 class="Cadastro_titulo">Alterar</h1>

<div class="FORM-INPUT">

    <div class="form-cad-login">
    <label class="label-cad">Login:</label>
    <input type="text" name="login_txt" maxLength="50">
    </div>

    <div class="form-cad-senha">
        <label class="label-cad">Senha:</label>
        <input type="password" name="senha_txt"  maxLength="50">
    </div>

    <div class="form-cad-nome">
        <label class="label-cad">Nome:</label>
        <input type="text" name="nome_txt" maxLength="50">
    </div>

    <div class="form-cad-email">
        <label class="label-cad">E-mail:</label>
        <input type="email" name="email_txt" maxLength="50">
    </div>

</div>

   <button class="btn-login" type="submit" >Alterar</button>
</form>
</section>

  
<?php
include __DIR__.'/includes/footer.php';
?>