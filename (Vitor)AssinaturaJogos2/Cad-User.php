<?php
include __DIR__.'/includes/head.php';
?>

<section class="Sec-Cadastro-tabela">
<form class="Cadastro-tabela" action="insert-user.php" method="post">

    <div class="form-cad-login">
    <label class="label-cad">>Login:</label>
    <input type="text" name="login_txt" maxLength="50">
    </div>

    <div class="form-cad-senha">
        <label class="label-cad">>Senha:</label>
        <input type="password" name="senha_txt" maxLength="50">
    </div>

    <div class="form-cad-nome">
        <label class="label-cad">>Nome:</label>
        <input type="text" name="nome_txt" maxLength="50">
    </div>

    <div class="form-cad-email">
        <label class="label-cad">>E-mail</label>
        <input type="email" name="email_txt" maxLength="50">
    </div>

    <input class="btn" class="cad-ult-button" type="submit" value="Cadastrar">
</form>
</section>

  
<?php
include __DIR__.'/includes/footer.php';
?>