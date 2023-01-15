<?php
	session_start();
	require("./model.php");

// Login
    $session = $_GET["#session"];

	if ($session == 1) {
			
		$result_login = traiteLogin();

		if ($result_login == 1) {
            header('Location: admin-gestion.php');
            exit;
		}
		if ($result_login == 2) {
			header ('Location:admin.php?err=mdp');
		}
		if ($result_login == 3) {
			header ('Location:admin.php?err=login');
		}
	}

	if(isset($_POST['save-news'])){
        $title = $_POST["title_news"];
        $content = $_POST["content_news"];
        $file = $_FILES["photo_news"];
        if ($file["error"] == UPLOAD_ERR_OK) {
            $image = file_get_contents($file["tmp_name"]);
            // insert the image into the database
        } else {
            // handle the error
        };
        $desc_image = $_POST["alt_news"];
        $date_envoie = $_POST["date_news"];
        insertNews($title, $content, $image, $desc_image, $date_envoie);
        header("Location: admin-gestion.php");
    }

	if(isset($_POST['delete-news'])) {
		$id_news = $_POST['id_news'];
		deleteNews($id_news);
		header('Location: admin-gestion.php');
	}

	if(isset($_POST['save-project'])){
        $title = $_POST["name_project"];
        $author = $_POST["name_author"];
        $content = $_POST["description_project"];
        $quote = $_POST["quote_project"];
        $file = $_FILES["photo_project"];
        if ($file["error"] == UPLOAD_ERR_OK) {
            $image = file_get_contents($file["tmp_name"]);
            // insert the image into the database
        } else {
            // handle the error
        };
        $desc_image = $_POST["alt_project"];
        $date_envoie = $_POST["date_project"];
		$ext_icon = $_POST["ext_icon"];
        insertProject($title, $author, $content, $quote, $image, $desc_image, $date_envoie, $ext_icon);
        header("Location: admin-gestion.php");
    }

	if(isset($_POST['delete-project'])) {
		$id_project = $_POST['id_project'];
		deleteProject($id_project);
		header('Location: admin-gestion.php');
	}
?>