<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="news-style.css">
    <title>MMI Champs - Actualités</title>
</head>
<body>
        <?php 
            include("./navbar.php")
        ?>

        <section id="home">
            <h1>Actualités</h1>
        </section>

        <section id="news-list">
            <ul>
                <li>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="img-container">
                        <img src="#" alt="">
                    </div>
                    <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </li>
            </ul>
        </section>

        <?php 
            include("./footer.php")
        ?>
</body>
</html>