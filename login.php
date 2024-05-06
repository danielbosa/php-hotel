<?php
    include __DIR__ . "/Controllers/auth.php";
    include __DIR__ . "/Views/header.php";
?>


<div class="db-form">

    <!-- !!!!! -->
    <!-- ATTN: uso metodo GET perché con il post non funziona -->
    <!-- SISTEMARE -->
    <!-- !!!!! -->
    
    <form action="login.php" method="POST">
        <div class="d-flex justify-content-between">
            <h1 class="mb-3">Accedi al tuo account</h1>
            <div>
                <img src="Images/logo.jpg" alt="logo" class="logo-img">
            </div>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Inserici il tuo indirizzo email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="prova@prova.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password qui">
        </div>
        <div class="d-flex">
            <?php if(isset($_SESSION['error'])) : ?>
                <span class="db-error" style="color: red; align-self: center;">Attenzione: email o password errate</span>
            <?php endif; ?>
            <button type="submit" class="db-btn">Accedi</button>
        </div>
    </form>
</div>

</body>
</html>