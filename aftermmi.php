<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
            <h2>Les métiers en vue</h2>
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
        <div class="parent">
            <div class="dev" >
            <a href=""alt="Développement Web" >Intégrat.eur.rice</a></div>
            <div class="design" >
            <a href=""alt="Design" >Chef.fe de projet</a></div>
            <div class="audio" >
            <a href=""alt="Audiovisuel" >Direct.eur.rice artistique</a></div>
            <div class="com" >
            <a href=""alt="Communication" >Développeu.r.se web</a></div>
            <div class="dev" >
            <a href=""alt="Développement Web" >Graphiste</a></div>
            <div class="design" >
            <a href=""alt="Design" >Hébergeu.r.se</a></div>
            <div class="audio" >
            <a href=""alt="Audiovisuel" >Monteu.r.se vidéaste</a></div>
            <div class="com" >
            <a href=""alt="Communication" >Community Manager</a></div>
            <div class="com" >
            <a href=""alt="Communication" >Chargé.e de com</a></div>
        </div>
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