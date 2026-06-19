<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
?>
<?php
$sql = $conn->query("SELECT * FROM plataformas");
$plataformas = $sql->fetchAll();
?>

<section class="filtrar">
    <h1 class = "filtrar-title">Filtrar Por Plataforma</h1>
<a class="filtrar-box" href="indexPlataforma.php?id=<?= 1 ?>'] ?>"><p class="filtrar-text">PC</p></a><br>

<a class="filtrar-box" href="indexPlataforma.php?id=<?= 2 ?>'] ?>"><p class="filtrar-text">PS4</p></a><br>

<a class="filtrar-box" href="indexPlataforma.php?id=<?= 3 ?>'] ?>"><p class="filtrar-text">PS5</p></a><br>

<a class="filtrar-box" href="indexPlataforma.php?id=<?= 4 ?>'] ?>"><p class="filtrar-text">XBOX ONE</p></a><br>

<a class="filtrar-box" href="indexPlataforma.php?id=<?= 5 ?>'] ?>"><p class="filtrar-text" style="margin-bottom: 20px">XBOX SERIES S</p></a><br>
</section>

<?php
include __DIR__.'/includes/footer.php';
?>