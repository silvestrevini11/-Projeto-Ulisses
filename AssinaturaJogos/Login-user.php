<?php
include __DIR__.'/includes/head.php';
?>

<section class="Sec-Login-tabela">


<form class="Cadastro-tabela" action="Log-Mid.php" method="post">

<h1 class="login_titulo">Login</h1>

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

<?php
include __DIR__.'/includes/footer.php';
?>
