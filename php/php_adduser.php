<?php
    session_start();
    if(!empty($_SESSION["company_id"])){  
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])
        && isset($_POST['lastname']) && isset($_POST['status']) && isset($_POST['permission']) ){
            include('config/database.php');
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $status = $_POST['status'];
            $permission = $_POST['permission'];
            if($_SESSION['type'] == 'company'){
                $type = 'usercompany';
            }
            $company_id = $_SESSION["company_id"];
            $sql = "INSERT INTO usercompany(usercompany_id,company_id,usercompany_username,usercompany_password,usercompany_fname,usercompany_lname,usercompany_status,usercompany_type,usercompany_ativate,usercompany_permission) 
                    VALUES (NULL,'$company_id','$username','$password','$firstname','$lastname','$status','$type','ativate','$permission');";
            if (mysqli_query($conn, $sql)) {
                echo mysqli_insert_id($conn);
            } else {
                echo "error";
            }
            mysqli_close($conn);
        }else{
            echo 'error';
        }
	}else{
        echo 'error';
    }
?>