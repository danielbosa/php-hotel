<?php
session_start();

if(isset($_SESSION['userId'])){
    session_destroy();
} else {
    header("Location: login.php");
}
?>

<div>
    Prova logout
    <a href="login.php">Torna al login</a>
</div>
