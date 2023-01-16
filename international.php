<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="international-style.css">
    <title>International - BUT MMI Champs</title>
</head>
<body>
    <?php 
        include("./navbar.php")
    ?>

    <section id="home">
        <h1>
            International
        </h1>
    </section>

    <section id="intro">
        <h2>What’s MMI?</h2>
        <div class="content">
            <div class="text-container">
                <p>
                This 3-year degree, which was the object of a reform plan in 2021, deals with Multimedia and Internet Professions.
                At Champs-sur-Marne, at the beginning of the fourth semester, two study tracks are possible : Web development & Interactive device, or Digital creation/design.
                </p>
            </div>
                <img src="./img/international/whatsmmi.webp" alt="">
        </div>
    </section>

    <section id="one-title">
        <h2>About the programme</h2>
        <div class="content">
                <img src="./img/international/about.webp" alt="">
            <div class="text-container">
                <p>
                The training is organized around six semesters. The hourly volume is 2600 hours divided over three years, including 600 hours devoted to tutored projects, shared between communication, languages, IT, graphic culture, scientific culture and networks.
                At least 42% of the hours are devoted to practical lessons and professional situations.
                Lessons are divided into lectures, seminars/tutorials, and practical works.               
                </p>
            </div>
        </div>
    </section>

    <section id="quebec">
        <h2>Québec’s travel</h2> 
        <div class="content">
            <div class="text-container">
                <p>
                During the fourth semester, you have the chance to study in Quebec. It’s a way for the MMI students to have an unusual experience, to discover another culture.
                The University is in partnership with two schools, the UQAC (Université du Québec à Chicoutimi) and the CÉGEP of Sainte-Foy (Collège d’Enseignement Général Et Professionnel).              
                </p>
            </div>
                <img src="./img/international/aircanada.webp" alt="">
        </div>
    </section>

    
    <section id="partnerships">
            <h3>Partnerships</h3>
            <div>
                <div class="UQAC">
                    <h4>UQAC</h4>
                    <p>
                    Texte de présentation
                    </p>
                </div>
                <div class="CEGEP">
                    <h4>CÉGEP</h4>
                    <p>
                    Texte de présentation
                    </p>
                </div>
            </div>

    </section>

    <section id="join-mmi">
        <h3>How to join MMI ?</h3>
        <ul>
            <li>
                <p>Étape 1</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.L
                </p>
            </li>
            <li>
                <p>Étape 2</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.L
                </p>
            </li>
            <li>
                <p>Étape 3</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.L
                </p>
            </li>
        </ul>

    </section>

    <?php 
        include("./footer.php")
    ?>
</body>
</html>