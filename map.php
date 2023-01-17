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
                            <li><a href="news.php" alt="lien vers page actualité">Actualités</a></li>
                        </ul>
                    </li>
                    <li><a href="formation.php" alt="lien vers page formation">La Formation</a></li>
                    <li>
                        <a href="project.php" alt="lien vers page projets étudiants">Projets étudiants</a>
                        <ul>
                            <?php foreach($projets as $projet): ?>
                            <li>
                                <a
                                    href="detail-project.php?id=<?= $projet->id_project ?>"  alt="lien vers page <?= $projet->name_project ?>"><?= $projet->name_project ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="aftermmi.php" alt="lien vers page après MMI">Après MMI</a></li>
                    <li><a href="international.php" alt="lien vers page international">International</a></li>
                    <li><a href="about.php" alt="lien vers page à propos">À propos</a></li>
                    <li><a href="legal-notice.php" alt="lien vers page mentions légales">Mentions Légales</a></li>
                    <li><a href="admin.php" alt="lien vers page administrateur">Administrateur</a></li>
                </ul>

    </section>


    <?php 
        include("./footer.php")
    ?>

</body>

</html>