<?php
require("model.php");
$teachers = getTeachers();
$courses = getCourses();
?>
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
    <link rel="stylesheet" href="formation-style.css">
    <title>BUT MMI Champs - International</title>
</head>

<body>

</html>
<?php
include("./navbar.php")
?>
<section id="home">

    <div class="title">
        <h1>Formation</h1>
        <p>Avoir plusieurs cordes à son arc prend tout son sens. - Timothé B.</p>
    </div>
</section>
<section id="general-program">
    <div class="intro">
        <h2>Programme général</h2>
        <p class="citation">Une diversité des matières apportant une grande richesse. - Athénaïs M.</p>

        <p class="program">La formation s’organise autour de six semestres. Le volume horaire réparti sur les trois années est de
            2600
            h, dont 600 h consacrées aux projets tuteurés. Au moins, 42 % des heures sont consacrées aux
            enseignements
            pratiques et aux mises en situation professionnelle. Les enseignements sont dispensés sous la forme de
            Cours
            magistraux (CM), Travaux Dirigés (TD) et Travaux Pratiques (TP).
        </p>
    </div>
        <div class="bloc">
            <?php foreach ($courses as $topic) : ?>

                <div class="<?= $topic->namediv_course ?>">
                    <a class="btn" href="#open-modal=<?= $topic->id_course ?>"><?= $topic->name_course ?></a>
                </div>
            <?php endforeach; ?>

                <div id="open-modal" class="modal-window">
                    <div>
                        <a href="#general-program" title="Close" class="modal-close">Fermer</a>
                        <div class="text-program"><?= $topic->content_course ?></div>
                    </div>
                </div>

        </div>


    </div>
</section>
<section id="schooling">
    <div class="intro">
        <h2>Parcours</h2>
        <p class="citation">Des parcours complémentaires mais à la fois singuliers - Jeanne B.</p>

        <p class="program">Dès le quatrième semestre, les étudiants vont s’orienter dans un parcours afin des la spécialiser, les voici.
        </p>

    </div>
    <div class="bloc2">
        <div class="schooling1">
            <h3>Développement web & Dispositifs interactifs</h3>
            <br>
            <p>Le parcours développement web et dispositifs interactifs forme au développement de sites web et à l’intégration d’applications multimédia ou mobiles. Il aborde notamment les outils et langages informatiques nécessaires à la conception et à la gestion de ces outils numériques.</p>
            <p>Il prépare notamment aux métiers d’intégrateur ; de développeur back, front, ou Full stack ; d’intégrateur de dispositifs de la réalité virtuelle.
                Les débouchés se situent en agences de communication, en agences Web, dans des start-up ou des sociétés de services informatiques, dans des services de communication des grandes entreprises ou organisations.</p>
        </div>
        <div class="schooling2">
            <h3>Création Numérique</h3>
            <br>
            <p>Le parcours création numérique est consacré à l’expression d’un message sur différents médias, sous la forme de création graphique et d’écriture multimédia. II permet d’acquérir les techniques nécessaires à la création de ressources numériques, notamment de publications web.</p>
            <p>Il prépare principalement aux métiers de designers, infographistes, game designers ou de techniciens audiovisuel. Les principaux débouchés se situent en agences de communication, en agences Web, en agences publicitaires, ou dans les services de communication des grandes entreprises.</p>
        </div>
    </div>

</section>
<section id="MMIday">
    <div class="intro">
        <h2>Une journée type en MMI</h2>
        <p class="citation">Des horaires effrayants, des efforts payants - Elrick H.</p>
    </div>
    <div class="bloc3">
        <table>
            <tr>
                <th>
                    <p>8h15</p>
                    <p>10h15</p>
                </th>
                <td>
                    <p class="bluebg">Intégration & Développement web</p>
                </td>
                <td></td>
                <td>
                    <p class="pinkbg">Ergonomie & Accessibilité web</p>
                </td>
                <td>
                    <p class="yellowbg">Expression, Communication & Réthorique</p>
                </td>
                <td>
                    <p class="bluebg">Développement Web</p>
                </td>
            </tr>
            <tr>
                <th>
                    <p>10h30</p>
                    <p>12h30</p>
                </th>
                <td>
                    <p class="pinkbg">Autonomie - SAÉ 103 - Design Graphique</p>
                </td>
                <td>
                    <p class="yellowbg">Stratégie de Communication</p>
                </td>
                <td>
                    <p class="purplebg">Représentation & Traitement de l'Information</p>
                </td>
                <td>
                    <p class="yellowbg">SAÉ 101 - Audit de Communiation Numérique</p>
                </td>
                <td>
                    <p class="pinkbg">Culture Artistique</p>
                </td>
            </tr>

            <tr>
                <th>Pause repas</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>
                    <p>13h30</p>
                    <p>15h30</p>
                </th>
                <td>
                    <p class="purplebg">Gestion de projet</p>
                </td>
                <td>
                    <p class="purplebg">Projet Personnel & Professionnel</p>
                </td>
                <td>
                    <p class="pinkbg">SAÉ 103 - Design Graphique</p>
                </td>
                <td>
                    <p class="greenbg">Production Audiovidéo</p>
                </td>
                <td>
                    <p class="pinkbg">Production Graphique</p>
                </td>
            </tr>
            <tr>
                <th>
                    <p>15h45</p>
                    <p>17h45</p>
                </th>
                <td>
                    <p class="bluebg">Hébergement</p>
                </td>
                <td></td>
                <td>
                    <p class="bluebg">Développement Web</p>
                </td>
                <td>
                    <p class="yellowbg">Anglais</p>
                </td>
                <td>
                    <p class="yellowbg">Écriture Mutlimédia & Narration</p>
                </td>
            </tr>
        </table>
    </div>
</section>
<section id="team">
    <div class="intro">
        <h2>L’équipe pédagogique</h2>
        <p class="citation">Malheureusement les super-héros n’existent pas, mais nous avons de super-profs - Alvin M.</p>

    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php foreach ($teachers as $teacher) : ?>
                <div class="swiper-slide">
                    <?php if (!empty($teacher->photo_teacher)) : ?>
                        <img class="image" src="data:image/webp;base64,<?= base64_encode($teacher->photo_teacher) ?>" alt="<?= $teacher->name_teacher ?>" />
                    <?php else : ?>
                        <div class="img_notfound">
                            <p>No image found.</p>
                        </div>
                    <?php endif; ?>

                    <div class="teacher-subject">
                        <h4><?= $teacher->name_teacher ?></h4> <br>
                        <h4><?= $teacher->subject_teacher ?></h4>
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

