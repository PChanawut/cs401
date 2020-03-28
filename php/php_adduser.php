<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["company_id"])){  
        if($_SESSION["permission"][4] == 1){
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
                $name = $firstname." ".$lastname;
                $sql = "INSERT INTO usercompany(usercompany_id,company_id,usercompany_username,usercompany_password,usercompany_name,usercompany_status,usercompany_type,usercompany_ativate,usercompany_permission) 
                        VALUES (NULL,'$company_id','$username','$password','$name','$status','$type','ativate','$permission');";
                if (mysqli_query($conn, $sql)) {
                    $response['success'] = true;
                    $response['id'] = mysqli_insert_id($conn);
                    $response['name'] = $name;
                    $response['status'] = $status;
                } else {
                    $response['success'] = false;
                }
                mysqli_close($conn);
            }else{
                $response['success'] = false;
            }
        }
	}else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>