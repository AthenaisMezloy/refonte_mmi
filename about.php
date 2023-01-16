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
    <link rel="stylesheet" href="about-style.css">
    <title>MMI Champs - À propos</title>
</head>
<body>
    <?php 
        include("./navbar.php")
    ?>
    <section id="home">
        <h1>La Team TABL</h1>
        <p>Citation ? - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="slider">
            <button class="btn-left" onclick="slide(-1)"><img src="./img/about/arrow_img.svg" alt=""></button>
            <div class="slider-container">
                <ul>
                    <img src="" alt="">
                    <p></p>
                </ul>
                <ul>
                    <img src="" alt="">
                    <p></p>
                </ul>
                <ul>
                    <img src="" alt="">
                    <p></p>
                </ul>
            </div>
            <button class="btn-right" onclick="slide(1)"><img src="./img/about/arrow_img.svg" alt=""></button>
        </div>
    </section>
    <?php 
        include("./footer.php")
    ?>
</body>
</html>