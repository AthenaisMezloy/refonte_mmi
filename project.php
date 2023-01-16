<?php
    session_start();
    require("./model.php");
    $projets = getProjects();
    $icons = getIcons();
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
    <link rel="stylesheet" href="project-style.css">
    <title>But MMI Champs - Projets</title>
</head>
<body>
        <?php 
            include("./navbar.php")
        ?>
    <section id="home">
        <div class="title">
            <h1>Projets étudiants</h1>
            <p>Citation - Des projets professionnalisants, une porte ouverte sur l’avenir.</p>
        </div>
        <div class="filter">
            <h2>Filtrer par domaine :</h2>
            <ul>
                <li>
                    <button class="filter-button" data-filter="all"><p>Tous les projets</p></button>
                </li>

                <?php foreach($icons as $icon): ?>
                    <li>
                        <button class="filter-button" data-filter="<?= $icon->id_icon ?>">
                        <?php if (!empty($icon-> image_icon)): ?>
                            <img src="data:image/webp;base64,<?= base64_encode($icon->image_icon) ?>" alt="<?= $icon->name_icon ?>"/>
                        <?php else: ?>
                            <p>No image found.</p>
                        <?php endif; ?>
                        <?= $icon->name_icon ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </section>

    <section id="project-list">
        <ul>
            
        <?php foreach($projets as $projet): ?>
        <li class="article-box <?= $projet->ext_icon?>">
        <a href="detail-project.php?id=<?= $projet->id_project ?>">
            <?php if (!empty($projet->photo_project)): ?>
                <img src="data:image/webp;base64,<?= base64_encode($projet->miniature_project) ?>" alt="<?= $projet->alt_project ?>"/>
            <?php else: ?>
                <p>No image found.</p>
            <?php endif; ?>
        </a>
        </li>
    <?php endforeach; ?>
        </ul>
    </section>


    <?php 
        include("./footer.php")
    ?>
</body>
</html>