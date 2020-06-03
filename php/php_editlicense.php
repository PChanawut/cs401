<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["company_id"])){
        include('config/database.php');

        $license_id = $_POST['license_id'];

        $sql = "SELECT * FROM license WHERE license_id = ".$license_id."";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            if($row['license_id'] == $license_id){
                
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