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
                <li>Tous les projets</li>
                <li>Développement web</li>
                <li>Design</li>
                <li>Audiovisuel</li>
                <li>Communication</li>
            </ul>
        </div>

    </section>

    <section id="project-list">
        <ul>
            <li><a href="./detail-project.php">test</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>


    <?php 
        include("./footer.php")
    ?>
</body>
</html>