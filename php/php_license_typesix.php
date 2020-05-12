<?php
    $response = array();

    if(isset($_POST['type_benefit_six']) && isset($_POST['material_special_six']) && isset($_POST['material_num_six']) && isset($_POST['unit_six'])
    && isset($_POST['changeto_six']) && isset($_POST['changeto_num_six']) && isset($_POST['unit_changeto_six']) && isset($_POST['material_location'])
    && isset($_POST['location_phone_six']) && isset($_POST['location_email_six']) && isset($_POST['material_location_chemical']) && isset($_POST['location_materialsix_phone'])
    && isset($_POST['location_materialsix_email']) && isset($_POST['safe_name']) && isset($_POST['safe_idcard_six']) && isset($_POST['safe_position_six']) && isset($_POST['safe_age_six'])
    && isset($_POST['safe_nationality_six']) && isset($_POST['safe_phone_six']) && isset($_POST['safe_email_six']) && isset($_POST['safe_address']) && isset($_POST['safe_qualification_six']) && isset($_POST['safe_number_six'])
    && isset($_POST['make_name']) && isset($_POST['make_idcard_six']) && isset($_POST['make_position_six']) && isset($_POST['make_age_six']) && isset($_POST['make_nationality_six']) && isset($_POST['make_phone_six']) && isset($_POST['make_email_six'])
    && isset($_POST['make_address']) && isset($_POST['make_qualification_six']) && isset($_POST['make_number_six'])){

        include('config/database.php');

        // step one
        $type_benefit_six = $_POST['type_benefit_six'];
        $material_special_six = $_POST['material_special_six'];
        $material_num_six = $_POST['material_num_six'];
        $unit_six = $_POST['unit_six'];
        $changeto_six = $_POST['changeto_six'];
        $changeto_num_six = $_POST['changeto_num_six'];
        $unit_changeto_six = $_POST['unit_changeto_six'];

        // step two
        $material_location_chemical = $_POST['material_location_chemical'];
        $location_materialsix_phone = $_POST['location_materialsix_phone'];
        $location_materialsix_email = $_POST['location_materialsix_email'];
        
        $material_location = $_POST['material_location'];
        $location_phone_six = $_POST['location_phone_six'];
        $location_email_six = $_POST['location_email_six'];

        // step three
        $safe_name = $_POST['safe_name'];
        $safe_idcard_six = $_POST['safe_idcard_six'];
        $safe_position_six = $_POST['safe_position_six'];
        $safe_age_six = $_POST['safe_age_six'];
        $safe_nationality_six = $_POST['safe_nationality_six'];
        $safe_phone_six = $_POST['safe_phone_six'];
        $safe_email_six = $_POST['safe_email_six'];
        $safe_address = $_POST['safe_address'];
        $safe_qualification_six = $_POST['safe_qualification_six'];
        $safe_number_six = $_POST['safe_number_six'];

        $make_name = $_POST['make_name'];
        $make_idcard_six = $_POST['make_idcard_six'];
        $make_position_six = $_POST['make_position_six'];
        $make_age_six = $_POST['make_age_six'];
        $make_nationality_six = $_POST['make_nationality_six'];
        $make_phone_six = $_POST['make_phone_six'];
        $make_email_six = $_POST['make_email_six'];
        $make_address = $_POST['make_address'];
        $make_qualification_six = $_POST['make_qualification_six'];
        $make_number_six = $_POST['make_number_six'];

        $sql = "INSERT INTO materialnatural(material_id,type_benefit,material_special,material_num,unit,changeto,changeto_num,unit_changeto)
                VALUES(NULL,'$type_benefit_six','$material_special_six','$material_num_six','$unit_six','$changeto_six','$changeto_num_six','$unit_changeto_six')";

        $query = mysqli_query($conn,$sql);
        if($query){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql2 = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$material_location_chemical','$location_materialsix_phone','$location_materialsix_email','NULL','NULL','NULL','CHEMICAL')";

        $query2 = mysqli_query($conn,$sql2);
        if($query2){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql3 = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$material_location','$location_phone_six','$location_email_six','NULL','NULL','NULL','NOT CHEMICAL')";
        
        $query3 = mysqli_query($conn,$sql3);
        if($query3){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql4 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'เจ้าหน้าที่ความปลอดภัยทางรังสี','$safe_name','$safe_idcard_six','$safe_position_six','$safe_age_six','$safe_nationality_six','$safe_phone_six','$safe_email_six','$safe_address','$safe_qualification_six','$safe_number_six','NULL','NULL','NULL')";
        
        $query4 = mysqli_query($conn,$sql4);
        if($query4){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql5 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้ปฏิบัติงานทางรังสี','$make_name','$make_idcard_six','$make_position_six','$make_age_six','$make_nationality_six','$make_phone_six','$make_email_six','$make_address','$make_qualification_six','$make_number_six','NULL','NULL','NULL')";

        $query5 = mysqli_query($conn,$sql5);
        if($query5){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        mysqli_close($conn);
    }else{
        $response['not if eiei'] = false;
    }
    echo json_encode($response);
?>