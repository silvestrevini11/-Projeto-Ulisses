<?php
session_start();
include __DIR__.'/database.php';

$idJogo = (int)($_GET['id'] ?? 0);
$idUser = $_SESSION['usuario']['id'];

$sql = $conn->prepare("DELETE FROM carrinho WHERE id_user = :idUser AND id_jogo = :idJogo");

$sql->execute(['idUser' => $idUser,'idJogo' => $idJogo]);

header("Location: verCarrinho.php");
exit;