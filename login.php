<?php
    include __DIR__ . "/Controllers/auth.php";
    include __DIR__ . "/Views/header.php";
?>


<div class="db-form">
    <form id="login-form" action="login.php" method="POST">
        <h1 class="mb-3">Accedi al tuo account</h1>
        <div class="mb-3">
            <label for="input-email" class="form-label">Inserici il tuo tuo indirizzo email</label>
            <input type="email" name="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="prova@prova.com">
        </div>
        <div class="mb-3">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="input-password" placeholder="password qui">
        </div>
        <button type="submit" class="db-btn">Accedi</button>
    </form>
</div>

</body>
</html>