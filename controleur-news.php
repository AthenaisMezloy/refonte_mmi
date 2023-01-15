<?php
    require("model.php");

        $title = $_POST["title_news"];
        $content = $_POST["content_news"];
        $file = $_FILES["photo_news"];
        if ($file["error"] == UPLOAD_ERR_OK) {
            $image = file_get_contents($file["tmp_name"]);
            // insert the image into the database
        } else {
            // handle the error
        };
        $desc_image = $_POST["info_photo_news"];
        $date_envoie = $_POST["date_news"];
        insertNews($title, $content, $image, $desc_image, $date_envoie);

?>