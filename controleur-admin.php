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
	
?>