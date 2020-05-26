<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cs402";

    $upload = 'file/'; 

    $conn = new mysqli($servername, $username, $password, $database)or die("Connect failed: %s\n". $conn -> error);
    mysqli_set_charset($conn,"utf8");
?>
