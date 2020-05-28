<?php
    session_start();

    $response = array();

    if(isset($_POST['location_materialfive_request']) && isset($_POST['material_location']) && isset($_POST['location_materialfive_phone'])
    && isset($_POST['location_materialfive_email']) && isset($_POST['type_equipment_five']) && isset($_POST['make_heat_five'])
    && isset($_POST['type_five']) && isset($_POST['name_produce_equipment_five']) && isset($_POST['country_produce_equipment_five']) && isset($_POST['selected_five'])){

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
        $selected_five = $_POST['selected_five'];

        $company_id = $_SESSION["company_id"];
        $user_request = $_SESSION["user_id"];
        $company_name = $_SESSION["name"];

        $check = array();
        mysqli_autocommit($conn, FALSE);

        $sql3 = "INSERT INTO place(place_id,department_name,department_id,address,tel,fax,email,place_type,department_type,zone,risk_group)
                VALUES(NULL,'$company_name','$company_id','$material_location','$location_materialfive_phone','NULL','$location_materialfive_email','01','NULL','NULL','NULL')";
        if(!mysqli_query($conn,$sql3)){
            array_push($check,"error");
        }

        $place_id = mysqli_insert_id($conn);
        $sql1 = "INSERT INTO license(license_id,license_type,license_number,place_id,sid,license_approve_person,license_status,start_date,expire_date,latest_inspect_date,next_inspect_date)
                VALUES(NULL,'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู','RE','$place_id','$company_id',NULL,'รอตรวจสอบคำขอ',CURRENT_TIMESTAMP,NULL,NULL,NULL)";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }

        $license_id = mysqli_insert_id($conn);
        $sql = "INSERT INTO materiallocation(material_id,license_id,company_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material,fav_location)
                VALUES(NULL,'$license_id','$company_id','$material_location','$location_materialfive_phone','$location_materialfive_email',NULL,'$location_materialfive_request',NULL,NULL,'$selected_five')";
        if(!mysqli_query($conn,$sql)){
            array_push($check,"error");
        }

        $sql2 = "INSERT INTO materialspecial(material_id,license_id,type_atomic,power_heat,type_atomic_reactor,producename_atomic,country_produce_atomic)
                VALUES(NULL,'$license_id','$type_equipment_five','$make_heat_five','$type_five','$name_produce_equipment_five','$country_produce_equipment_five')";
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
    }
    $response['success'] = true;
    echo json_encode($response);
    mysqli_close($conn);
?>