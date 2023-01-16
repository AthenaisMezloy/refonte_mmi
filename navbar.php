<script src=
   "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>

<link rel="stylesheet" href="footer-nav-style.css">

<style>
    .dark{ 
    background-color: black; 
    color: white; 
    }

    .dark a{
        color: white;
    }

    .dark .block {
        background-color: black;
    }
    
    nav a:hover {
        text-decoration: underline;
    }

</style>

<nav>
    <div>
        <a href="./index.php">
        <img src="./img/assets/logo_img.svg" alt="">
        </a>
    </div>
    <ul class="list">
        <li><a href="./index.php">Accueil</a></li>
        <li><a href="./formation.php">La Formation</a></li>
        <li><a href="./project.php">Projets</a></li>
        <li><a href="./aftermmi.php">Après MMI</a></li>
        <li><a href="./international.php">International</a></li>
        <li><a href="./about.php">À propos</a></li>
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
<div class="display">
    <div class="syllabus">
      <a href="#">GeeksforGeeks / </a>
    </div>
  </div>

