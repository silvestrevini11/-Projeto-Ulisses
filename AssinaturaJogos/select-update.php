<?php
session_start();
include __DIR__.'/database.php';
$stmt=$conn->prepare('select * from usuario where id_user=:id');
$stmt->bindParam(':id',$_SESSION['usuario']['id']);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_OBJ);
?>