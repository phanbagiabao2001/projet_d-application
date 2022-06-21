<?php

    session_start();
    if (!isset($_SESSION[$user])) {
        header("location:accueil.html");
    }


    include 'config.php';
	$post = $_POST["post"];
    $sql = "INSERT INTO post (content) values ('$post')";
    mysqli_query($conn,$sql);

    
    
    
?>