<?php
    function OpenCon(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "";

        $conn = new mysqli($servername, $username, $password, $database)or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    function closeCon($conn){
        $conn->close();
    }
?>
