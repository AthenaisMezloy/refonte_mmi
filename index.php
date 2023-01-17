<?php
    session_start();
    require("model.php");
    $news = getNews();
?>
<!DOCTYPE html>
<html lang="fr" class="home-page">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Accueil - BUT MMI Champs</title>
</head>

<body>
<?php 
        include("./navbar.php")
        ?>

    <section id="home">
        <div class="block">
            <div class="title">
                <h1>BUT MMI</h1>
                <p>Métiers du Multimédia et de l'Internet</p>
            </div>
            <div class="btn-go">
                <button id="scroll-button"><img src="./img/icons/arrow.svg" alt=""></button>
            </div>
        </div>
    </section>

    <div class="intro-title">
        <h2>Qu'est-ce que MMI Champs ?</h2>
    </div>

    <section id="courses">

        <div class="content">
            <h3 class="pink">01</h3>
            <p>Le BUT MMI est une formation bac+3. Elle est accessible à de nombreux profils, notamment technologiques, et vous formera aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels.
            À Champs-sur-Marne, deux parcours sont proposés à partir du quatrième semestre : Développement web & Dispositif interactifs, et Création Numérique.
            </p>

            <a href="./formation.php" class="btn-bubble">Découvrir la formation<img src="./img/icons/arrow.svg" alt=""></a>

        </div>

        <div class="img-container right">
            <img src="./img/home/iuteiffel.webp" alt="">
        </div>

    </section>

    <section id="projects">

        <div class="img-container left">
            <img src="./img/home/projet.webp" alt="">
        </div>

        <div class="content">
            <h3 class="yellow">02</h3>
            <p>Le BUT MMI est une formation théorique mais surtout pratique ! De nombreux projets seront à réaliser dans de multiples domaines tout au long de ces 3 années de formations. Apprenez à vous organiser tout en exploitant les diverses compétences que vous allez acquérir et perfectionner afin de laisser cours à votre créativité ! Découvrez à travers ce site différents projets réalisés par d’anciens étudiants de la formation.</p>

            <a href="./project.php" class="btn-bubble">Projets étudiants <img src="./img/icons/arrow.svg" alt=""></a>

        </div>


    </section>

    <section id="after-mmi">
        <div class="content">
            <h3 class="blue">03</h3>
            <p>Cette formation vous permet d’acquérir un bagage suffisant pour entrer dans le monde professionnel ou poursuivre vos études en master.<br>
            Le BUT MMI vous ouvre la voie vers de nombreuses perspectives.</p>

            <a href="./aftermmi.php" class="btn-bubble">Après MMI ? <img src="./img/icons/arrow.svg" alt=""></a>

        </div>

        <div class="img-container right">
            <img src="./img/home/after.webp" alt="">
        </div>
    </section>

    <section id="course-choice">
        <div class="title">
            <h3 class="green">04</h3>
            <svg width="23" height="1.5">
                <rect width="100%" height="100%" fill="#EAC083" />
            </svg>
            <p>Parcours</p>
        </div>
        <div class="choices">
            <div class="container">
                <div class="dev">
                    <h4>Développement Web</h4>
                    <p>Le parcours développement web et dispositifs interactifs forme au développement de sites web et à l’intégration d’applications multimédia ou mobiles. Il aborde notamment les outils et langages informatiques nécessaires à la conception et à la gestion de ces outils numériques.</p>
                </div>
                <div class="crea">
                    <h4>Création Numérique</h4>
                    <p>Le parcours création numérique est consacré à l’expression d’un message sur différents médias, sous la forme de création graphique et d’écriture multimédia. II permet d’acquérir les techniques nécessaires à la création de ressources numériques, notamment de publications web.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="news">
        <div class="title">
            <h2>Dernières actualités</h2>
            <svg width="80" height="2">
                <rect width="100%" height="100%" fill="#EAC083" />
            </svg>
            <p>MMI-Champs : de l’entraide, du travail, et du rire. - Emy B.</p>
        </div>
        <div class="news-list">
            <ul>
                <?php $i = 0; ?>
                <?php foreach($news as $article): ?>
                    <?php if($i >= 3) break; ?>
                    <li>

                        <?php if ($i % 2 == 0): ?>

                            <?php if (!empty($article-> photo_news)): ?>
                                <img src="data:image/webp;base64,<?= base64_encode($article->photo_news) ?>" alt="<?= $article->alt_news ?>"/>
                            <?php else: ?>
                                <div class="img_notfound">
                                    <p>No image found.</p>
                                </div>
                            <?php endif; ?>
                            <div class="text">
                                <p>
                                    <?= $article ->title_news ?> <br><br>
                                    <?= $article ->content_news ?> <br><br>
                                    <?= $article ->date_news ?>
                                </p>
                            </div>

                        <?php else: ?>

                            <div class="text">
                                <p>
                                    <?= $article ->title_news ?> <br><br>
                                    <?= $article ->content_news ?> <br><br>
                                    <?= $article ->date_news ?>
                                </p>
                            </div>
                            <?php if (!empty($article-> photo_news)): ?>
                                <img src="data:image/webp;base64,<?= base64_encode($article->photo_news) ?>" alt="<?= $article->alt_news ?>"/>
                            <?php else: ?>
                                <div class="img_notfound">
                                    <p>No image found.</p>
                                </div>
                            <?php endif; ?>

                        <?php endif; ?>


                    </li>
                    <?php $i++; ?>
                <?php endforeach; ?>              
            </ul>
        </div>
            
            <a href="./news.php" class="btn-bubble no-under">Voir plus<img src="./img/icons/arrow.svg" alt=""></a>

    </section>

    <?php 
        include("./footer.php")
    ?>

</body>
</html>