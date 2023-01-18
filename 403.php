<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="403-style.css" as="style">
    <link rel="stylesheet" href="403-style.css">
    <title>Erreur 403</title>
</head>

<body>
<?php 
        include("./navbar.php")
        ?>
<section>
    <div class="page">
        <div class="adresse">
<h1>403 - Adresse Interdite</h1>
</div>
<div class="box">
    <p>Nous sommes désolés, mais l’accès au contenu demandé est interdit.</p>

</div>
</div>
</section>
   

    <?php 
        include("./footer.php")
    ?>

</body>
</html>