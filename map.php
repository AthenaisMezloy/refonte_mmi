<?php
    session_start();
    require("./model.php");
    $projets=getProjects();
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
                    <li><a href=".">Accueil</a>
                        <ul>
                            <li><a href="news.php">Actualités</a></li>
                            <li><a href="formation.php">La Formation</a></li>
                            <li><a href="project.php">Projets étudiants</a>
                                <ul>
                                    <?php foreach($projets as $projet): ?>
                                    <li>
                                        <a
                                            href="detail-project.php?id=<?= $projet->id_project ?>"><?= $projet->name_project ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.php">Mentions Légales</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                </ul>

    </section>


    <?php 
        include("./footer.php")
    ?>

</body>

</html>