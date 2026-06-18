<?php
session_start();
include __DIR__.'/database.php';

$idJogo = (int)($_GET['id'] ?? 0);
$idUser = $_SESSION['usuario']['id'];

$sql = $conn->prepare("SELECT preco_jogo FROM jogos WHERE id_jogo = :idJogo");
$sql->execute(['idJogo' => $idJogo]);
$jogo = $sql->fetch();

$preco = $jogo['preco_jogo'];
$sql = $conn->prepare("SELECT saldo FROM usuario WHERE id_user = :idUser");
$sql->execute(['idUser' => $idUser]);
$usuario = $sql->fetch();

if ($usuario['saldo'] < $preco) {
     header("Location: verificarSaldo.php");
     die;
}

$sql = $conn->prepare("UPDATE usuario SET saldo = saldo - :preco WHERE id_user = :idUser");
$sql->execute(['preco' => $preco, 'idUser' => $idUser]);

$sql = $conn->prepare("DELETE FROM carrinho WHERE id_user = :idUser AND id_jogo = :idJogo");
$sql->execute(['idUser' => $idUser,'idJogo' => $idJogo]);

header("Location: verCarrinho.php");
exit;