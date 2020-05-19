<?php
    session_start();

    $response = array();

    if(isset($_POST['material_objective_four']) && isset($_POST['materialtype_allow_four']) && isset($_POST['type_transport_four']) && isset($_POST['material_area_four']) && isset($_POST['material_workname_four'])
    && isset($_POST['material_nolocation_four']) && isset($_POST['material_nobatch_four']) && isset($_POST['material_number_four']) && isset($_POST['material_detail_four']) && isset($_POST['material_type_four']) && isset($_POST['material_weight_four'])
    && isset($_POST['material_unit_four']) && isset($_POST['material_special_weight_four']) && isset($_POST['material_code_ozotope_four']) && isset($_POST['material_code_work_four']) && isset($_POST['material_workaddress_four']) && isset($_POST['material_benefit_four'])
    && isset($_POST['material_special_type_four']) && isset($_POST['weight_kg_four']) && isset($_POST['nomaterial_four']) && isset($_POST['workage_four']) && isset($_POST['addressname_produce_four']) && isset($_POST['addressname_sale_four']) && isset($_POST['sale_name'])
    && isset($_POST['sale_idcard_four']) && isset($_POST['sale_age_four']) && isset($_POST['sale_position_four']) && isset($_POST['sale_nationality_four']) && isset($_POST['sale_email_four']) && isset($_POST['sale_phone_four']) && isset($_POST['sale_work_name_four']) && isset($_POST['sale_address'])
    && isset($_POST['handler_name']) && isset($_POST['handler_idcard_four']) && isset($_POST['handler_age_four']) && isset($_POST['handler_position_four']) && isset($_POST['handler_nationality_four']) && isset($_POST['handler_email_four']) && isset($_POST['handler_phone_four'])
    && isset($_POST['handler_work_name_four']) && isset($_POST['handler_address']) && isset($_POST['destination_work_name_four']) && isset($_POST['destination_address']) && isset($_POST['destination_work_phone_four']) && isset($_POST['destination_work_email_four'])
    && isset($_POST['style_four']) && isset($_POST['styletype_four']) && isset($_POST['unnumber_four']) && isset($_POST['import_address']) && isset($_POST['import_material_phone_four']) && isset($_POST['import_material_email_four']) && isset($_POST['export_address'])
    && isset($_POST['export_material_phone_four']) && isset($_POST['export_material_email_four']) && isset($_POST['location_material_licenseno_four']) && isset($_POST['location_material_licensedate_four']) && isset($_POST['location_material_startlicense_four'])){

        include('config/database.php');

        // step one
        $material_objective_four = $_POST['material_objective_four'];
        $materialtype_allow_four = $_POST['materialtype_allow_four'];
        $type_transport_four = $_POST['type_transport_four'];
        $material_area_four = $_POST['material_area_four'];
        $material_workname_four = $_POST['material_workname_four'];
        $material_nolocation_four = $_POST['material_nolocation_four'];
        $material_nobatch_four = $_POST['material_nobatch_four'];
        $material_number_four = $_POST['material_number_four'];
        $material_detail_four = $_POST['material_detail_four'];
        $material_type_four = $_POST['material_type_four'];
        $material_weight_four = $_POST['material_weight_four'];
        $material_unit_four = $_POST['material_unit_four'];
        $material_special_weight_four = $_POST['material_special_weight_four'];
        $material_code_ozotope_four = $_POST['material_code_ozotope_four'];
        $material_code_work_four = $_POST['material_code_work_four'];
        $material_workaddress_four = $_POST['material_workaddress_four'];
        $material_benefit_four = $_POST['material_benefit_four'];
        $material_special_type_four = $_POST['material_special_type_four'];
        $weight_kg_four = $_POST['weight_kg_four'];
        $nomaterial_four = $_POST['nomaterial_four'];
        $workage_four = $_POST['workage_four'];
        $addressname_produce_four = $_POST['addressname_produce_four'];
        $addressname_sale_four = $_POST['addressname_sale_four'];

        $location_material_licenseno_four = $_POST['location_material_licenseno_four'];
        $location_material_licensedate_four = $_POST['location_material_licensedate_four'];
        $location_material_startlicense_four = $_POST['location_material_startlicense_four'];

        // step two
        $sale_name = $_POST['sale_name'];
        $sale_idcard_four = $_POST['sale_idcard_four'];
        $sale_age_four = $_POST['sale_age_four'];
        $sale_position_four = $_POST['sale_position_four'];
        $sale_nationality_four = $_POST['sale_nationality_four'];
        $sale_email_four = $_POST['sale_email_four'];
        $sale_phone_four = $_POST['sale_phone_four'];
        $sale_work_name_four = $_POST['sale_work_name_four'];
        $sale_address = $_POST['sale_address'];

        $handler_name = $_POST['handler_name'];
        $handler_idcard_four = $_POST['handler_idcard_four'];
        $handler_age_four = $_POST['handler_age_four'];
        $handler_position_four = $_POST['handler_position_four'];
        $handler_nationality_four = $_POST['handler_nationality_four'];
        $handler_email_four = $_POST['handler_email_four'];
        $handler_phone_four = $_POST['handler_phone_four'];
        $handler_work_name_four = $_POST['handler_work_name_four'];
        $handler_address = $_POST['handler_address'];

        $destination_work_name_four = $_POST['destination_work_name_four'];
        $destination_address = $_POST['destination_address'];
        $destination_work_phone_four = $_POST['destination_work_phone_four'];
        $destination_work_email_four = $_POST['destination_work_email_four'];

        // การบรรจุหีบห่อ
        $style_four = $_POST['style_four'];
        $styletype_four = $_POST['styletype_four'];
        $unnumber_four = $_POST['unnumber_four'];

        // สถานที่เก็บรักษานำเข้า
        $import_address = $_POST['import_address'];
        $import_material_phone_four = $_POST['import_material_phone_four'];
        $import_material_email_four = $_POST['import_material_email_four'];

        // สถานที่เก็บรักษาส่งออก
        $export_address = $_POST['export_address'];
        $export_material_phone_four = $_POST['export_material_phone_four'];
        $export_material_email_four = $_POST['export_material_email_four'];

        $company_id = $_SESSION["company_id"];
        $user_request = $_SESSION["user_id"];

        $check = array();
        mysqli_autocommit($conn, FALSE);

        $sql1 = "INSERT INTO license(license_id,type_license,request_number,license_number,company_id,license_applicant,license_approve_person,license_status,start_license,end_license)
                VALUES(NULL,'4','RE','NULL','$company_id','$user_request','NULL','NULL','NULL','NULL')";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }

        $license_id = mysqli_insert_id($conn);
        $sql = "INSERT INTO materialnuclear(material_id,license_id,type_special,nuclear_purpose,no_check,name_work,type_nuclear_special,nuclear_vehicle,no_location,number_batch,model_number,detail_material,type_material,weight_material,unit,weight_nuclear,code_isotope)
                VALUES(NULL,'$license_id','นำหรือสั่งเข้ามาในราชอาณาจักร','$material_objective_four','$material_area_four','$material_workname_four','$materialtype_allow_four','$type_transport_four','$material_nolocation_four','$material_nobatch_four','$material_number_four','$material_detail_four','$material_type_four','$material_weight_four','$material_unit_four','$material_special_weight_four','$material_code_ozotope_four')";
        if(!mysqli_query($conn,$sql)){
            array_push($check,"error");
        }

        $sql2 ="INSERT INTO materialchemical(material_id,license_id,type_special,code_work,work_address,nuclear_benefit,nuclear_special,weight_kg,no_material,work_age,address_produce,address_sale)
                VALUES(NULL,'$license_id','นำหรือส่งออกนอกราชอาณาจักร','$material_code_work_four','$material_workaddress_four','$material_benefit_four','$material_special_type_four','$weight_kg_four','$nomaterial_four','$workage_four','$addressname_produce_four','$addressname_sale_four')";
        if(!mysqli_query($conn,$sql2)){
            array_push($check,"error");
        }

        $sql3 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'$license_id','ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก','$sale_name','$sale_idcard_four','$sale_position_four','$sale_age_four','$sale_nationality_four','$sale_phone_four','$sale_email_four','$sale_address','NULL','NULL','$sale_work_name_four','NULL','NULL')";
        if(!mysqli_query($conn,$sql3)){
            array_push($check,"error");
        }

        $sql4 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'$license_id','ผู้ดำเนินการตามพิธีศุลกากร','$handler_name','$handler_idcard_four','$handler_position_four','$handler_age_four','$handler_nationality_four','$handler_phone_four','$handler_email_four','$handler_address','NULL','NULL','$handler_work_name_four','NULL','NULL')";
        if(!mysqli_query($conn,$sql4)){
            array_push($check,"error");
        }

        $sql5 = "INSERT INTO companystaff(staff_id,license_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'$license_id','ผู้รับปลายทางนำเข้าหรือส่งออก','NULL','NULL','NULL','NULL','NULL','$destination_work_phone_four','$destination_work_email_four','$destination_address','NULL','NULL','$destination_work_name_four','NULL','NULL')";
        if(!mysqli_query($conn,$sql5)){
            array_push($check,"error");
        }

        $sql6 = "INSERT INTO materialpack(material_id,license_id,pack_style,pack_type,un_number)
                VALUES(NULL,'$license_id','$style_four','$styletype_four','$unnumber_four')";
        if(!mysqli_query($conn,$sql6)){
            array_push($check,"error");
        }

        $sql7 = "INSERT INTO materiallocation(material_id,license_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$license_id','$import_address','$import_material_phone_four','$import_material_email_four','NULL','NULL','NULL','IMPORT MATERIAL')";
        if(!mysqli_query($conn,$sql7)){
            array_push($check,"error");
        }

        $sql8 = "INSERT INTO materiallocation(material_id,license_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$license_id','$export_address','$export_material_phone_four','$export_material_email_four','NULL','NULL','NULL','EXPORT MATERIAL')";
        if(!mysqli_query($conn,$sql8)){
            array_push($check,"error");
        }

        $sql9 = "INSERT INTO document_relate(document_id,license_id,type_document,no_license,end_license,start_request)
                VALUES(NULL,'$license_id','HAVE','$location_material_licenseno_four','$location_material_licensedate_four','NULL')";
        if(!mysqli_query($conn,$sql9)){
            array_push($check,"error");
        }

        $sql10 = "INSERT INTO document_relate(document_id,license_id,type_document,no_license,end_license,start_request)
                VALUES(NULL,'$license_id','NOT HAVE','NULL','NULL','$location_material_startlicense_four')";
        if(!mysqli_query($conn,$sql10)){
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