<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/../css/style.css">

    <title>PHP Hotels</title>
</head>

<?php 
session_start();

if(!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
} else {
    $_SESSION['header'] = NULL;
}

include __DIR__ . "/../Controllers/hotels.php";

include __DIR__ . '/../Views/header.php';

$hotel = getHotelById($hotels);
?>

<img class="bg-detail" src="<?php echo $hotel['image'] ?>" alt="foto">

<div class="db-form">
    <h3>Ecco i dettagli del tuo hotel:</h3>
    <ul>
        <li>Nome: <?php echo $hotel['name']?></li>
        <li>Descrizione: <?php echo $hotel['description']?></li>
        <li>Voto: <?php echo $hotel['vote']?></li>
    </ul>
    <!-- <div class="hotel-miniature">
        <img src="<?php echo $hotel['image'] ?>" alt="">
    </div> -->
</div>
<a href="/php-hotel/index.php" class="back-button">Torna indietro</a>





