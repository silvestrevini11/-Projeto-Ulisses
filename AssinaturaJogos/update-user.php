<?php
include __DIR__.'/database.php';
session_start();
$stmt=$conn->prepare('update usuario set login_user=:login, senha_user=:senha, nome_user=:nome, email_user=:email where id_user=:id');
$stmt->bindParam(':login',$_POST['login_txt']);
$stmt->bindParam(':nome',$_POST['nome_txt']);
$stmt->bindParam(':senha',$_POST['senha_txt']);
$stmt->bindParam(':email',$_POST['email_txt']);
$stmt->bindParam(':id',$_SESSION['usuario']['id']);
$stmt->execute();
header('Location:perfil.php');
?>