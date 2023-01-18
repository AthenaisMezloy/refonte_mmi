<?php
    session_start();
    require ("./controleur-projets.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="project-detail-style.css" as="style">
    <link rel="stylesheet" href="project-detail-style.css">
    <title><?=$this_projet -> name_project?> - BUT MMI Champs</title>
</head>
<body>
    <?php 
            include("./navbar.php")
    ?>
    <section id="home">
        <div class="title">
            <h1><?=$this_projet -> name_project?></h1>
            <h2><?=$this_projet -> name_icon?></h2>
        </div>
        <div class="content">
            <div class="img-container">
            <?php if (!empty($this_projet->photo_project)): ?>
                <img src="data:image/webp;base64,<?= base64_encode($this_projet->photo_project) ?>" alt="<?= $this_projet->alt_project ?>"/>
            <?php else: ?>
                <p>No image found.</p>
            <?php endif; ?>
            </div>
            <div class="text-container">
                <p>
                <?=$this_projet -> description_project?>
                </p>
            </div>
        </div>
    </section>
    <section id="author">
        <p>
            <?=$this_projet -> quote_project?>
        </p>
        <h3>
        <?=$this_projet -> name_author?>

        </h3>
    </section>

    <?php 
            include("./footer.php")
    ?>

</body>
</html>