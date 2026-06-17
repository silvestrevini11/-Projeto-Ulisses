<?php
include __DIR__.'/database.php';
?>
<?php
$id = (int) $_GET['id'];
$sql = $conn->prepare("SELECT * FROM carrinho WHERE id_user = :id");
$sql->execute(['id' => $_SESSION['usuario']['id']]);
$carrinho = $sql->fetchAll();

$conn->prepare("DELETE FROM carrinho WHERE id_user = :id")->execute(['id' => $_SESSION['usuario']['id']]);

header("Location: verCarrinho.php");
?>