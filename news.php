<?php
    session_start();
    require("model.php");
    $news = getNews();
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

        <section id="news">
            <div class="news-list">
                <ul>
                        <?php $i = 0; ?>
                        <?php foreach($news as $article): ?>
                            <li>
        
                                <?php if ($i % 2 == 0): ?>
        
                                    <?php if (!empty($article-> photo_news)): ?>
                                        <img src="data:image/webp;base64,<?= base64_encode($article->photo_news) ?>" alt="<?= $article->alt_news ?>"/>
                                    <?php else: ?>
                                        <div class="img_notfound">
                                            <p>No image found.</p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="text">
                                        <p>
                                            <?= $article ->title_news ?> <br><br>
                                            <?= $article ->content_news ?> <br><br>
                                            <?= $article ->date_news ?>
                                        </p>
                                    </div>
        
                                <?php else: ?>
        
                                    <div class="text">
                                        <p>
                                            <?= $article ->title_news ?> <br><br>
                                            <?= $article ->content_news ?> <br><br>
                                            <?= $article ->date_news ?>
                                        </p>
                                    </div>
                                    <?php if (!empty($article-> photo_news)): ?>
                                        <img src="data:image/webp;base64,<?= base64_encode($article->photo_news) ?>" alt="<?= $article->alt_news ?>"/>
                                    <?php else: ?>
                                        <div class="img_notfound">
                                            <p>No image found.</p>
                                        </div>
                                    <?php endif; ?>
        
                                <?php endif; ?>
        
        
                            </li>
                            <?php $i++; ?>
                        <?php endforeach; ?>              
                    </ul>

            </div>
        </section>

        <?php 
            include("./footer.php")
        ?>
</body>
</html>