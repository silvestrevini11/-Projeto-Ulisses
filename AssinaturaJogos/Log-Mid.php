<?php
include __DIR__.'/includes/head.php';
if(!isset($_SERVER['REQUEST_METHOD'])==="POST"){
    header('Location:index.php');
    die();
}
if(empty($_POST['txt_login']) || empty($_POST['txt_password'])){
  header('Location:index.php');
    die();
}
include __DIR__.'/database.php';
$login=$_POST['txt_login'];
$senha=$_POST['txt_password'];
$stmt=$conn->prepare('select * from usuario where login_user=:login && senha_user=:senha');
$stmt->bindParam(':login',$login);
$stmt->bindParam(':senha',$senha);
$stmt->execute();
//contando a quantidade de respostas
$quant=$stmt->rowCount();
if($quant!=1){
    header('Location:index.php?login=false');
    die();
}else{
$row=$stmt->fetch(PDO::FETCH_OBJ);
session_start();
$_SESSION['usuario']=[

  'id'=>$row->id_user,
  'nome'=>$row->nome_user
];
}
header('Location:Perfil.php');
?>