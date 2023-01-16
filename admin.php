<?php
    session_start();
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
                        <div>
                            <input type="password" name="pwd" id="myInput">
                            <input type="checkbox" onclick="myFunction()">Show Password
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