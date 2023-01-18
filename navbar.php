<script src=
   "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preload" href="footer-nav-style.css" as="style">
<link rel="stylesheet" href="footer-nav-style.css">
<nav>
    <div>
        <a href="./index.php" alt="lien vers page d'accueil">
            <img src="./img/assets/logo_img.svg" alt="bouton de redirection vers la page d'accueil">
        </a>
    </div>
    <button id="btn-burger">
        <img src="./img/icons/burgermenu.png" alt="Menu burger">
    </button>
    <ul class="nav-links">
        <li><a href="./formation.php" alt="lien vers page formation">La Formation</a></li>
        <li><a href="./project.php" alt="lien vers page projets étudiants">Projets</a></li>
        <li><a href="./aftermmi.php" alt="lien vers page après MMI">Après MMI</a></li>
        <li><a href="./international.php" alt="lien vers page international">International</a></li>
        <li><a href="./about.php" alt="lien vers page à propos">À propos</a></li>
        <?php
            if (isset($_SESSION['login'])) {
                echo "<li><a href=\"./deconnexion.php\" alt=\"lien vers page déconnexion\">Déconnexion</a></li>";
            }
        ?>
        <li>
            <button id="btn-theme" alt="Bouton mode Jour/Nuit">
                <div class="day">
                    <img src="./img/icons/moon.webp" alt=""><p>Nuit</p>
                </div>
                <div  class="night">
                <img src="./img/icons/sun.webp" alt=""><p>Jour</p>
                </div>
            </button>
        </li>
    </ul>
</nav>

<?php
    $pages = array(
        "Actualités" => "news.php",
        "Formation" => "formation.php",
        "International" => "international.php",
        "À propos" => "about.php",
        "Projets" => "project.php",
        "Après mmi" => "aftermmi.php",
        "Détails Projet" => "detail-project.php"
    );

    $current_page = basename($_SERVER['PHP_SELF']);

    echo "<div class='breadcrumb'>";
    foreach ($pages as $page => $url) {
        if ($url == $current_page) {
            echo "Accueil > " . $page;
        }
    }
    echo "</div>";
?>


