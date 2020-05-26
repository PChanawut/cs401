<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["company_id"])){
        include('config/database.php');

        $staff_id = $_POST['staff_id'];

        $sql = "SELECT * FROM companystaff WHERE staff_id = ".$staff_id."";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            if($row['fav_staff'] = 'select'){
                $response['name'] = $row['staff_name'];
                $response['idcard'] = $row['staff_idcard'];
                $response['position'] = $row['staff_position'];
                $response['age'] = $row['staff_age'];
                $response['nationality'] = $row['staff_nationality'];
                $response['phone'] = $row['staff_phone'];
                $response['email'] = $row['staff_email'];
                $response['address'] = $row['staff_address'];
                $response['qualification'] = $row['staff_qualification'];
                $response['no_regis'] = $row['staff_no_regis'];
                $response['staff_work_name'] = $row['staff_work_name'];
                $response['art_license'] = $row['staff_art_license'];
                $response['start_work'] = $row['staff_start_work'];
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