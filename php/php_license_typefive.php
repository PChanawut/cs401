<?php
    session_start();

    $response = array();

    if(isset($_POST['location_materialfive_request']) && isset($_POST['material_location']) && isset($_POST['location_materialfive_phone'])
    && isset($_POST['location_materialfive_email']) && isset($_POST['type_equipment_five']) && isset($_POST['make_heat_five'])
    && isset($_POST['type_five']) && isset($_POST['name_produce_equipment_five']) && isset($_POST['country_produce_equipment_five'])){

        include('config/database.php');
        
        $location_materialfive_request = $_POST['location_materialfive_request'];
        $material_location = $_POST['material_location'];
        $location_materialfive_phone = $_POST['location_materialfive_phone'];
        $location_materialfive_email = $_POST['location_materialfive_email'];
        $type_equipment_five = $_POST['type_equipment_five'];
        $make_heat_five = $_POST['make_heat_five'];
        $type_five = $_POST['type_five'];
        $name_produce_equipment_five = $_POST['name_produce_equipment_five'];
        $country_produce_equipment_five = $_POST['country_produce_equipment_five'];

        $company_id = $_SESSION["company_id"];
        $user_request = $_SESSION["user_id"];

        $check = array();
        mysqli_autocommit($conn, FALSE);

        $sql1 = "INSERT INTO license(license_id,type_license,request_number,license_number,company_id,license_applicant,license_approve_person,license_status,start_license,end_license)
                VALUES(NULL,'5','RE','NULL','$company_id','$user_request','NULL','NULL',CURRENT_TIMESTAMP,'NULL')";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }

        // $license_id = mysqli_insert_id($conn);
        // $sql = "INSERT INTO materiallocation(material_id,license_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
        //         VALUES(NULL,'$license_id','$material_location','$location_materialfive_phone','$location_materialfive_email','NULL','$location_materialfive_request','NULL','NULL')";
        // if(!mysqli_query($conn,$sql)){
        //     array_push($check,"error");
        // }

        // $sql2 = "INSERT INTO materialspecial(material_id,license_id,type_atomic,power_heat,type_atomic_reactor,producename_atomic,country_produce_atomic)
        //         VALUES(NULL,'$license_id','$type_equipment_five','$make_heat_five','$type_five','$name_produce_equipment_five','$country_produce_equipment_five')";
        // if(!mysqli_query($conn,$sql2)){
        //     array_push($check,"error");
        // }

        if(!empty($check)){
            mysqli_rollback($conn);
            $response['success'] = false;
            echo json_encode($response);
            mysqli_close($conn);
            exit();
        }
        $response['success'] = true;
        mysqli_commit($conn);
    }
    $response['success'] = true;
    echo json_encode($response);
    mysqli_close($conn);
?>