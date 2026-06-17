<?php
include __DIR__.'/database.php';
session_start();
$id=$_SESSION['usuario']['id'];
$stmt=$conn->prepare("delete from usuario where id_user=:id");
$stmt->bindParam(':id',$id);
$stmt->execute();
include __DIR__.'/logout.php';
header('Location:index.php');
?>