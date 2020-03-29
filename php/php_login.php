<?php
    session_start();

    $response = array();
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        include('config/database.php');
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM usercompany 
                WHERE usercompany_username='".$username."' AND usercompany_password='".$password."'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            if($row['usercompany_ativate'] != 'deativate'){
                $_SESSION['company_id'] = $row['company_id'];
                $_SESSION['user_id'] = $row['usercompany_id'];
                $_SESSION['name'] = $row['usercompany_name'];
                $_SESSION['type'] = $row['usercompany_type'];

                $_SESSION['permission'] = array();
                for($i=0 ; $i < strlen($row['usercompany_permission']) ; $i++){
                    $_SESSION['permission'][$i] = $row['usercompany_permission'][$i];
                }
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }else{
            $response['success'] = false;
        }
        mysqli_close($conn);
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>