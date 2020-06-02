<?php
    session_start();
    $response = array();
    
    if(isset($_POST['license_id']) && isset($_POST['type'])){
        $license_id = $_POST['license_id'];
        $type = $_POST['type'];
        if($type == "confirm"){
            $name_approve = $_SESSION["name"];
            $date = date('Y-m-d', strtotime('+5 year'));
            $sql = "UPDATE license SET license_status = 'สำเร็จ',expire_date = '$date' WHERE license_id = '$license_id'";
            include('config/database.php');
            if(mysqli_query($conn,$sql)){
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }else if($type == "dismiss"){
            $name_approve = $_SESSION["name"];
            $sql = "UPDATE license SET license_status = 'ใบอนุญาตถูกยกเลิก' WHERE license_id = '$license_id'";
            include('config/database.php');
            if(mysqli_query($conn,$sql)){
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }else{
            $response['success'] = false;
        }
    }else{
        $response['success'] = false;
    }

    echo json_encode($response);
?>