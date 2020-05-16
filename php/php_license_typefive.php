<?php
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

        $sql = "INSERT INTO materiallocation(material_id,material_address,material_phone,material_email,type_benefit,type_request,type_vehicle,type_location_material)
                VALUES(NULL,'$material_location','$location_materialfive_phone','$location_materialfive_email','NULL','$location_materialfive_request','NULL','NULL')";
        
        $query = mysqli_query($conn,$sql);
        if($query){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        $sql2 = "INSERT INTO materialspecial(material_id,type_atomic,power_heat,type_atomic_reactor,producename_atomic,country_produce_atomic)
                VALUES(NULL,'$type_equipment_five','$make_heat_five','$type_five','$name_produce_equipment_five','$country_produce_equipment_five')";
        
        $query2 = mysqli_query($conn,$sql2);
        if($query2){
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }

        mysqli_close($conn);
    }else{
        $response['not if 555555'] = false;
    }
    echo json_encode($response);
?>