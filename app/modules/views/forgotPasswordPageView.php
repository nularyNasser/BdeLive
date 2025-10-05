<?php
    require_once __DIR__ . "/../../include/include.inc.php";

    start_page("Mot de pass oublié - BDE Inform'Aix ", true);
?>

<link rel="stylesheet" href="./assets/css/forgotPassword.css">
    <div class="forgot-container">
        <h1> Mot de passe oublié</h1>
        <form action="index.php?page=home" method="POST">
            <label for="email">Adresse e-mail : </label> <br>
            <input id="email" type="email" name="email" required> <br>
            <button type="submit">Envoyer le lien</button>
        </form>

        <a href="index.php?page=login"> <-- Retour page de connexion</a>
    </div>


<?php
    end_page();
?>