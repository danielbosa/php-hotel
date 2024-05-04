<?php

//utente non deve entrare in index a meno che non sia loggato
//accedo alle variabili di sessione
session_start();
var_dump($_SESSION);
if(!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
}

include __DIR__ . "/Controllers/hotels.php";

include __DIR__ . "/Views/header.php";
?>

<?php
include __DIR__ . "/Views/table.php"
?>

