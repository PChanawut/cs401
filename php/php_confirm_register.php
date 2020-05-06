<?php
    session_start();

    $response = array();
    
    if(isset($_POST['info_register_id'])){
        include('config/database.php');
        $info_register_id = $_POST['info_register_id'];

        $check = array();
        mysqli_autocommit($conn, FALSE);
        $sql1 = "UPDATE company SET company_status='success' WHERE company_id='$info_register_id'";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }
        $sql2 = "UPDATE usercompany SET usercompany_ativate='ativate' WHERE company_id='$info_register_id' AND (usercompany_type='company' OR usercompany_type='person')";
        if(!mysqli_query($conn,$sql2)){
            array_push($check,"error");
        }
        if(!empty($check)){
            mysqli_rollback($conn);
            $response['success'] = false;
            echo json_encode($response);
            mysqli_close($conn);
            exit();
        }
        $response['success'] = true;
        mysqli_commit($conn);
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>