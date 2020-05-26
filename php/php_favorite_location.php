<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["company_id"])){
        include('config/database.php');

        $material_id = $_POST['material_id'];

        $sql = "SELECT * FROM materiallocation WHERE material_id = ".$material_id."";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            if($row['fav_location'] = 'select'){
                $response['address'] = $row['material_address'];
                $response['phone'] = $row['material_phone'];
                $response['email'] = $row['material_email'];
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