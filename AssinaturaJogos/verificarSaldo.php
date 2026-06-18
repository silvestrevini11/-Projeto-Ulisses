<?php
include __DIR__.'/database.php';

session_start();


    echo "<script>
        alert('Dinheiro Insuficiente');
        window.location.href='verCarrinho.php';
    </script>";
    exit();
?>