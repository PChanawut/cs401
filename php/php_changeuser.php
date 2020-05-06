<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["user_id"])){ 
        if($_SESSION["permission"][4] == 1){
            if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) 
            && isset($_POST['lastname']) && isset($_POST['status']) && isset($_POST['permission'])
            && isset($_POST['id'])){
                include('config/database.php');
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $status = $_POST['status'];
                $permission = $_POST['permission'];
                $name = $firstname." ".$lastname;

                $id = $_POST['id'];
                $company_id = $_SESSION["company_id"];
                //https://stackoverflow.com/questions/26435559/php-form-update-mysql-only-if-not-null
                    // make sure the user doesn't attempt to POST a column that doesn't exist in our table,
                    // which will lead to a SQL error, or worse, allow the user to run custom SQL.
                if($password != ""){
                    $sql = "UPDATE usercompany SET usercompany_username = '$username', usercompany_password = '$password', usercompany_name = '$name', usercompany_status = '$status', usercompany_permission = '$permission' WHERE usercompany_id = '$id' AND company_id = '$company_id'";
                }else{
                    $sql = "UPDATE usercompany SET usercompany_username = '$username', usercompany_name = '$name', usercompany_status = '$status', usercompany_permission = '$permission' WHERE usercompany_id = '$id' AND company_id = '$company_id'";
                }
                if (mysqli_query($conn, $sql)) {
                    $response['success'] = true;
                } else {
                    $response['success'] = false;
                }
                mysqli_close($conn);
            }
        }
	}else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>