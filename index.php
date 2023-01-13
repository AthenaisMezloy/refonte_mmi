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
    <title>BUT MMI Champs-sur-Marne</title>
</head>

<body>

    <div class="btn-section">
        <ul>
            <a href="#home">
                <li class="icon" id="btn-1"></li>
            </a>
            <a href="#courses">
                <li class="icon" id="btn-2"></li>
            </a>
            <a href="#projects">
                <li class="icon" id="btn-3"></li>
            </a>
            <a href="#after-mmi">
                <li class="icon" id="btn-4"></li>
            </a>
            <a href="#course-choice">
                <li class="icon" id="btn-5"></li>
            </a>
            <a href="#news">
                <li class="icon" id="btn-6"></li>
            </a>
        </ul>
    </div>

<?php 
        include("./navbar.php")
        ?>

    <section id="home">
        <div class="block">
        </div>
        <div class="title">
            <h1>BUT MMI</h1>
            <p>Métiers du Multimédia et de l'Internet</p>
        </div>
    </section>

    <div class="intro-title">
        <h2>Qu'est-ce que MMI Champs ?</h2>
    </div>

    <section id="courses">

        <div class="content">
            <h3 class="pink">01</h3>
            <p>Le BUT MMI est une formation bac+3. Elle est accessible à de nombreux profils, notamment technologiques, et vous formera aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels.
Le BUT MMI compte 2600 heures d’enseignement partagées entre la communication, les langues, l’informatique, la culture graphique, la culture scientifique et les réseaux.
</p>

            <a href="#" class="btn-bubble">Découvrir la formation<img src="./img/icons/arrow.svg" alt=""></a>

        </div>

        <div class="img-container">
            <img src="#" alt="">
        </div>

    </section>

    <section id="projects">

        <div class="img-container">
            <img src="#" alt="">
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
            <p>Cette formation vous permet d’acquérir un bagage suffisant pour entrer dans le monde professionnel ou poursuivre vos études en master.
Le BUT MMI vous ouvre la voie vers de nombreuses perspectives.</p>

            <a href="#" class="btn-bubble">Après MMI ? <img src="./img/icons/arrow.svg" alt=""></a>

        </div>

        <div class="img-container">
            <img src="#" alt="">
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
                    <p>Le parcours développement web et dispositifs interactifs forme au développement de sites web et à l’intégration d’applications multimédia ou mobiles. Il aborde notamment les outils et langages informatiques nécessaires à la conception et à la gestion de ces outils numériques.
                        <br>Il prépare notamment aux métiers d’intégrateur ; de développeur back, front, ou Full stack ; d’intégrateur de dispositifs de la réalité virtuelle.
                        <br>Les débouchés se situent en agences de communication, en agences Web, dans des start-up ou des sociétés de services informatiques, dans des services de communication des grandes entreprises ou organisations.</p>
                </div>
                <div class="crea">
                    <h4>Création Numérique</h4>
                    <p>Le parcours création numérique est consacré à l’expression d’un message sur différents médias, sous la forme de création graphique et d’écriture multimédia. II permet d’acquérir les techniques nécessaires à la création de ressources numériques, notamment de publications web.
                        <br>Il prépare principalement aux métiers de designers, infographistes, game designers ou de techniciens audiovisuel. Les principaux débouchés se situent en agences de communication, en agences Web, en agences publicitaires, ou dans les services de communication des grandes entreprises.</p>
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
        </div>
        <div class="news-list">
            <ul>
                <li>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </li>
            </ul>
        </div>
            
            <a href="./news.php" class="btn-bubble">Voir plus<img src="./img/icons/arrow.svg" alt=""></a>

    </section>

    <?php 
        include("./footer.php")
    ?>

</body>
</html>