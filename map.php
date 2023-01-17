<?php
    session_start();
    require("./model.php");
    $projets=getProjects();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="map-style.css" as="style">
    <link rel="stylesheet" href="map-style.css">
    <title>Plan du site - BUT MMI Champs</title>
</head>

<body>
    <?php 
        include("./navbar.php")
    ?>
    <section>
                <h1>Plan du site</h1>

                <ul class=box>
                    <li>
                        <a href=".">Accueil</a>
                        <ul>
                            <li><a href="news.php">Actualités</a></li>
                        </ul>
                    </li>
                    <li><a href="formation.php">La Formation</a></li>
                    <li>
                        <a href="project.php">Projets étudiants</a>
                        <ul>
                            <?php foreach($projets as $projet): ?>
                            <li>
                                <a
                                    href="detail-project.php?id=<?= $projet->id_project ?>"><?= $projet->name_project ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="about.php">Après MMI</a></li>
                    <li><a href="about.php">International</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="about.php">Mentions Légales</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                </ul>

    </section>


    <?php 
        include("./footer.php")
    ?>

</body>

</html>