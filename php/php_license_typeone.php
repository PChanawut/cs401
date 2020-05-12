<?php
    $response = array();

    if(isset($_POST['material_location']) && isset($_POST['location_materialone_phone']) && isset($_POST['location_materialone_email']) && isset($_POST['location_materialone_benefit']) && isset($_POST['location_materialone_request']) && isset($_POST['no_reference']) && isset($_POST['operation_type']) && isset($_POST['element'])
    && isset($_POST['product_model']) && isset($_POST['material_status']) && isset($_POST['manufacturer_material']) && isset($_POST['material_number']) && isset($_POST['weight_material']) && isset($_POST['unit_weight']) && isset($_POST['manufacturer_container']) && isset($_POST['material_number_container']) && isset($_POST['container_number'])
    && isset($_POST['weight_container']) && isset($_POST['unit_container']) && isset($_POST['locationname_material']) && isset($_POST['company_sale']) && isset($_POST['open_no_reference']) && isset($_POST['open_operation_type']) && isset($_POST['open_element']) && isset($_POST['open_product_model']) && isset($_POST['open_material_status']) && isset($_POST['open_manufacturer_material'])
    && isset($_POST['open_weight_material']) && isset($_POST['open_unit_weight']) && isset($_POST['open_physical_properties']) && isset($_POST['open_locationname_material']) && isset($_POST['open_company_sale']) && isset($_POST['safe_name']) && isset($_POST['safe_idcard']) && isset($_POST['safe_position']) && isset($_POST['safe_age']) && isset($_POST['safe_nationality']) && isset($_POST['safe_phone']) && isset($_POST['safe_email'])
    && isset($_POST['safe_address']) && isset($_POST['safe_qualification']) && isset($_POST['safe_number']) && isset($_POST['make_name']) && isset($_POST['make_idcard']) && isset($_POST['make_position']) && isset($_POST['make_age']) && isset($_POST['make_nationality']) && isset($_POST['make_phone']) && isset($_POST['make_email']) && isset($_POST['make_address']) && isset($_POST['make_qualification']) && isset($_POST['make_number']) 
    && isset($_POST['doctor_name']) && isset($_POST['doctor_idcard']) && isset($_POST['doctor_position']) && isset($_POST['doctor_age']) && isset($_POST['doctor_nationality']) && isset($_POST['doctor_phone']) && isset($_POST['doctor_email']) && isset($_POST['doctor_address'])
    && isset($_POST['doctor_hospital_name']) && isset($_POST['doctor_artlicense']) && isset($_POST['doctor_date_start'])){

        include('config/database.php');

        $material_location = $_POST['material_location'];
        $location_materialone_phone = $_POST['location_materialone_phone'];
        $location_materialone_email = $_POST['location_materialone_email'];
        $location_materialone_benefit = $_POST['location_materialone_benefit'];
        $location_materialone_request = $_POST['location_materialone_request'];
        $no_reference = $_POST['no_reference'];
        $operation_type = $_POST['operation_type'];
        $element = $_POST['element'];
        $product_model = $_POST['product_model'];
        $material_status = $_POST['material_status'];
        $manufacturer_material = $_POST['manufacturer_material'];
        $material_number = $_POST['material_number'];
        $weight_material = $_POST['weight_material'];
        $unit_weight = $_POST['unit_weight'];
        $manufacturer_container = $_POST['manufacturer_container'];
        $material_number_container = $_POST['material_number_container'];
        $container_number = $_POST['container_number'];
        $weight_container = $_POST['weight_container'];
        $unit_container = $_POST['unit_container'];
        $locationname_material = $_POST['locationname_material'];
        $company_sale = $_POST['company_sale'];
        
        $open_no_reference = $_POST['open_no_reference'];
        $open_operation_type = $_POST['open_operation_type'];
        $open_element = $_POST['open_element'];
        $open_product_model = $_POST['open_product_model'];
        $open_material_status = $_POST['open_material_status'];
        $open_manufacturer_material = $_POST['open_manufacturer_material'];
        $open_weight_material = $_POST['open_weight_material'];
        $open_unit_weight = $_POST['open_unit_weight'];
        $open_physical_properties = $_POST['open_physical_properties'];
        $open_locationname_material = $_POST['open_locationname_material'];
        $open_company_sale = $_POST['open_company_sale'];

        $safe_name = $_POST['safe_name'];
        $safe_idcard = $_POST['safe_idcard'];
        $safe_position = $_POST['safe_position'];
        $safe_age = $_POST['safe_age'];
        $safe_nationality = $_POST['safe_nationality'];
        $safe_phone = $_POST['safe_phone'];
        $safe_email = $_POST['safe_email'];
        $safe_address = $_POST['safe_address'];
        $safe_qualification = $_POST['safe_qualification'];
        $safe_number = $_POST['safe_number'];

        $make_name = $_POST['make_name'];
        $make_idcard = $_POST['make_idcard'];
        $make_position = $_POST['make_position'];
        $make_age = $_POST['make_age'];
        $make_nationality = $_POST['make_nationality'];
        $make_phone = $_POST['make_phone'];
        $make_email = $_POST['make_email'];
        $make_address = $_POST['make_address'];
        $make_qualification = $_POST['make_qualification'];
        $make_number = $_POST['make_number'];

        $doctor_name = $_POST['doctor_name'];
        $doctor_idcard = $_POST['doctor_idcard'];
        $doctor_position = $_POST['doctor_position'];
        $doctor_age = $_POST['doctor_age'];
        $doctor_nationality = $_POST['doctor_nationality'];
        $doctor_phone = $_POST['doctor_phone'];
        $doctor_email = $_POST['doctor_email'];
        $doctor_address = $_POST['doctor_address'];
        $doctor_hospital_name = $_POST['doctor_hospital_name'];
        $doctor_artlicense = $_POST['doctor_artlicense'];
        $doctor_date_start = $_POST['doctor_date_start'];

        $sql =  "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$material_location','$location_materialone_phone','$location_materialone_email','$location_materialone_benefit','$location_materialone_request','NULL','NULL')";

        $query = mysqli_query($conn,$sql);
        if($query){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql2 = "INSERT INTO materialrequest(material_request_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                VALUES(NULL,'ปิดผนึก','$no_reference','$operation_type','$element','$product_model','$material_status','$manufacturer_material','$material_number','$weight_material','$unit_weight','$manufacturer_container','$material_number_container','$container_number','$weight_container','$unit_container','$locationname_material','$company_sale')";

        $query2 = mysqli_query($conn,$sql2);
        if($query2){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql3 = "INSERT INTO materialrequest(material_request_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                VALUES(NULL,'ไม่ปิดผนึก','$open_no_reference','$open_operation_type','$open_element','$open_product_model','$open_material_status','$open_manufacturer_material','NULL','$open_weight_material','$open_unit_weight','$open_physical_properties','NULL','NULL','$open_locationname_material','$open_company_sale')";

        $query3 = mysqli_query($conn,$sql3);
        if($query3){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql4 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'เจ้าหน้าที่ความปลอดภัยทางรังสี','$safe_name','$safe_idcard','$safe_position','$safe_age','$safe_nationality','$safe_phone','$safe_email','$safe_address','$safe_qualification','$safe_number','NULL','NULL','NULL')";

        $query4 = mysqli_query($conn,$sql4);
        if($query4){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql5 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'ผู้ปฏิบัติงานทางรังสี','$make_name','$make_idcard','$make_position','$make_age','$make_nationality','$make_phone','$make_email','$make_address','$make_qualification','$make_number','NULL','NULL','NULL')";

        $query5 = mysqli_query($conn,$sql5);
        if($query5){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql6 = "INSERT INTO companystaff(staff_id,type_authorities,staff_name,staff_idcard,staff_position,staff_age,staff_nationality,staff_phone,staff_email,staff_address,staff_qualification,staff_no_regis,staff_work_name,staff_art_license,staff_start_work)
                VALUES(NULL,'แพทย์ผู้รับผิดชอบ','$doctor_name','$doctor_idcard','$doctor_position','$doctor_age','$doctor_nationality','$doctor_phone','$doctor_email','$doctor_address','NULL','NULL','$doctor_hospital_name','$doctor_artlicense','$doctor_date_start')";

        $query6 = mysqli_query($conn,$sql6);
        if($query5){
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