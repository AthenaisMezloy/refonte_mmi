<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="404-style.css" as="style">
    <link rel="stylesheet" href="404-style.css">
    <title>Erreur 404</title>
</head>

<body>
<?php 
        include("./navbar.php")
        ?>
<section>
    <div class="page">
        <div class="adresse">
<h1>404 - Adresse Introuvable</h1>
</div>
<div class="box">
    <p>La page demandée n’a pas été trouvée ou n’existe pas.<br>
Vérifier votre URL ou retracez le chemin parcouru, peut-être vous y retrouverez vous !</p>

</div>
</div>
</section>
   

    <?php 
        include("./footer.php")
    ?>

</body>
</html>