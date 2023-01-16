<?php
    session_start();
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
    <title>Admin - Gestion du site - BUT MMI Champs</title>
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
        <form action="./controleur-admin.php" method="post" enctype="multipart/form-data" class="form-save">
            <div>
                <p>*Champs Obligatoires</p>
            </div>
            <div>
                <label for="title_news">Titre*</label>
                <input type="text" name="title_news" required>
            </div>

            <div>
                <label for="content_news">Texte*</label>
                <textarea name='content_news' cols='30' rows='10'></textarea required>
            </div>

            <div>
                <label for="photo_news">Image*</label>
                <input type="file" name="photo_news" required>
            </div>

            <div>
                <label for="alt_news">Description de l’image (pas plus de 100 caractères)*</label>
                <input type="text" name="alt_news"required>
            </div>

            <div>
                <label for="date-news">Date*</label>
                <input type="date" name="date_news" required>
            </div>

            <div>
                <input type="submit" value="Enregistrer" name="save-news">
            </div>
        </form>
        <h3>Gérer les actualités</h3>
        <table border=1>
        <tr>
            <th>Titre</th>
            <th>Texte</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php foreach ($news as $article): ?>
            <tr>
            <td><?=$article->title_news?></td>
            <td><?=$article->content_news?></td>
            <td><?=$article->date_news?></td>
            <td>
                <form action="./controleur-admin.php" method="post" class="form-delete">
                <input type="hidden" name="id_news" value="<?=$article->id_news?>">
                <input type="submit" value="Supprimer" name="delete-news" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?');">
                </form>
            </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </section>
    <section>
        <h2>Projets Étudiants</h2>
        <h3>Insérer un projet étudiant</h3>
        <form action="./controleur-admin.php" method="post" enctype="multipart/form-data"  class="form-save">
            <div>
                <p>*Champs Obligatoires</p>
            </div>
            <div>
                <label for="name_project">Titre du projet*</label>
                <input type="text" name="name_project" required>
            </div>

            <div>
                <label for="name_author">Étudiant(s) ayant participé*</label>
                <input type="text" name="name_author" required>
            </div>

            <div>
                <label for="description_project">Description du projet*</label>
                <textarea name='description_project' cols='30' rows='10'></textarea required>
            </div>

            <div>
                <label for="quote_project">Citation - témoignage final d'un étudiant*</label>
                <textarea name='quote_project' cols='30' rows='10'></textarea required>
            </div>

            <div>
                <label for="photo_project">Image*</label>
                <input type="file" name="photo_project" required>
            </div>

            <div>
                <label for="alt_project">Description de l’image (pas plus de 100 caractères)*</label>
                <input type="text" name="alt_project" required>
            </div>

            <div>
                <label for="date_project">Date*</label>
                <input type="date" name="date_project" required>
            </div>

            <div>
                <label for="ext_icon">Catégorie*</label>
                <select name="ext_icon" required>
                    <option value="1">Développement web</option>
                    <option value="2">Design</option>
                    <option value="3">Audiovisuel</option>
                    <option value="4">Communication</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Enregistrer" name="save-project">
            </div>
        </form>
        <h3>Gérer les étudiants</h3>
        <TABLE border=1>
            <tr><th>Titre</th><th>Étudiants</th><th>Description</th><th>Citation</th><th>Date</th><th>Action</th></tr>
            <?php foreach ($projects as $project): ?>
            <tr>
            <td><?=$project->name_project?></td>
            <td><?=$project->name_author?></td>
            <td><?=$project->description_project?></td>
            <td><?=$project->quote_project?></td>
            <td><?=$project->date_project?></td>
            <td>
                <form action="./controleur-admin.php" method="post" class="form-delete">
                <input type="hidden" name="id_project" value="<?=$project->id_project?>">
                <input type="submit" value="Supprimer" name="delete-project" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?');">
                </form>
            </td>
            </tr>
        <?php endforeach; ?>
            </TABLE>
    </section>
    <section>
        <h2>Enseignant</h2>
        <h3>Insérer un enseignant</h3>
        <form action="./controleur-admin.php" method="post" enctype="multipart/form-data"  class="form-save">
           <div>
                <p>*Champs Obligatoires</p>
            </div>
            <div>
                <label for="name_teacher">Prénom NOM*</label>
                <input type="text" name="name_teacher" required>
            </div>

            <div>
                <label for="photo_teacher">Image*</label>
                <input type="file" name="photo_teacher" required>
            </div>

            <div>
                <label for="subject_teacher">Matière(s) enseignée(s)*</label>
                <input type="text" name="subject_teacher" required>
            </div>

            <div>
                <input type="submit" value="Enregistrer" name="save-teacher">
            </div>
        </form>
        <h3>Gérer les enseignant</h3>

        <table border=1>
        <tr>
            <th>Prénom NOM</th>
            <th>Matière(s)</th>
            <th>Action</th>
        </tr>
        <?php foreach ($teachers as $teacher): ?>
            <tr>
            <td><?=$teacher->name_teacher?></td>
            <td><?=$teacher->subject_teacher?></td>
            <td>
                <form action="./controleur-admin.php" method="post" class="form-delete">
                <input type="hidden" name="id_teacher" value="<?=$teacher->id_teacher?>">
                <input type="submit" value="Supprimer" name="delete-teacher" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?');">
                </form>
            </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </section>

    <?php 
        include("./footer.php");
    ?>
    
</body>
</html>