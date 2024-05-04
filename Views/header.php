<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Hotels</title>

</head>

<body>
    <header class="d-flex justify-content-between mx-3">
        <?php if(isset($_SESSION['userId'])) : ?>
            <div>
                <form class="d-flex gap-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <input type="checkbox" name="parking" id="parking">
                <label for="parking">Hotel con parcheggio</label>
                <div>Stelle:</div>
                <input type="radio" name="star" value="1">
                <label for="parking">1+</label>
                <input type="radio" name="star" value="2">
                <label for="parking">2+</label>
                <input type="radio" name="star" value="3">
                <label for="parking">3+</label>
                <input type="radio" name="star" value="4">
                <label for="parking">4+</label>
                <input type="radio" name="star" value="5">
                <label for="parking">5</label>
                <button type="submit" class="btn btn-primary">Applica filtri</button>
            </div>
            <div>
                <a href='logout.php' class='btn btn-danger'>Logout</a>
            </div>
        <?php endif; ?>
  </header>