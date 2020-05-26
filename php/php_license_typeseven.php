<?php
    session_start();

    $response = array();

    if(isset($_POST['material_location']) && isset($_POST['location_materialseven_phone']) && isset($_POST['location_materialseven_email'])
    && isset($_POST['location_materialseven_benefit']) && isset($_POST['no_reference_seven']) && isset($_POST['operation_type_seven']) && isset($_POST['manufacturer_material_seven'])
    && isset($_POST['material_number_seven']) && isset($_POST['number_xray_seven']) && isset($_POST['work_style_seven']) && isset($_POST['high_power_kgv'])
    && isset($_POST['high_power_mgv']) && isset($_POST['high_power_mma']) && isset($_POST['locationname_material_seven']) && isset($_POST['company_sale_seven']) && isset($_POST['safe_name'])
    && isset($_POST['safe_idcard_seven']) && isset($_POST['safe_position_seven']) && isset($_POST['safe_age_seven']) && isset($_POST['safe_nationality_seven']) && isset($_POST['safe_phone_seven']) && isset($_POST['safe_email_seven'])
    && isset($_POST['safe_address']) && isset($_POST['safe_qualification_seven']) && isset($_POST['safe_number_seven']) && isset($_POST['make_name']) && isset($_POST['make_idcard_seven']) && isset($_POST['make_position_seven']) && isset($_POST['make_age_seven'])
    && isset($_POST['make_nationality_seven']) && isset($_POST['make_phone_seven']) && isset($_POST['make_email_seven']) && isset($_POST['make_address']) && isset($_POST['make_qualification_seven']) && isset($_POST['make_number_seven']) && isset($_POST['doctor_name'])
    && isset($_POST['doctor_idcard_seven']) && isset($_POST['doctor_position_seven']) && isset($_POST['doctor_age_seven']) && isset($_POST['doctor_nationality_seven']) && isset($_POST['doctor_phone_seven']) && isset($_POST['doctor_email_seven']) && isset($_POST['doctor_address'])
    && isset($_POST['doctor_hospital_name_seven']) && isset($_POST['doctor_artlicense_seven']) && isset($_POST['doctor_date_start_seven']) && isset($_POST['selected_seven']) && isset($_POST['safe_selected_seven']) && isset($_POST['make_selected_seven']) && isset($_POST['doctor_selected_seven'])){

        include('config/database.php');

        // step one
        $material_location = $_POST['material_location'];
        $location_materialseven_phone = $_POST['location_materialseven_phone'];
        $location_materialseven_email = $_POST['location_materialseven_email'];
        $location_materialseven_benefit = $_POST['location_materialseven_benefit'];
        $selected_seven = $_POST['selected_seven'];

        // step two
        $no_reference_seven = $_POST['no_reference_seven'];
        $operation_type_seven = $_POST['operation_type_seven'];
        $manufacturer_material_seven = $_POST['manufacturer_material_seven'];
        $material_number_seven = $_POST['material_number_seven'];
        $number_xray_seven = $_POST['number_xray_seven'];
        $work_style_seven = $_POST['work_style_seven'];
        $high_power_kgv = $_POST['high_power_kgv'];
        $high_power_mgv = $_POST['high_power_mgv'];
        $high_power_mma = $_POST['high_power_mma'];
        $locationname_material_seven = $_POST['locationname_material_seven'];
        $company_sale_seven = $_POST['company_sale_seven'];

        // step three
        // เจ้าหน้าที่ทางเทคนิค
        $safe_name = $_POST['safe_name'];
        $safe_idcard_seven = $_POST['safe_idcard_seven'];
        $safe_position_seven = $_POST['safe_position_seven'];
        $safe_age_seven = $_POST['safe_age_seven'];
        $safe_nationality_seven = $_POST['safe_nationality_seven'];
        $safe_phone_seven = $_POST['safe_phone_seven'];
        $safe_email_seven = $_POST['safe_email_seven'];
        $safe_address = $_POST['safe_address'];
        $safe_qualification_seven = $_POST['safe_qualification_seven'];
        $safe_number_seven = $_POST['safe_number_seven'];
        $safe_selected_seven = $_POST['safe_selected_seven'];

        // ผู้ปฏิบัติงานทางรังสี
        $make_name = $_POST['make_name'];
        $make_idcard_seven = $_POST['make_idcard_seven'];
        $make_position_seven = $_POST['make_position_seven'];
        $make_age_seven = $_POST['make_age_seven'];
        $make_nationality_seven = $_POST['make_nationality_seven'];
        $make_phone_seven = $_POST['make_phone_seven'];
        $make_email_seven = $_POST['make_email_seven'];
        $make_address = $_POST['make_address'];
        $make_qualification_seven = $_POST['make_qualification_seven'];
        $make_number_seven = $_POST['make_number_seven'];
        $make_selected_seven = $_POST['make_selected_seven'];

        // แพทย์ผู้รับผิดชอบ
        $doctor_name = $_POST['doctor_name'];
        $doctor_idcard_seven = $_POST['doctor_idcard_seven'];
        $doctor_position_seven = $_POST['doctor_position_seven'];
        $doctor_age_seven = $_POST['doctor_age_seven'];
        $doctor_nationality_seven = $_POST['doctor_nationality_seven'];
        $doctor_phone_seven = $_POST['doctor_phone_seven'];
        $doctor_email_seven = $_POST['doctor_email_seven'];
        $doctor_address = $_POST['doctor_address'];
        $doctor_hospital_name_seven = $_POST['doctor_hospital_name_seven'];
        $doctor_artlicense_seven = $_POST['doctor_artlicense_seven'];
        $doctor_date_start_seven = $_POST['doctor_date_start_seven'];
        $doctor_selected_seven = $_POST['doctor_selected_seven'];

        $company_id = $_SESSION["company_id"];
        $user_request = $_SESSION["user_id"];

        $check = array();
        mysqli_autocommit($conn, FALSE);

        $sql1 = "INSERT INTO license(license_id,license_type,license_number,place_id,sid,license_approve_person,license_status,start_date,expire_date,latest_inspect_date,next_inspect_date)
                VALUES(NULL,'ขออนุญาตฯ เครื่องกำเนิดรังสี','RE','$company_id','$user_request',NULL,'รอตรวจสอบคำขอ',NULL,NULL,NULL,NULL)";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }

        $license_id = mysqli_insert_id($conn);
        $sql = "INSERT INTO materiallocation(material_id,license_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material,fav_location)
                VALUES(NULL,'$license_id','$material_location','$location_materialseven_phone','$location_materialseven_email','$location_materialseven_benefit',NULL,NULL,NULL,'$selected_seven')";
        if(!mysqli_query($conn,$sql)){
            array_push($check,"error");
        }

        $sql2 = "INSERT INTO materialxray(material_id,license_id,no_reference,operation_type,manufacturer_material,material_number,number_xray,style_work,power_kgv,power_mgv,power_mma,locationname_material,company_sale)
                VALUES(NULL,'$license_id','$no_reference_seven','$operation_type_seven','$manufacturer_material_seven','$material_number_seven','$number_xray_seven','$work_style_seven','$high_power_kgv','$high_power_mgv','$high_power_mma','$locationname_material_seven','$company_sale_seven')";
        if(!mysqli_query($conn,$sql2)){
            array_push($check,"error");
        }

        $sql3 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','เจ้าหน้าที่ความปลอดภัยทางรังสี','$safe_name','$safe_idcard_seven','$safe_position_seven','$safe_age_seven','$safe_nationality_seven','$safe_phone_seven','$safe_email_seven','$safe_address','$safe_qualification_seven','$safe_number_seven',NULL,NULL,NULL,'$safe_selected_seven')";
        if(!mysqli_query($conn,$sql3)){
            array_push($check,"error");
        }

        $sql4 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','ผู้ปฏิบัติงานทางรังสี','$make_name','$make_idcard_seven','$make_position_seven','$make_age_seven','$make_nationality_seven','$make_phone_seven','$make_email_seven','$make_address','$make_qualification_seven','$make_number_seven',NULL,NULL,NULL,'$make_selected_seven')";
        if(!mysqli_query($conn,$sql4)){
            array_push($check,"error");
        }

        $sql5 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','แพทย์ผู้รับผิดชอบ','$doctor_name','$doctor_idcard_seven','$doctor_position_seven','$doctor_age_seven','$doctor_nationality_seven','$doctor_phone_seven','$doctor_email_seven','$doctor_address',NULL,NULL,'$doctor_hospital_name_seven','$doctor_artlicense_seven','$doctor_date_start_seven','$doctor_selected_seven')";
        if(!mysqli_query($conn,$sql5)){
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