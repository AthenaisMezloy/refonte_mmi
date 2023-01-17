<?php
require("model.php");
$team = getTeam()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about-style.css">
    <title>MMI Champs - À propos</title>
</head>
<body>
    <?php 
        include("./navbar.php")
    ?>
    <section id="home">
        <h1>La Team TABL</h1>
        <p class="citation">Ils sont sympas ! - Emy B.</p>
        <div class="swiper">
        <div class="swiper-wrapper">
            <?php foreach ($team as $team) : ?>
                <div class="swiper-slide">
                    <?php if (!empty($team->photo)) : ?>
                        <img class="image" src="data:image/webp;base64,<?= base64_encode($team->photo) ?>" alt="<?= $team->name_partner ?>" />
                    <?php else : ?>
                        <div class="img_notfound">
                            <p>No image found.</p>
                        </div>
                    <?php endif; ?>

                    <div class="team-content">
                        <h4><?= $team->name_partner ?></h4> <br>
                        <h4><?= $team->role ?></h4>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
    </section>
    <?php 
        include("./footer.php")
    ?>
</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="app.js"></script>
</html>
