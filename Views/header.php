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
    <div class="bg-db">
    <header class="d-flex justify-content-between">
        <?php if(isset($_SESSION['userId'])) : ?>
            <div>
                <img src="Images/logo.jpg" alt="logo" class="logo-img">
            </div>
            <div>
                <form class="d-flex gap-2 align-items-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                    <span>Filtri:</span>
                    <input type="checkbox" name="parking" id="parking">
                    <label for="parking">Hotel con parcheggio</label>
                    <div>Stelle:</div>
                    <select name="star" id="star">
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Applica filtri</button>
                </form>
            </div>
            <div>
                <a href='logout.php' class='btn btn-danger'>Logout</a>
            </div>
        <?php endif; ?>
  </header>