<?php
include __DIR__.'/includes/head.php';
include __DIR__.'/database.php';
?>
<?php
$sql = $conn->query("SELECT * FROM generos");
$plataformas = $sql->fetchAll();
?>

<section class="filtrar">
    <h1 class = "filtrar-title">Filtrar Por Genero</h1>
<a class="filtrar-box" href="indexGenero.php?id=<?= 1 ?>'] ?>"><p class="filtrar-text">Ação</p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 2 ?>'] ?>"><p class="filtrar-text">Aventura</p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 3 ?>'] ?>"><p class="filtrar-text">Luta</p></p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 4 ?>'] ?>"><p class="filtrar-text">RPG</p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 5 ?>'] ?>"><p class="filtrar-text">Terror</p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 6?>'] ?>"><p class="filtrar-text">Corrida</p></a><br>

<a class="filtrar-box" href="indexGenero.php?id=<?= 7 ?>'] ?>"><p class="filtrar-text" style="margin-bottom: 20px">Estrategia</p></a>
</section>

<?php
include __DIR__.'/includes/footer.php';
?>