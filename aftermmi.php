<?php
session_start();
require("./model.php");
$jobs = getJobs();
$icons = getIcons();
$post = getPostMMI();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aftermmi-style.css">
    <title>BUT MMI Champs-sur-Marne</title>
</head>

<body>
    <?php
    include("./navbar.php")
    ?>
    <section id="home">
        <div class="title">
            <h1>Après MMI</h1>
            <p>Un panel de débouchés à l’horizon large, tout comme l’avenir que vous choisirez de construire.
                - Maureen C.</p>

        </div>
    </section>
    <section id="jobs">
        <div class="intro">
            <h1>Les métiers en vue</h1>
        </div>
        <div class="filter">
            <h2>Filtrer par domaine :</h2>
            <ul>
                <li>
                    <button class="filter-button" data-filter="all">
                        <p>Tous les métiers</p>
                    </button>
                </li>

                <?php foreach ($icons as $icon) : ?>
                    <li>
                        <button class="filter-button" data-filter="<?= $icon->id_icon ?>">
                            <?php if (!empty($icon->image_icon)) : ?>
                                <img src="data:image/webp;base64,<?= base64_encode($icon->image_icon) ?>" alt="<?= $icon->name_icon ?>" />
                            <?php else : ?>
                                <p>No image found.</p>
                            <?php endif; ?>
                            <?= $icon->name_icon ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </section>

    <section id="job-list">
        <ul>

            <?php foreach ($jobs as $job) : ?>
                <li class="article-box <?= $job->ext_icon ?>">
                    <div class="job">
                        <h3> <?= $job->name_job ?></h3>
                    </div>
                    <div>
                        <div class="text"><?= $job->content_job ?></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>



    <section id="post-mmi">
        <div class="intro">
            <h2>Poursuites d'études</h2><br>
            <p class="program">Après le BUT MMI, vous pouvez envisager de continuer vos études sur 2 ans pour obtenir un master ou un autre diplôme supérieur de niveau bac+4 ou bac+5.
                <br> En arrêtant le BUT MMI au bout de 2 ans, vous obtiendrez un DUT MMI nouvelle réforme. Vous pourrez continuer dans des formations bac+3 comme la licence, la licence pro, le bachelor ou encore dans une formation en 3 ans aboutissant à un bac+5, comme une école d’ingénieur.
                <br><br><span>Voici quelques exemples de formations envisageables :</span>
            </p><br>
        </div>

        <div class="list">
            <?php foreach ($post as $p) : ?>
                <div class="item">
                    <div class="name"><?= $p->name_postmmi ?></div>
                </div>

            <?php endforeach; ?>

        </div>
    </section>
    <?php
    include("./footer.php")
    ?>
</body>
