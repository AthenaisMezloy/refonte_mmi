<?php
    require("model.php");

    if(isset($_POST['save-news'])){
        $title = $_POST["title_news"];
        $content = $_POST["content_news"];
        $file = $_FILES["photo_news"];
        if ($file["error"] == UPLOAD_ERR_OK) {
            $image = file_get_contents($file["photo_news"]);
            // insert the image into the database
        } else {
            // handle the error
        };
        $desc_image = $_POST["info_photo_news"];
        $date_envoie = $_POST["date_news"];
        insertNews($title, $content, $image, $desc_image, $date_envoie);
        echo "<script> alert('News a été créée avec succès !');</script>";
        header("Location: admin-gestion.php");
    }

        if(isset($_POST['delete-news'])) {
            $id_news = $_POST['id_news'];
            deleteNews($id_news);
            header('Location: admin-gestion.php');
        }

?>