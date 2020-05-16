<?php
    $response = array();

    if(isset($_POST['material_location']) && isset($_POST['location_material_phone_three']) && isset($_POST['location_material_email_three'])
    && isset($_POST['location_material_benefit_three']) && isset($_POST['location_material_request_three']) && isset($_POST['material_area_three']) && isset($_POST['material_workname_three'])
    && isset($_POST['material_specialtype_three']) && isset($_POST['material_nolocation_three']) && isset($_POST['material_nobatch_three']) && isset($_POST['material_number_three']) && isset($_POST['material_detail_three'])
    && isset($_POST['material_type_three']) && isset($_POST['material_weight_three']) && isset($_POST['material_unit_three']) && isset($_POST['material_special_weight_three']) && isset($_POST['material_code_ozotope_three'])
    && isset($_POST['material_code_work_three']) && isset($_POST['material_workaddress_three']) && isset($_POST['material_benefit_three']) && isset($_POST['material_special_type_three']) && isset($_POST['weight_kg_three'])
    && isset($_POST['nomaterial_three']) && isset($_POST['workage_three']) && isset($_POST['addressname_produce_three']) && isset($_POST['addressname_sale_three']) && isset($_POST['safe_name']) && isset($_POST['safe_idcard_three']) && isset($_POST['safe_position_three'])
    && isset($_POST['safe_age_three']) && isset($_POST['safe_nationality_three']) && isset($_POST['safe_phone_three']) && isset($_POST['safe_email_three']) && isset($_POST['safe_address']) && isset($_POST['safe_qualification_three'])
    && isset($_POST['safe_number_three']) && isset($_POST['make_name']) && isset($_POST['make_idcard_three']) && isset($_POST['make_position_three']) && isset($_POST['make_age_three']) && isset($_POST['make_nationality_three']) && isset($_POST['make_phone_three'])
    && isset($_POST['make_email_three']) && isset($_POST['make_address']) && isset($_POST['make_qualification_three']) && isset($_POST['make_number_three']) && isset($_POST['doctor_name']) && isset($_POST['doctor_idcard_three']) && isset($_POST['doctor_position_three'])
    && isset($_POST['doctor_age_three']) && isset($_POST['doctor_nationality_three']) && isset($_POST['doctor_phone_three']) && isset($_POST['doctor_email_three']) && isset($_POST['doctor_address']) && isset($_POST['doctor_hospital_name_three']) && isset($_POST['doctor_artlicense_three']) && isset($_POST['doctor_date_start_three']) && isset($_POST['selected'])){

        include('config/database.php');

        // step one
        $material_location = $_POST['material_location'];
        $location_material_phone_three = $_POST['location_material_phone_three'];
        $location_material_email_three = $_POST['location_material_email_three'];
        $location_material_benefit_three = $_POST['location_material_benefit_three'];
        $location_material_request_three = $_POST['location_material_request_three'];

        $selected = $_POST['selected'];

        // step two -- first
        $material_area_three = $_POST['material_area_three'];
        $material_workname_three = $_POST['material_workname_three'];
        $material_specialtype_three = $_POST['material_specialtype_three'];
        $material_nolocation_three = $_POST['material_nolocation_three'];
        $material_nobatch_three = $_POST['material_nobatch_three'];
        $material_number_three = $_POST['material_number_three'];
        $material_detail_three = $_POST['material_detail_three'];
        $material_type_three = $_POST['material_type_three'];
        $material_weight_three = $_POST['material_weight_three'];
        $material_unit_three = $_POST['material_unit_three'];
        $material_special_weight_three = $_POST['material_special_weight_three'];
        $material_code_ozotope_three = $_POST['material_code_ozotope_three'];

        // step two -- second
        $material_code_work_three = $_POST['material_code_work_three'];
        $material_workaddress_three = $_POST['material_workaddress_three'];
        $material_benefit_three = $_POST['material_benefit_three'];
        $material_special_type_three = $_POST['material_special_type_three'];
        $weight_kg_three = $_POST['weight_kg_three'];
        $nomaterial_three = $_POST['nomaterial_three'];
        $workage_three = $_POST['workage_three'];
        $addressname_produce_three = $_POST['addressname_produce_three'];
        $addressname_sale_three = $_POST['addressname_sale_three'];

        // step three
        // เจ้าหน้าที่ความปลอดภัยทางรังสี
        $safe_name = $_POST['safe_name'];
        $safe_idcard_three = $_POST['safe_idcard_three'];
        $safe_position_three = $_POST['safe_position_three'];
        $safe_age_three = $_POST['safe_age_three'];
        $safe_nationality_three = $_POST['safe_nationality_three'];
        $safe_phone_three = $_POST['safe_phone_three'];
        $safe_email_three = $_POST['safe_email_three'];
        $safe_address = $_POST['safe_address'];
        $safe_qualification_three = $_POST['safe_qualification_three'];
        $safe_number_three = $_POST['safe_number_three'];

        // ผู้ปฏิบัติงานทางรังสี
        $make_name = $_POST['make_name'];
        $make_idcard_three = $_POST['make_idcard_three'];
        $make_position_three = $_POST['make_position_three'];
        $make_age_three = $_POST['make_age_three'];
        $make_nationality_three = $_POST['make_nationality_three'];
        $make_phone_three = $_POST['make_phone_three'];
        $make_email_three =$_POST['make_email_three'];
        $make_address = $_POST['make_address'];
        $make_qualification_three = $_POST['make_qualification_three'];
        $make_number_three = $_POST['make_number_three'];

        // แพทย์ผู้รับผิดชอบ
        $doctor_name = $_POST['doctor_name'];
        $doctor_idcard_three = $_POST['doctor_idcard_three'];
        $doctor_position_three = $_POST['doctor_position_three'];
        $doctor_age_three = $_POST['doctor_age_three'];
        $doctor_nationality_three = $_POST['doctor_nationality_three'];
        $doctor_phone_three = $_POST['doctor_phone_three'];
        $doctor_email_three = $_POST['doctor_email_three'];
        $doctor_address = $_POST['doctor_address'];
        $doctor_hospital_name_three = $_POST['doctor_hospital_name_three'];
        $doctor_artlicense_three = $_POST['doctor_artlicense_three'];
        $doctor_date_start_three = $_POST['doctor_date_start_three'];

        $sql = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$material_location','$location_material_phone_three','$location_material_email_three','$location_material_benefit_three','$location_material_request_three','NULL','NULL')";
        
        $query = mysqli_query($conn,$sql);
        if($query){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        if($selected == "วัสดุนิวเคลียร์พิเศษ"){
            $sql2 = "INSERT INTO materialnuclear(material_id,type_special,nuclear_purpose,no_check,name_work,type_nuclear_special,nuclear_vehicle,no_location,number_batch,model_number,detail_material,type_material,weight_material,unit,weight_nuclear,code_isotope)
                    VALUES(NULL,'วัสดุนิวเคลียร์พิเศษ','NULL','$material_area_three','$material_workname_three','$material_specialtype_three','NULL','$material_nolocation_three','$material_nobatch_three','$material_number_three','$material_detail_three','$material_type_three','$material_weight_three','$material_unit_three','$material_special_weight_three','$material_code_ozotope_three')";
    
            $query2 = mysqli_query($conn,$sql2);
            if($query2){
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }

        if($selected == "วัสดุต้นกำลังซึ่งพ้นสภาพที่เป็นตามธรรมชาติในทางเคมี"){
            $sql3 = "INSERT INTO materialchemical(material_id,type_special,code_work,work_address,nuclear_benefit,nuclear_special,weight_kg,no_material,work_age,address_produce,address_sale)
                    VALUES(NULL,'วัสดุต้นกำลังซึ่งพ้นสภาพ','$material_code_work_three','$material_workaddress_three','$material_benefit_three','$material_special_type_three','$weight_kg_three','$nomaterial_three','$workage_three','$addressname_produce_three','$addressname_sale_three')";
    
            $query3 = mysqli_query($conn,$sql3);
            if($query3){
                $response['success'] = true;
            }else{
                $response['success'] = false;
            }
        }

        $sql4 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'เจ้าหน้าที่ความปลอดภัยทางรังสี','$safe_name','$safe_idcard_three','$safe_position_three','$safe_age_three','$safe_nationality_three','$safe_phone_three','$safe_email_three','$safe_address','$safe_qualification_three','$safe_number_three','NULL','NULL','NULL')";

        $query4 = mysqli_query($conn,$sql4);
        if($query4){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql5 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้ปฏิบัติงานทางรังสี','$make_name','$make_idcard_three','$make_position_three','$make_age_three','$make_nationality_three','$make_phone_three','$make_email_three','$make_address','$make_qualification_three','$make_number_three','NULL','NULL','NULL')";

        $query5 = mysqli_query($conn,$sql5);
        if($query5){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql6 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'แพทย์ผู้รับผิดชอบ','$doctor_name','$doctor_idcard_three','$doctor_position_three','$doctor_age_three','$doctor_nationality_three','$doctor_phone_three','$doctor_email_three','$doctor_address','NULL','NULL','$doctor_hospital_name_three','$doctor_artlicense_three','$doctor_date_start_three')";
        
        $query6 = mysqli_query($conn,$sql6);
        if($query6){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        mysqli_close($conn);
    }else{
        $response['not if'] = false;
    }
    echo json_encode($response);
?>