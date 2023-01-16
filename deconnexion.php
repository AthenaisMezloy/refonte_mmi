<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="deconnexion-style.css">
    <title>Déconnexion</title>
</head>
<body>
    <?php
    include("./navbar.php")
    ?>
    <section>
        <h1>Vous avez bien été déconnecté</h1>
        <a href="./index.php">Retour à la page d'accueil</a>
    </section>
    <?php
    include("./footer.php")
    ?>
</body>
</html>