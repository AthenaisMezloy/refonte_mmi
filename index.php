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
                <li></li>
            </a>
            <a href="#courses">
                <li></li>
            </a>
            <a href="#projects">
                <li></li>
            </a>
            <a href="#after-mmi">
                <li></li>
            </a>
            <a href="#course-choice">
                <li></li>
            </a>
            <a href="#school-life">
                <li></li>
            </a>
            <a href="#news">
                <li></li>
            </a>
        </ul>
    </div>

    <section id="home">
        <?php 
        include("./navbar.php")
        ?>
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

            <a href="#">Découvrir la formation</a>

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

            <a href="#">Projets étudiants</a>

        </div>


    </section>

    <section id="after-mmi">
        <div class="content">
            <h3 class="blue">03</h3>
            <p>Cette formation vous permet d’acquérir un bagage suffisant pour entrer dans le monde professionnel ou poursuivre vos études en master.
Le BUT MMI vous ouvre la voie vers de nombreuses perspectives.</p>

            <a href="#">Après MMI ?</a>

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
        <div class="choice-container">
            <div class="dev-course">
                <div>
                    <h4>Développement Web</h4>
                    <a href="#">Voir plus</a>
                </div>
            </div>
            <div class="crea-course">
                <div>
                    <h4>Création Numérique</h4>
                    <a href="#">Voir plus</a>
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
            
            <a href="./news.php">Voir plus -></a>

    </section>

    <?php 
        include("./footer.php")
    ?>

</body>
</html>