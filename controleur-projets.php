<?php
    session_start();
    require("model.php");

    if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('Location: index.php');
    else
    {
    extract($_GET);
    $id = strip_tags($id);
    $this_projet = getProject($id);
    };
?>