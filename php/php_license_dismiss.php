<?php
    session_start();
    $response = array();
    
    if(isset($_POST['license_id']) && isset($_POST['type'])){
        $license_id = $_POST['license_id'];
        $sql = "UPDATE license SET license_status = 'ใบอนุญาตถูกยกเลิก' WHERE license_id = '$license_id'";
        include('config/database.php');
        if(mysqli_query($conn,$sql)){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }
    }else if(isset($_POST['license_id'])){
        $license_id = $_POST['license_id'];

        $sql = "UPDATE license SET license_status = 'ขอยกเลิก' WHERE license_id = '$license_id'";
        include('config/database.php');
        if(mysqli_query($conn,$sql)){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>