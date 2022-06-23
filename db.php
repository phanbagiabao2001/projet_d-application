<?php

    $server = "	sql200.epizy.com";
    $username = "epiz_32023503";
    $password = "i9RudBLvVNdntR";
    $dbname = "epiz_32023503_bienvenueabourges";

    $conn = mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
?>