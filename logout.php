<?php
session_start();

if(isset($_SESSION['userId'])){
    $nome = $_SESSION['name'];
    session_unset();
    session_destroy();
} else {
    header("Location: login.php");
}

include __DIR__ . "/Views/header.php";
?>

<div class="db-form logout-form">
    <?php 
        echo "Arrivederci $nome, <br> grazie per averci scelti.";
    ?>
    <a href="login.php">Torna al login</a>
</div>
