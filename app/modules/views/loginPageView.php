<?php
    require_once __DIR__. '/../../include/include.inc.php';
    start_page("Login");
?>

<link rel="stylesheet" href="./assets/css/login.css">

<div class="login-container">
    <h1>Connexion</h1>
    <form id="form" action="index.php?page=home" method="POST">
        <label for="email">Adresse e-mail</label>
        <input id="email" type="text" name="Adresse e-mail" placeholder="Entrez votre Adresse mail" required> <br>

        <label for="password">Password</label>
        <input id="password" type="text" name="Password" placeholder="Entrez votre mot de passe" required> <br>

        <input type="submit" value="Se connecter" name="ok">

        <p><a href="index.php?page=forgotPassword">Mot de passe oublié ?</a></p>
    </form>
</div>

<?php
    end_page();
?>