<!DOCTYPE html>
<html lang="fr">

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

    <?php 
        include("./intro.php")
    ?>

    <section id="course-choice">
        <div class="title">
            <h3>04</h3>
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

    <section id="school-life">
        <div class="title">
            <h2>Vie étudiante</h2>
            <svg width="80" height="2">
                    <rect width="100%" height="100%" fill="#EAC083" />
            </svg>
            <p>"Citation"</p>
        </div>
        <div class="school-container">
            <div class="img-container">
                <img src="#" alt="">
            </div>
            <div class="school-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
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
        <div class="news-container">
            <ul>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    <svg width="280" height="3">
                    <rect width="100%" height="100%" fill="#FFD584" />
                    </svg>
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    <svg width="280" height="3">
                    <rect width="100%" height="100%" fill="#970009" />
                    </svg>
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    <svg width="280" height="3">
                    <rect width="100%" height="100%" fill="#FFD584" />
                    </svg>
                </li>

            </ul>
            <a href="./news.php">Voir plus -></a>
        </div>
    </section>

    <?php 
        include("./footer.php")
    ?>

</body>

</html>