<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include("./meta.php");
    ?>
    <link rel="preload" href="admin-style.css" as="style">
    <link rel="stylesheet" href="admin-style.css">
    <title>Identification admin - BUT MMI Champs</title>
</head>
<body>
        <?php 
            include("./navbar.php");
        ?>
        <section id="log-page">

			<form action="./controleur-admin.php">
                <ul>
                    <li><h1>Entrez vos identifiants</h1></li>
                    <li>
                        <label for="login">Login : </label>
                        <INPUT type=text name="login">
                        <?php 
                        if (isset($_GET["err"]) && $_GET["err"]=="login") { echo "ATTENTION MAUVAIS LOGIN";}
                        ?>
                    </li>
                    <li>
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" name="pwd" id="myInput">
                        <div class="show-pwd">
                            <label for="show_pwd">Montrer mot de passe</label>
                            <input type="checkbox" onclick="myFunction()" name="show_pwd" id="myButton">
                        </div>
                        <?php 
                        if (isset($_GET["err"]) && $_GET["err"]=="mdp") { echo "ATTENTION MAUVAIS MOT DE PASSE";}
                        ?>
                    </li>
                    <li>
                        <input type="hidden" name="#session" value="1">
                        <input class="btn-bubble" type=submit value= "OK">
                    </li>
                </ul>
			</form>

		</section>
    
        <?php 
            include("./footer.php")
        ?>
</body>
</html>