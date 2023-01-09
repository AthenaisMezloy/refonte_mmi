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
            <a href="">
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
            <p>Parcours</p>
        </div>
        <div class="choice-container">
            <div class="dev-course"></div>
            <div class="crea-course"></div>
        </div>

    </section>

    <section>

    </section>

    <?php 
        include("./footer.php")
    ?>

</body>

</html>