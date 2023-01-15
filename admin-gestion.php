<?php
    require("./model.php");
    $teachers = getTeachers();
    $projects = getProjects();
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
    <link rel="stylesheet" href="admin-gestion-style.css">
    <title>Admin - Gestion du site</title>
</head>
<body>
    <?php 
        include("./navbar.php");
    ?>

    <section id="home">
        <h1>Bienvenue Admin</h1>
    </section>

    <section id="actu">
        <h2>Actualités</h2>
        <h3>Insérer une actualité</h3>
        <form action="./controleur-news.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="title_news">Titre</label>
                <input type="text" name="title_news">
            </div>

            <div>
                <label for="content_news">Texte</label>
                <textarea name='content_news' cols='30' rows='10'></textarea>
            </div>

            <div>
                <label for="photo_news">Image</label>
                <input type="file" name="photo_news">
            </div>

            <div>
                <label for="info_photo_news">Description de l’image (pas plus de 100 caractères)</label>
                <input type="text" name="info_photo_news">
            </div>

            <div>
                <label for="date-news">Date</label>
                <input type="date" name="date_news">
            </div>

            <div>
                <input type="submit" value="Enregistrer">
            </div>
        </form>
        <h3>Gérer les actualités</h3>
        <TABLE border=1>
            <tr><th>Titre</th><th>Texte</th><th>Date</th></tr>

            <?php
                foreach ($news as $article){
                    echo "<form action=\"\"><tr><td>{$article->title_news}</td><td>{$article->content_news}</td><td>{$article->date_news}</td><td><input type=\"submit\" value=\"Supprimer\"></td></tr>
                    </form>";
                }
            ?>
            </TABLE>
    </section>
    <section>
        <h2>Projets Étudiants</h2>
        <h3>Insérer un projet étudiant</h3>
        <form action="">
            <div>
                <label for="title">Titre du projet</label>
                <input type="text" name="title" id="">
            </div>

            <div>
                <label for="students">Étudiant(s) ayant participé</label>
                <input type="text" name="students" id="">
            </div>

            <div>
                <label for="content">Description du projet</label>
                <input type="text" name="content" id="">
            </div>

            <div>
                <label for="content">Citation - témoignage final d'un étudiant</label>
                <input type="text" name="content" id="">
            </div>

            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="">
            </div>

            <div>
                <label for="desc-image">Description de l’image (pas plus de 100 caractères)</label>
                <input type="text" name="desc-image" id="">
            </div>

            <div>
                <label for="date-projet">Date</label>
                <input type="date" name="date-projet" id="">
            </div>

            <div>
                <label for="categorie">Catégorie</label>
                <select name="categorie" id="">
                    <option value="#">-- sélectionner un catégorie --</option>
                    <option value="1">Développement web</option>
                    <option value="2">Design</option>
                    <option value="3">Audiovisuel</option>
                    <option value="4">Communication</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Enregistrer">
            </div>
        </form>
        <h3>Gérer les étudiants</h3>
        <TABLE border=1>
            <tr><th>Titre</th><th>Étudiants</th><th>Description</th><th>Citation</th><th>Date</th></tr>

            <?php
                foreach ($projects as $project){
                    echo "<form action=\"\"><tr><td>{$project->name_project}</td><td>{$project->name_author}</td><td>{$project->description_project}</td><td>{$project->quote_project}</td><td>{$project->date_project}</td><td><input type=\"submit\" value=\"Supprimer\"></td></tr>
                    </form>";
                }
            ?>
            </TABLE>
    </section>
    <section>
        <h2>Enseignant</h2>
        <h3>Insérer un enseignant</h3>
        <form action="">
            <div>
                <label for="name">Prénom NOM</label>
                <input type="text" name="name" id="">
            </div>

            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="">
            </div>

            <div>
                <label for="desc-image">Description de l’image (pas plus de 100 caractères)</label>
                <input type="text" name="desc-image" id="">
            </div>

            <div>
                <label for="desc-image">Matière(s) enseignée(s)</label>
                <input type="text" name="desc-image" id="">
            </div>

            <div>
                <input type="submit" value="Enregistrer">
            </div>
        </form>
        <h3>Gérer les enseignant</h3>

            <TABLE border=1>
            <tr><th>Prénom NOM</th><th>Matière(s)</th></tr>

            <?php
                foreach ($teachers as $teacher){
                    echo "<form action=\"\"><tr><td>{$teacher->name_teacher}</td><td>{$teacher->subject_teacher}</td><td><input type=\"submit\" value=\"Supprimer\"></td></tr>
                    </form>";
                }
            ?>
            </TABLE>
    </section>

    <?php 
        include("./footer.php");
    ?>
    
</body>
</html>