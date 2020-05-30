<?php
    session_start();
    $response = array();
    if(!empty($_SESSION['permission'])){
        if($_SESSION["permission"][1] == 1){
            if(isset($_POST['id_license']) && isset($_POST['type_license'])){
                $response['success'] = true;
                include('config/database.php');
                $id_license = $_POST['id_license'];
                $type_license = $_POST['type_license'];

                $sql = "SELECT * FROM license l 
                        INNER JOIN company c ON l.sid = c.company_id WHERE l.license_id = $id_license";
                $data = mysqli_query($conn, $sql);
                unset($rows);
                while($row = mysqli_fetch_array($data)){
                    $rows[] = $row;
                }
                $response['data']['company'] = $rows[0];

                $sql = "SELECT * FROM materiallocation WHERE license_id = $id_license";
                $data = mysqli_query($conn, $sql);
                unset($rows);
                while($row = mysqli_fetch_array($data)){
                    $rows[] = $row;
                }
                $response['data']['location'] = $rows;
                    
                $sql = "SELECT * FROM companystaff WHERE license_id = $id_license";
                $data = mysqli_query($conn, $sql);
                unset($rows);
                $row = array();
                while($row = mysqli_fetch_array($data)){
                    $rows[] = $row;
                }
                if(isset($rows)){
                    if(count($rows) > 0){
                        $response['data']['staff']['data'] = $rows;
                        $response['data']['staff']['success'] = true;
                    }else{
                        $response['data']['staff']['success'] = false;
                    }
                }else{
                    $response['data']['staff']['success'] = false;
                }
                
                // type 1 //type 2
                if($type_license == "ขออนุญาตฯ วัสดุพลอยได้" || $type_license == "นำเข้า-ส่งออกวัสดุพลอยได้"){
                    $sql = "SELECT * FROM materialrequest WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    //https://www.php.net/manual/en/mysqli-result.fetch-array.php
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    $rows = $rows[0];
                    if(count($rows) > 0){
                        if($rows['material_type'] == "ปิดผนึก" ){
                            $response['data']['detail'] = array(
                                "line1" => $rows['element']." ".$rows['product_model']." ".$rows['material_status'],
                                "line2" => "ผู้ผลิตวัสดุกัมมันตรังสี : ".$rows['manufacturer_material']." ".$rows['material_number']." ".$rows['weight_material']." ".$rows['unit_weight'],
                                "line3" => "ผู้ผลิตภาชนะบรรจุ : ".$rows['manufacturer_container']." ".$rows['material_number_container']." ".$rows['container_number']." ".$rows['weight_container']." ".$rows['unit_container'],
                                "line4" => "สถานที่เก็บติดตั้งหรือใช้งาน : ".$rows['locationname_material']." ".$rows['company_sale']
                            ); 
                        }else{
                            $response['data']['detail'] = array(
                                "line1" => $rows['element']." ".$rows['product_model']." ".$rows['material_status'],
                                "line2" => "ผู้ผลิตวัสดุกัมมันตรังสี : ".$rows['manufacturer_material']." ".$rows['material_number']." ".$rows['weight_material']." ".$rows['unit_weight'],
                                "line4" => "สถานที่เก็บติดตั้งหรือใช้งาน : ".$rows['locationname_material']." ".$rows['company_sale']
                            ); 
                        }
                        $response['success'] = true;
                    }else{
                        $response['success'] = false;
                    }
                }else if($type_license == "ขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ"){//type 3
                    $sql = "SELECT * FROM materialnuclear WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    $rows = array();
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    if(count($rows) > 0){
                        $rows = $rows[0];
                        $response['data']['detail'] = array(
                            "line1" => $rows['type_special'],
                            "line2" => $rows['type_nuclear_special']." ".$rows['weight_material']." ".$rows['unit'],
                            "line3" => $rows['code_isotope']." ".$rows['weight_nuclear']
                        ); 
                        $response['success'] = true;
                    }else{
                        $sql = "SELECT * FROM materialchemical WHERE license_id = $id_license";
                        $data = mysqli_query($conn, $sql);
                        unset($rows);
                        while($row = mysqli_fetch_array($data)){
                            $rows[] = $row;
                        }
                        $rows = $rows[0];
                        if(count($rows) > 0){
                            $response['data']['detail'] = array(
                                "line1" => $rows['type_special'],
                                "line2" => "สถานที่ใช้งาน : ".$rows['work_address'],
                                "line3" => "ที่อยู่ผู้ผลิต : ".$rows['address_produce']." ที่อยู่ผู้แทนจำหน่าย : ".$rows['address_sale'],
                                "line4" => $rows['nuclear_special']." ".$rows['weight_kg']." กิโลกรัม "." อายุการใช้งาน : ".$rows['weight_kg']." ปี"
                            ); 
                            $response['success'] = true;
                        }else{
                            $response['success'] = false;
                        }  
                    }
                }else if($type_license == "นำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง"){//type 4
                    $sql = "SELECT * FROM materialpack WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    $rows = array();
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    if(count($rows) > 0){
                        $rows = $rows[0];
                        $response['data']['detail'] = array(
                            "line1" => $rows['pack_style'],
                            "line2" => "ชนิดหีบห่อ : ".$rows['pack_type'],
                            "line3" => "หมายเลขสหประชาชาติ : ".$rows['un_number']
                        ); 
                        $response['success'] = true;
                    }else{
                        $response['success'] = false; 
                    }
                }else if($type_license == "ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู"){//type 5
                    $sql = "SELECT * FROM materialspecial WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    $rows = array();
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    if(count($rows) > 0){
                        $rows = $rows[0];
                        $response['data']['detail'] = array(
                            "line1" => $rows['type_atomic'],
                            "line2" => "กำลังผลิตความร้อนสูงสุด : ".$rows['power_heat'],
                            "line3" => "ประเภทของเครื่องปฏิกรณ์ปรมาณู : ".$rows['type_atomic_reactor'],
                            "line3" => "ผู้ผลิต : ".$rows['producename_atomic']." ".$rows['country_produce_atomic']
                        ); 
                        $response['success'] = true;
                    }else{
                        $response['success'] = false; 
                    }
                }else if($type_license == "ทำให้วัสดุต้นกำลังพ้นสภาพฯ"){
                    $sql = "SELECT * FROM materialnatural WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    $rows = array();
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    if(count($rows) > 0){
                        $rows = $rows[0];
                        $response['data']['detail'] = array(
                            "line1" => $rows['type_benefit'],
                            "line2" => "ชนิด : ".$rows['material_special']." ".$rows['material_num']." ".$rows['unit'],
                            "line3" => "เปลี่ยนสภาพเป็น : ".$rows['changeto']." ".$rows['changeto_num']." ".$rows['unit_changeto']
                        ); 
                        $response['success'] = true;
                    }else{
                        $response['success'] = false; 
                    }
                }else if($type_license == "ขออนุญาตฯ เครื่องกำเนิดรังสี"){
                    $sql = "SELECT * FROM materialxray WHERE license_id = $id_license";
                    $data = mysqli_query($conn, $sql);
                    unset($rows);
                    $rows = array();
                    while($row = mysqli_fetch_array($data)){
                        $rows[] = $row;
                    }
                    if(count($rows) > 0){
                        $rows = $rows[0];
                        $response['data']['detail'] = array(
                            "line1" => "รหัสประเภทการใช้งาน : ".$rows['operation_type'],
                            "line2" => "ผู้ผลิต : ".$rows['manufacturer_material'],
                            "line3" => "กำลัง/พลังงานสูงสุด : ".$rows['power_kgv']."กิโลโวลต์ .",
                            "line4" => "กำลัง/พลังงานสูงสุด : ".$rows['power_mgv']." เมกกะอิเลคตรอนโวล์",
                            "line5" => "กำลัง/พลังงานสูงสุด : ".$rows['power_mma']." มิลลิแอมแปร์"
                        ); 
                        $response['success'] = true;
                    }else{
                        $response['success'] = false; 
                    }
                }else{
                    $response['success'] = false; 
                }
                mysqli_close($conn);
            }
        }else{
            $response['success'] = false;
        }
    }else{
        $response['success'] = false;
    }
    echo json_encode($response);

//     -- INNER JOIN materialnatural mn ON l.license_id = mn.license_id
// -- INNER JOIN materialpack mp ON l.license_id = mp.license_id
// -- INNER JOIN materialnuclear mnuc ON l.license_id = mnuc.license_id
// -- INNER JOIN materialchemical mc ON l.license_id = mc.license_id
// -- INNER JOIN materialspecial msp ON l.license_id = msp.license_id
// -- INNER JOIN materialxray x ON l.license_id = x.license_id
// -- INNER JOIN document_relate dr ON l.license_id = dr.license_id 
// materialpack
?>

