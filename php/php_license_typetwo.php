<?php
    $response = array();

    if(isset($_POST['type_request']) && isset($_POST['location_address']) && isset($_POST['location_materialtwo_phone']) && isset($_POST['location_materialtwo_email']) && isset($_POST['location_materialtwo_benefit'])
    && isset($_POST['location_materialtwo_vehicle']) && isset($_POST['no_reference_two']) && isset($_POST['operation_type_two']) && isset($_POST['element_two']) && isset($_POST['product_model_two']) && isset($_POST['material_status_two']) && isset($_POST['manufacturer_material_two'])
    && isset($_POST['material_number_two']) && isset($_POST['weight_material_two']) && isset($_POST['unit_weight_two']) && isset($_POST['manufacturer_container_two']) && isset($_POST['material_number_container_two']) && isset($_POST['container_number_two'])
    && isset($_POST['weight_container_two']) && isset($_POST['unit_container_two']) && isset($_POST['locationname_material_two']) && isset($_POST['company_sale_two']) && isset($_POST['open_no_reference_two']) && isset($_POST['open_operation_type_two']) && isset($_POST['open_element_two'])
    && isset($_POST['open_product_model_two']) && isset($_POST['open_material_status_two']) && isset($_POST['open_manufacturer_material_two']) && isset($_POST['open_number_two']) && isset($_POST['open_unit_weight_two']) && isset($_POST['open_physical_properties_two'])
    && isset($_POST['open_locationname_material_two']) && isset($_POST['open_company_sale_two']) && isset($_POST['style_two']) && isset($_POST['styletype_two']) && isset($_POST['unnumber_two']) && isset($_POST['sale_name']) && isset($_POST['sale_idcard']) && isset($_POST['sale_age']) && isset($_POST['sale_position']) && isset($_POST['sale_nationality'])
    && isset($_POST['sale_email']) && isset($_POST['sale_phone']) && isset($_POST['sale_work_name']) && isset($_POST['sale_address']) && isset($_POST['handler_name']) && isset($_POST['handler_idcard']) && isset($_POST['handler_age']) && isset($_POST['handler_position']) && isset($_POST['handler_nationality']) && isset($_POST['handler_email']) && isset($_POST['handler_phone'])
    && isset($_POST['handler_work_name']) && isset($_POST['handler_address']) && isset($_POST['destination_work_name']) && isset($_POST['destination_address']) && isset($_POST['destination_work_phone']) && isset($_POST['destination_work_email']) && isset($_POST['import_address']) && isset($_POST['import_material_phone_two']) && isset($_POST['import_material_email_two'])
    && isset($_POST['export_address']) && isset($_POST['export_material_phone_two']) && isset($_POST['export_material_email_two'])){

        include('config/database.php');

        // step one
        $type_request = $_POST['type_request'];
        $location_address = $_POST['location_address'];
        $location_materialtwo_phone = $_POST['location_materialtwo_phone'];
        $location_materialtwo_email = $_POST['location_materialtwo_email'];
        $location_materialtwo_benefit = $_POST['location_materialtwo_benefit'];
        $location_materialtwo_vehicle = $_POST['location_materialtwo_vehicle'];

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
        $open_number_two = $_POST['open_number_two'];
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

        $handler_name = $_POST['handler_name'];
        $handler_idcard = $_POST['handler_idcard'];
        $handler_age = $_POST['handler_age'];
        $handler_position = $_POST['handler_position'];
        $handler_nationality = $_POST['handler_nationality'];
        $handler_email = $_POST['handler_email'];
        $handler_phone = $_POST['handler_phone'];
        $handler_work_name = $_POST['handler_work_name'];
        $handler_address = $_POST['handler_address'];

        $destination_work_name = $_POST['destination_work_name'];
        $destination_address = $_POST['destination_address'];
        $destination_work_phone = $_POST['destination_work_phone'];
        $destination_work_email = $_POST['destination_work_email'];

        // step four
        $import_address = $_POST['import_address'];
        $import_material_phone_two = $_POST['import_material_phone_two'];
        $import_material_email_two = $_POST['import_material_email_two'];

        $export_address = $_POST['export_address'];
        $export_material_phone_two = $_POST['export_material_phone_two'];
        $export_material_email_two = $_POST['export_material_email_two'];

        $sql = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$location_address','$location_materialtwo_phone','$location_materialtwo_email','$location_materialtwo_benefit','$type_request','$location_materialtwo_vehicle','NULL')";

        $query = mysqli_query($conn,$sql);
        if($query){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql2 = "INSERT INTO materialrequest(material_request_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                VALUES(NULL,'ปิดผนึก','$no_reference_two','$operation_type_two','$element_two','$product_model_two','$material_status_two','$manufacturer_material_two','$material_number_two','$weight_material_two','$unit_weight_two','$manufacturer_container_two','$material_number_container_two','$container_number_two','$weight_container_two','$unit_container_two','$locationname_material_two','$company_sale_two')";
        
        $query2 = mysqli_query($conn,$sql2);
        if($query2){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql3 = "INSERT INTO materialrequest(material_request_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                VALUES(NULL,'ไม่ปิดผนึก','$open_no_reference_two','$open_operation_type_two','$open_element_two','$open_product_model_two','$open_material_status_two','$open_manufacturer_material_two','$open_number_two','$open_unit_weight_two','$open_physical_properties_two','NULL','NULL','$open_locationname_material_two','$open_company_sale_two')";
        
        $query3 = mysqli_query($conn,$sql3);
        if($query3){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql4 = "INSERT INTO materialpack(material_id,pack_style,pack_type,un_number)
                VALUES(NULL,'$style_two','$styletype_two','$unnumber_two')";

        $query4 = mysqli_query($conn,$sql4);
        if($query4){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql5 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก','$sale_name','$sale_idcard','$sale_position','$sale_age','$sale_nationality','$sale_phone','$sale_email','$sale_address','NULL','NULL','$sale_work_name','NULL','NULL')";

        $query5 = mysqli_query($conn,$sql5);
        if($query5){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql6 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้ดำเนินการตามพิธีศุลกากร','$handler_name','$handler_idcard','$handler_position','$handler_age','$handler_nationality','$handler_phone','$handler_email','$handler_address','NULL','NULL','$handler_work_name','NULL','NULL')";

        $query6 = mysqli_query($conn,$sql6);
        if($query6){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }
        
        $sql7 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้รับปลายทางนำเข้าหรือส่งออก','NULL','NULL','NULL','NULL','NULL','$destination_work_phone','$destination_work_email','$destination_address','NULL','NULL','$destination_work_name','NULL','NULL')";

        $query7 = mysqli_query($conn,$sql7);
        if($query7){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql8 = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$import_address','$import_material_phone_two','$import_material_email_two','NULL','NULL','NULL','IMPORT MATERIAL')";

        $query8 = mysqli_query($conn,$sql8);
        if($query8){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql9 = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$export_address','$export_material_phone_two','$export_material_email_two','NULL','NULL','NULL','EXPORT MATERIAL')";

        $query9 = mysqli_query($conn,$sql9);
        if($query9){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        mysqli_close($conn);
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);
?>