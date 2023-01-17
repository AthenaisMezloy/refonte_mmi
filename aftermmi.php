<?php 
    session_start();
    require("./model.php");
    $projets = getJobs();
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
                    <button class="filter-button" data-filter="all"><p>Tous les métiers</p></button>
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

    <section id="job-list">
        <ul>
            
        <?php foreach($job as $job): ?>
        <li class="article-box <?= $job->ext_icon?>">
        <div class="dev">
            <a class="btn" href="#open-modal"  alt="<?= $job->name_job ?>"><?= $job->name_job ?></a>
        </div>
        <div id="open-modal" class="modal-window">
            <div>
                <a href="#general-program" title="Close" class="modal-close">Fermer</a>
                <div class="text-program"><?= $job->content_job ?></div>
            </div>
        </div>
        
        </a>
        </li>
    <?php endforeach; ?>
        </ul>
    </section>

    <section id="post-mmi">
        <div class="intro">
            <h2>Poursuites d'études</h2>    
                <p class="program">Après le BUT MMI, vous pouvez envisager de continuer vos études de 2 ans pour obtenir un master ou autre diplôme supérieur de niveau bac+4 ou bac+5.
En arrêtant le BUT MMI à 2 ans au lieu de 3, vous obtiendrez un DUT MMI nouvelle réforme, et pourrez continuer dans des formation en bac+3 comme la licence, licence pro, bachelor, ou encore dans une formation en 3 ans aboutissant à un bac+5, comme une école d’ingénieur.
Voici quelques exemples de formations envisageable :
                </p><br>
        </div>
 
        <div class="list">
            <div class="item"><a href="#">Renaissance music</a></div>
            <div class="item"><a href="#">Baroque music</a></div>
            <div class="item"><a href="#">Classical</a></div>
            <div class="item"><a href="#">Romantic</a></div>
            <div class="item"><a href="#">20th-century music</a></div>
            <div class="item"><a href="#">Opera</a></div>
            <div class="item"><a href="#">Folk</a></div>
            <div class="item"><a href="#">Country music</a></div>
            <div class="item"><a href="#">Rock</a></div>
            <div class="item"><a href="#">Pop</a></div>
            <div class="item"><a href="#">Rhythm and blues</a></div>
            <div class="item"><a href="#">Electronic music</a></div>
            <div class="item"><a href="#">Jazz</a></div>
            <div class="item"><a href="#">Reggae</a></div>
            <div class="item"><a href="#">Calypso</a></div>
            <div class="item"><a href="#">Hip hop</a></div>
          </div>
    </section>
    <?php 
include("./footer.php")
?> 
</body>
</html>
