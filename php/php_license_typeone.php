<?php
    // session_start();
    
    $response = array();

    // Table address Material
    if(isset($_POST['material_location']) && isset($_POST['location_materialone_phone']) && isset($_POST['location_materialone_email'])
    && isset($_POST['location_materialone_benefit']) && isset($_POST['location_materialone_request']) && isset($_POST['material_close'])
    && isset($_POST['no_reference']) && isset($_POST['operation_type']) && isset($_POST['element']) && isset($_POST['product_model'])
    && isset($_POST['material_status']) && isset($_POST['manufacturer_material']) && isset($_POST['material_number']) && isset($_POST['weight_material'])
    && isset($_POST['unit_weight']) && isset($_POST['manufacturer_container']) && isset($_POST['material_number_container']) && isset($_POST['container_number'])
    && isset($_POST['weight_container']) && isset($_POST['unit_container']) && isset($_POST['locationname_material']) && isset($_POST['company_sale'])){
        
        include('config/database.php');
        
        // material location table
        $material_location = $_POST['material_location'];
        $location_materialone_phone = $_POST['location_materialone_phone'];
        $location_materialone_email = $_POST['location_materialone_email'];
        $location_materialone_benefit = $_POST['location_materialone_benefit'];
        $location_materialone_request = $_POST['location_materialone_request'];

        // material request table
        $material_close = $_POST['material_close'];
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

        $sql2 = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request)
                VALUES(NULL,'$material_location','$location_materialone_phone','$location_materialone_email','$location_materialone_benefit','$location_materialone_request')";

        $query2 = mysqli_query($conn,$sql2);
        if($query2){
            $response['success2'] = true;
        }else{
            $response['success2..'] = false;
        }

        $sql3 = "INSERT INTO materialrequest(material_request_id,material_type,no_reference,operation_type,element,product_model,material_status,manufacturer_material,material_number,weight_material,unit_weight,manufacturer_container,material_number_container,container_number,weight_container,unit_container,locationname_material,company_sale)
                VALUES(NULL,'$material_close','$no_reference','$operation_type','$element','$product_model','$material_status','$manufacturer_material','$material_number','$weight_material','$unit_weight','$manufacturer_container','$material_number_container','$container_number','$weight_container','$unit_container','$locationname_material','$company_sale')";
        $query3 = mysqli_query($conn,$sql3);
        if($query3){
            $response['success3'] = true;
        }else{ 
            $response['success3..'] = false;
        }

        mysqli_close($conn);
    }else{
        $response['not if'] = false;
    }
    echo json_encode($response);
    // echo($_POST['material_location']);
?>