<?php
include __DIR__.'/includes/head.php';
?>

<section class="Sec-Login-tabela">
<form class="Cadastro-tabela" action="Log-Mid.php" method="post">

    <h1 style = "color: black; flexbox:;">Login</h1>

    <div class="form-cad-login">
    <label class="label-cad">Login:</label>
    <input type="text" name="txt_login" require>
    </div>

    <div class="form-cad-senha">
        <label class="label-cad">Senha:</label>
        <input type="password" name="txt_password" require>
    </div>
    
   <button class="btn-">Login</button>
    
</form>

<?php
include __DIR__.'/includes/footer.php';
?>
