<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Dinheiro-insert.php');
    exit();
}

include __DIR__.'/database.php';

$saldo = $_POST['dinheiro_num'];
$id_user = $_SESSION['usuario']['id']; 

$stmt = $conn->prepare('UPDATE usuario SET saldo = saldo + ? WHERE id_user = ?');
$stmt->execute([$saldo, $id_user]);

header('Location: perfil.php');
exit();

