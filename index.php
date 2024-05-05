<?php

//utente non deve entrare in index a meno che non sia loggato
//accedo alle variabili di sessione
session_start();

if(!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
} else {
    $_SESSION['header'] = true;
}

include __DIR__ . "/Controllers/hotels.php";

include __DIR__ . "/Views/header.php";
?>

<main class="container d-flex align-items-center justify-content-center">
    <?php
    include __DIR__ . "/Views/table.php"
    ?>
    
</main>



    </div>
</body>
</html>