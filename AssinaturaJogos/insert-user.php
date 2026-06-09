<?php
include __DIR__.'/includes/head.php';
if(!isset($_SERVER['REQUEST_METHOD'])==="POST"){
    header('Location:form-usuario.php');
    die();
}
// caso deseje verificar se cada campo foi preenchido
// if(empty($_POST['name']),empty($_POST['name']))
include __DIR__.'/database.php';
$login=$_POST['login_txt'];
$nome=$_POST['nome_txt'];
$senha=$_POST['senha_txt'];
$email=$_POST['email_txt'];
//variaveis statment para preparar a
$stmt=$conn->prepare('insert into usuario (nome_user, login_user, senha_user, email_user)values(?,?,?,?)');
$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$login);
$stmt->bindParam(3,$senha);
$stmt->bindParam(4,$email);
$stmt->execute();

header('Location: Login-user.php');

include __DIR__.'/includes/footer.php';
?>