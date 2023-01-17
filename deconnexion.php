<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="deconnexion-style.css" as="style">
    <link rel="stylesheet" href="deconnexion-style.css">
    <title>Déconnexion - BUT MMI Champs</title>
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