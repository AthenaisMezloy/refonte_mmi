<script src=
   "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<link rel="stylesheet" href="footer-nav-style.css">
<nav>
    <div>
        <a href="./index.php">
        <img src="./img/assets/logo_img.svg" alt="bouton de redirection vers la page d'accueil">
        </a>
    </div>
    <ul class="list">
        <li><a href="./formation.php">La Formation</a></li>
        <li><a href="./project.php">Projets</a></li>
        <li><a href="./aftermmi.php">Après MMI</a></li>
        <li><a href="./international.php">International</a></li>
        <li><a href="./about.php">À propos</a></li>
        <?php
            if (isset($_SESSION['login'])) {
                echo "<li><a href=\"./deconnexion.php\">Déconnexion</a></li>";
            }
        ?>
        <li>
            <button id="btn-theme">
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


