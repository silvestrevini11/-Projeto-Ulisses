<?php
include __DIR__.'/database.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>
        alert('Você precisa estar cadastrado para acessar este jogo!');
        window.location.href='Cad-User.php';
    </script>";
    exit();
}
?>