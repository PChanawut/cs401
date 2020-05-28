<?php
    session_start();

    $response = array();

    if(isset($_POST['type_request']) && isset($_POST['location_address']) && isset($_POST['location_materialtwo_phone']) && isset($_POST['location_materialtwo_email']) && isset($_POST['location_materialtwo_benefit'])
    && isset($_POST['location_materialtwo_vehicle']) && isset($_POST['no_reference_two']) && isset($_POST['operation_type_two']) && isset($_POST['element_two']) && isset($_POST['product_model_two']) && isset($_POST['material_status_two']) && isset($_POST['manufacturer_material_two'])
    && isset($_POST['material_number_two']) && isset($_POST['weight_material_two']) && isset($_POST['unit_weight_two']) && isset($_POST['manufacturer_container_two']) && isset($_POST['material_number_container_two']) && isset($_POST['container_number_two'])
    && isset($_POST['weight_container_two']) && isset($_POST['unit_container_two']) && isset($_POST['locationname_material_two']) && isset($_POST['company_sale_two']) && isset($_POST['open_no_reference_two']) && isset($_POST['open_operation_type_two']) && isset($_POST['open_element_two'])
    && isset($_POST['open_product_model_two']) && isset($_POST['open_material_status_two']) && isset($_POST['open_manufacturer_material_two']) && isset($_POST['open_weight_material']) && isset($_POST['open_unit_weight_two']) && isset($_POST['open_physical_properties_two'])
    && isset($_POST['open_locationname_material_two']) && isset($_POST['open_company_sale_two']) && isset($_POST['style_two']) && isset($_POST['styletype_two']) && isset($_POST['unnumber_two']) && isset($_POST['sale_name']) && isset($_POST['sale_idcard']) && isset($_POST['sale_age']) && isset($_POST['sale_position']) && isset($_POST['sale_nationality'])
    && isset($_POST['sale_email']) && isset($_POST['sale_phone']) && isset($_POST['sale_work_name']) && isset($_POST['sale_address']) && isset($_POST['handler_name']) && isset($_POST['handler_idcard']) && isset($_POST['handler_age']) && isset($_POST['handler_position']) && isset($_POST['handler_nationality']) && isset($_POST['handler_email']) && isset($_POST['handler_phone'])
    && isset($_POST['handler_work_name']) && isset($_POST['handler_address']) && isset($_POST['destination_work_name']) && isset($_POST['destination_address']) && isset($_POST['destination_work_phone']) && isset($_POST['destination_work_email']) && isset($_POST['import_address']) && isset($_POST['import_material_phone_two']) && isset($_POST['import_material_email_two'])
    && isset($_POST['export_address']) && isset($_POST['export_material_phone_two']) && isset($_POST['export_material_email_two']) && isset($_POST['location_materialtwo_licenseno']) && isset($_POST['location_materialtwo_licensedate']) && isset($_POST['location_materialtwo_startlicense']) && isset($_POST['selected']) && isset($_POST['selected_two'])
    && isset($_POST['sale_location_salework_two']) && isset($_POST['handler_location_handlerwork_two']) && isset($_POST['destination_location_destinationwork_two']) && isset($_POST['import_location_two']) && isset($_POST['export_location_two'])){

        include('config/database.php');

        // step one
        $type_request = $_POST['type_request'];
        $location_address = $_POST['location_address'];
        $location_materialtwo_phone = $_POST['location_materialtwo_phone'];
        $location_materialtwo_email = $_POST['location_materialtwo_email'];
        $location_materialtwo_benefit = $_POST['location_materialtwo_benefit'];
        $location_materialtwo_vehicle = $_POST['location_materialtwo_vehicle'];

        $location_materialtwo_licenseno = $_POST['location_materialtwo_licenseno'];
        $location_materialtwo_licensedate = $_POST['location_materialtwo_licensedate'];
        $location_materialtwo_startlicense = $_POST['location_materialtwo_startlicense'];
        $selected_two = $_POST['selected_two'];

        $selected = $_POST['selected'];

        // step two
        $no_reference_two = $_POST['no_reference_two'];
        $operation_type_two = $_POST['operation_type_two'];
        $element_two = $_POST['element_two'];
        $product_model_two = $_POST['product_model_two'];
        $material_status_two = $_POST['material_status_two'];
        $manufacturer_material_two = $_POST['manufacturer_material_two'];
        $material_number_two = $_POST['material_number_two'];
        $weight_material_two = $_POST['weight_material_two'];
        $unit_weight_two = $_POST['unit_weight_two'];
        $manufacturer_container_two = $_POST['manufacturer_container_two'];
        $material_number_container_two = $_POST['material_number_container_two'];
        $container_number_two = $_POST['container_number_two'];
        $weight_container_two = $_POST['weight_container_two'];
        $unit_container_two = $_POST['unit_container_two'];
        $locationname_material_two = $_POST['locationname_material_two'];
        $company_sale_two = $_POST['company_sale_two'];

        $open_no_reference_two = $_POST['open_no_reference_two'];
        $open_operation_type_two = $_POST['open_operation_type_two'];
        $open_element_two = $_POST['open_element_two'];
        $open_product_model_two = $_POST['open_product_model_two'];
        $open_material_status_two = $_POST['open_material_status_two'];
        $open_manufacturer_material_two = $_POST['open_manufacturer_material_two'];
        $open_weight_material = $_POST['open_weight_material'];
        $open_unit_weight_two = $_POST['open_unit_weight_two'];
        $open_physical_properties_two = $_POST['open_physical_properties_two'];
        $open_locationname_material_two = $_POST['open_locationname_material_two'];
        $open_company_sale_two = $_POST['open_company_sale_two'];

        // การบรรจุหีบห่อ
        $style_two = $_POST['style_two'];
        $styletype_two = $_POST['styletype_two'];
        $unnumber_two = $_POST['unnumber_two'];

        // step three
        $sale_name = $_POST['sale_name'];
        $sale_idcard = $_POST['sale_idcard'];
        $sale_age = $_POST['sale_age'];
        $sale_position = $_POST['sale_position'];
        $sale_nationality = $_POST['sale_nationality'];
        $sale_email = $_POST['sale_email'];
        $sale_phone = $_POST['sale_phone'];
        $sale_work_name = $_POST['sale_work_name'];
        $sale_address = $_POST['sale_address'];
        $sale_location_salework_two = $_POST['sale_location_salework_two'];

        $handler_name = $_POST['handler_name'];
        $handler_idcard = $_POST['handler_idcard'];
        $handler_age = $_POST['handler_age'];
        $handler_position = $_POST['handler_position'];
        $handler_nationality = $_POST['handler_nationality'];
        $handler_email = $_POST['handler_email'];
        $handler_phone = $_POST['handler_phone'];
        $handler_work_name = $_POST['handler_work_name'];
        $handler_address = $_POST['handler_address'];
        $handler_location_handlerwork_two = $_POST['handler_location_handlerwork_two'];

        $destination_work_name = $_POST['destination_work_name'];
        $destination_address = $_POST['destination_address'];
        $destination_work_phone = $_POST['destination_work_phone'];
        $destination_work_email = $_POST['destination_work_email'];
        $destination_location_destinationwork_two = $_POST['destination_location_destinationwork_two'];

        // step four
        $import_address = $_POST['import_address'];
        $import_material_phone_two = $_POST['import_material_phone_two'];
        $import_material_email_two = $_POST['import_material_email_two'];
        $import_location_two = $_POST['import_location_two'];

        $export_address = $_POST['export_address'];
        $export_material_phone_two = $_POST['export_material_phone_two'];
        $export_material_email_two = $_POST['export_material_email_two'];
        $export_location_two = $_POST['export_location_two'];

        $company_id = $_SESSION["company_id"];
        $user_request = $_SESSION["user_id"];
        $company_name = $_SESSION["name"];

        $check = array();
        mysqli_autocommit($conn, FALSE);

        $sql12 = "INSERT INTO place(place_id,department_name,department_id,address,tel,fax,email,place_type,department_type,zone,risk_group)
                VALUES(NULL,'$company_name','$company_id','$location_address','$location_materialtwo_phone','NULL','$location_materialtwo_email','01','NULL','NULL','NULL')";
        if(!mysqli_query($conn,$sql12)){
            array_push($check,"error");
        }

        $place_id = mysqli_insert_id($conn);
        $sql1 = "INSERT INTO license(license_id,license_type,license_number,place_id,sid,license_approve_person,license_status,start_date,expire_date,latest_inspect_date,next_inspect_date)
                VALUES(NULL,'นำเข้า-ส่งออกวัสดุพลอยได้','RE','$place_id','$company_id',NULL,'รอตรวจสอบคำขอ',CURRENT_TIMESTAMP,NULL,NULL,NULL)";
        if(!mysqli_query($conn,$sql1)){
            array_push($check,"error");
        }

        $license_id = mysqli_insert_id($conn);
        $sql = "INSERT INTO materiallocation(material_id,license_id,company_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material,fav_location)
                VALUES(NULL,'$license_id','$company_id','$location_address','$location_materialtwo_phone','$location_materialtwo_email','$location_materialtwo_benefit','$type_request','$location_materialtwo_vehicle',NULL,'$selected_two')";
        if(!mysqli_query($conn,$sql)){
            array_push($check,"error");
        }

        if($selected == "ปิดผนึก"){
            $sql2 = "INSERT INTO materialrequest(material_request_id,license_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                    VALUES(NULL,'$license_id','ปิดผนึก','$no_reference_two','$operation_type_two','$element_two','$product_model_two','$material_status_two','$manufacturer_material_two','$material_number_two','$weight_material_two','$unit_weight_two','$manufacturer_container_two','$material_number_container_two','$container_number_two','$weight_container_two','$unit_container_two','$locationname_material_two','$company_sale_two')";
            if(!mysqli_query($conn,$sql2)){
                array_push($check,"error");
            }
        }

        if($selected == "ไม่ปิดผนึก"){
            $sql3 = "INSERT INTO materialrequest(material_request_id,license_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                    VALUES(NULL,'$license_id','ไม่ปิดผนึก','$open_no_reference_two','$open_operation_type_two','$open_element_two','$open_product_model_two','$open_material_status_two','$open_manufacturer_material_two',NULL,'$open_weight_material','$open_unit_weight_two','$open_physical_properties_two',NULL,NULL,NULL,NULL,'$open_locationname_material_two','$open_company_sale_two')";
            if(!mysqli_query($conn,$sql3)){
                array_push($check,"error");
            }
        }

        $sql4 = "INSERT INTO materialpack(material_id,license_id,pack_style,pack_type,un_number)
                VALUES(NULL,'$license_id','$style_two','$styletype_two','$unnumber_two')";
        if(!mysqli_query($conn,$sql4)){
            array_push($check,"error");
        }

        $sql5 = "INSERT INTO companystaff(staff_id,license_id,company_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','$company_id','ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก','$sale_name','$sale_idcard','$sale_position','$sale_age','$sale_nationality','$sale_phone','$sale_email','$sale_address',NULL,NULL,'$sale_work_name',NULL,NULL,'$sale_location_salework_two')";
        if(!mysqli_query($conn,$sql5)){
            array_push($check,"error");
        }

        $sql6 = "INSERT INTO companystaff(staff_id,license_id,company_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','$company_id','ผู้ดำเนินการตามพิธีศุลกากร','$handler_name','$handler_idcard','$handler_position','$handler_age','$handler_nationality','$handler_phone','$handler_email','$handler_address',NULL,NULL,'$handler_work_name',NULL,NULL,'$handler_location_handlerwork_two')";
        if(!mysqli_query($conn,$sql6)){
            array_push($check,"error");
        }
        
        $sql7 = "INSERT INTO companystaff(staff_id,license_id,company_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work,fav_staff)
                VALUES(NULL,'$license_id','$company_id','ผู้รับปลายทางนำเข้าหรือส่งออก',NULL,NULL,NULL,NULL,NULL,'$destination_work_phone','$destination_work_email','$destination_address',NULL,NULL,'$destination_work_name',NULL,NULL,'$destination_location_destinationwork_two')";
        if(!mysqli_query($conn,$sql7)){
            array_push($check,"error");
        }

        $sql8 = "INSERT INTO materiallocation(material_id,license_id,company_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material,fav_location)
                VALUES(NULL,'$license_id','$company_id','$import_address','$import_material_phone_two','$import_material_email_two',NULL,NULL,NULL,'IMPORT MATERIAL','$import_location_two')";
        if(!mysqli_query($conn,$sql8)){
            array_push($check,"error");
        }

        $sql9 = "INSERT INTO materiallocation(material_id,license_id,company_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material,fav_location)
                VALUES(NULL,'$license_id','$company_id','$export_address','$export_material_phone_two','$export_material_email_two',NULL,NULL,NULL,'EXPORT MATERIAL','$export_location_two')";
        if(!mysqli_query($conn,$sql9)){
            array_push($check,"error");
        }

        $sql10 = "INSERT INTO document_relate(document_id,license_id,type_document,no_license,end_license,start_request)
                VALUES(NULL,'$license_id','HAVE','$location_materialtwo_licenseno','$location_materialtwo_licensedate',NULL)";
        if(!mysqli_query($conn,$sql10)){
            array_push($check,"error");
        }

        $sql11 = "INSERT INTO document_relate(document_id,license_id,type_document,no_license,end_license,start_request)
                VALUES(NULL,'$license_id','NOT HAVE',NULL,NULL,'$location_materialtwo_startlicense')";
        if(!mysqli_query($conn,$sql11)){
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