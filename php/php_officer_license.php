<?php
    session_start();
    $response = array();
    
    if(isset($_POST['license_id']) && isset($_POST['type'])){
        $license_id = $_POST['license_id'];
        $type = $_POST['type'];

        if($type == "confirm"){
            $name_approve = $_SESSION["name"];
            $sql = "UPDATE license SET 	license_approve_person = '$name_approve' ,license_status = 'เจ้าหน้าที่ยืนยัน' WHERE license_id = '$license_id'";
            include('config/database.php');
            if(mysqli_query($conn,$sql)){
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }else if($type == "dismiss"){
            $name_approve = $_SESSION["name"];
            $sql = "UPDATE license SET 	license_approve_person = '$name_approve' ,license_status = 'ใบอนุญาตถูกยกเลิก' WHERE license_id = '$license_id'";
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