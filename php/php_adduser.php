<?php
    session_start();
    if(!empty($_SESSION["company_id"])){  
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])
        && isset($_POST['lastname']) && isset($_POST['status'])){
            include('config/database.php');
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $status = $_POST['status'];

            $company_id = $_SESSION["company_id"];
            $sql = "INSERT INTO usercompany(usercompany_id,company_id,usercompany_username,usercompany_password,usercompany_fname,usercompany_lname,usercompany_status) 
            VALUES (NULL,'$company_id','$username','$password','$firstname','$lastname','$status');";
            if (mysqli_query($conn, $sql)) {
                echo "success";
            } else {
                echo "error";
            }
        }else{
            echo 'invalid';
        }
	}else{
        echo 'permission';
    }
?>