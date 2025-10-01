<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Connexion - BDE</title>
</head>
<body>

    <main>
        <section class="login-form">
            <h1>Connexion</h1>
            
            <form action="login.php" method="POST">
                
                <div>
                    <label for="email">Adresse Email :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@etu.univ-amu.fr" required>
                </div>

                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
                </div>

                <div>
                    <button type="submit">Se connecter</button>
                </div>
            </form>
            
            <p><a href="mot-de-passe-oublie.php">Mot de passe oublié ?</a></p>
            <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>

        </section>
    </main>

</body>
</html>