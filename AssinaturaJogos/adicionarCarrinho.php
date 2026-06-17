<?php
include __DIR__."/database.php";
session_start();

$idUser = $_SESSION['usuario']['id'];
$idJogo = $_GET['id'];

$sql = $conn->prepare("INSERT INTO carrinho(id_user, id_jogo) VALUES (?,?)");

$sql->execute([$idUser,$idJogo]);

header("Location: index.php");
?>