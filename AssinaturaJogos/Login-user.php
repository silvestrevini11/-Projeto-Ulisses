<?php
include __DIR__.'/includes/head.php';
?>

<section class="Sec-Login-tabela">


<form class="Cadastro-tabela" action="Log-Mid.php" method="post">

    <h1 class="login_titulo">Login</h1>

<div class="FORM-INPUT">
    <div class="form-log-senha">
    <label class="label-cad">>Login:</label>
    <input type="text" name="txt_login" placeholder="Login" require>
    </div>

    <div class="form-log-senha">
        <label class="label-cad">>Senha:</label>
        <input type="password" name="txt_password" placeholder="Senha" require>
    </div>
   

    
   <button class="btn-login" type="submit" >Login</button>
    
</div>

</form>

<?php
include __DIR__.'/includes/footer.php';
?>
