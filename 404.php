<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/icons/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
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