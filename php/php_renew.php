<?php
    session_start();

    $response = array();

    if(!empty($_SESSION["company_id"])){
        include('config/database.php');

        $license_id = $_POST['license_id'];

        $sql = "SELECT * FROM license WHERE license_id = ".$license_id."";
        $result = mysqli_query($conn,$sql);
        // echo $sql;

        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            if($row['license_id'] = $license_id){
                if($row['license_type'] == 'ขออนุญาตฯ วัสดุพลอยได้'){
                    $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);
                    
                    $sql2 = "SELECT * FROM materialrequest WHERE license_id = ".$license_id."";
                    $result2 = mysqli_query($conn,$sql2);
                
                    $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี'";
                    $result3 = mysqli_query($conn,$sql3);
                
                    $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี'";
                    $result4 = mysqli_query($conn,$sql4);
                
                    $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'แพทย์ผู้รับผิดชอบ'";
                    $result5 = mysqli_query($conn,$sql5);

                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'ขออนุญาตฯ วัสดุพลอยได้'){
                        $response['type'] = 1;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;

                    // materiallocation table
                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['material_address'] = $row1['material_address'];
                        $response['material_phone'] = $row1['material_phone'];
                        $response['material_email'] = $row1['material_email'];
                        $response['type_benefit'] = $row1['type_benefit'];
                        $response['type_request'] = $row1['type_request'];
                        $response['type_vehicle'] = $row1['type_vehicle'];
                        $response['type_location_material'] = $row1['type_location_material'];
                        $response['success'] = true;
                    }

                    // materialrequest table
                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['material_type'] = $row2['material_type'];
                        $response['no_reference'] = $row2['no_reference'];
                        $response['operation_type'] = $row2['operation_type'];
                        $response['element'] = $row2['element'];
                        $response['product_model'] = $row2['product_model'];
                        $response['material_status'] = $row2['material_status'];
                        $response['manufacturer_material'] = $row2['manufacturer_material'];
                        $response['material_number'] = $row2['material_number'];
                        $response['weight_material'] = $row2['weight_material'];
                        $response['unit_weight'] = $row2['unit_weight'];
                        $response['manufacturer_container'] = $row2['manufacturer_container'];
                        $response['material_number_container'] = $row2['material_number_container'];
                        $response['container_number'] = $row2['container_number'];
                        $response['weight_container'] = $row2['weight_container'];
                        $response['unit_container'] = $row2['unit_container'];
                        $response['locationname_material'] = $row2['locationname_material'];
                        $response['company_sale'] = $row2['company_sale'];
                        $response['success'] = true;
                    }
                    
                    // companystaff
                    // เจ้าหน้าที่ความปลอดภัยทางรังสี
                    $row3 = mysqli_fetch_array($result3);
                    if($row3['license_id'] = $license_id){
                        $response['safe_authorities'] = $row3['type_authorities'];
                        $response['safe_name'] = $row3['staff_name'];
                        $response['safe_idcard'] = $row3['staff_idcard'];
                        $response['safe_position'] = $row3['staff_position'];
                        $response['safe_age'] = $row3['staff_age'];
                        $response['safe_nationality'] = $row3['staff_nationality'];
                        $response['safe_phone'] = $row3['staff_phone'];
                        $response['safe_email'] = $row3['staff_email'];
                        $response['safe_address'] = $row3['staff_address'];
                        $response['safe_qualification'] = $row3['staff_qualification'];
                        $response['safe_no_regis'] = $row3['staff_no_regis'];
                        $response['success'] = true;
                    }
                    
                    // ผู้ปฏิบัติงานทางรังสี
                    $row4 = mysqli_fetch_array($result4);
                    if($row4['license_id'] = $license_id){
                        $response['make_authorities'] = $row4['type_authorities'];
                        $response['make_name'] = $row4['staff_name'];
                        $response['make_idcard'] = $row4['staff_idcard'];
                        $response['make_position'] = $row4['staff_position'];
                        $response['make_age'] = $row4['staff_age'];
                        $response['make_nationality'] = $row4['staff_nationality'];
                        $response['make_phone'] = $row4['staff_phone'];
                        $response['make_email'] = $row4['staff_email'];
                        $response['make_address'] = $row4['staff_address'];
                        $response['make_qualification'] = $row4['staff_qualification'];
                        $response['make_no_regis'] = $row4['staff_no_regis'];
                        $response['success'] = true;
                    }
                    
                    // แพทย์ผู้รับผิดชอบ
                    $row5 = mysqli_fetch_array($result5);
                    if($row5['license_id'] = $license_id){
                        $response['doctor_authorities'] = $row5['type_authorities'];
                        $response['doctor_name'] = $row5['staff_name'];
                        $response['doctor_idcard'] = $row5['staff_idcard'];
                        $response['doctor_position'] = $row5['staff_position'];
                        $response['doctor_age'] = $row5['staff_age'];
                        $response['doctor_nationality'] = $row5['staff_nationality'];
                        $response['doctor_phone'] = $row5['staff_phone'];
                        $response['doctor_email'] = $row5['staff_email'];
                        $response['doctor_address'] = $row5['staff_address'];
                        $response['doctor_work_name'] = $row5['staff_work_name'];
                        $response['doctor_art_license'] = $row5['staff_art_license'];
                        $response['doctor_start_work'] = $row5['staff_start_work'];
                        $response['success'] = true;
                    }
                }else if($row['license_type'] == 'นำเข้า-ส่งออกวัสดุพลอยได้'){
                    $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);

                    $sql2 = "SELECT * FROM materialrequest WHERE license_id = ".$license_id."";
                    $result2 = mysqli_query($conn,$sql2);

                    $sql6 = "SELECT * FROM materialpack WHERE license_id = ".$license_id."";
                    $result6 = mysqli_query($conn,$sql6);

                    $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก'";
                    $result3 = mysqli_query($conn,$sql3);
                
                    $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ดำเนินการตามพิธีศุลกากร'";
                    $result4 = mysqli_query($conn,$sql4);
                
                    $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้รับปลายทางนำเข้าหรือส่งออก'";
                    $result5 = mysqli_query($conn,$sql5);

                    $sql7 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'IMPORT MATERIAL'";
                    $result7 = mysqli_query($conn,$sql7);

                    $sql8 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'EXPORT MATERIAL'";
                    $result8 = mysqli_query($conn,$sql8);

                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'นำเข้า-ส่งออกวัสดุพลอยได้'){
                        $response['type'] = 2;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;

                    // materiallocation table
                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['material_address'] = $row1['material_address'];
                        $response['material_phone'] = $row1['material_phone'];
                        $response['material_email'] = $row1['material_email'];
                        $response['type_benefit'] = $row1['type_benefit'];
                        $response['type_request'] = $row1['type_request'];
                        $response['type_vehicle'] = $row1['type_vehicle'];
                        $response['type_location_material'] = $row1['type_location_material'];
                        $response['success'] = true;
                    }

                    // materialrequest table
                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['material_type'] = $row2['material_type'];
                        $response['no_reference'] = $row2['no_reference'];
                        $response['operation_type'] = $row2['operation_type'];
                        $response['element'] = $row2['element'];
                        $response['product_model'] = $row2['product_model'];
                        $response['material_status'] = $row2['material_status'];
                        $response['manufacturer_material'] = $row2['manufacturer_material'];
                        $response['material_number'] = $row2['material_number'];
                        $response['weight_material'] = $row2['weight_material'];
                        $response['unit_weight'] = $row2['unit_weight'];
                        $response['manufacturer_container'] = $row2['manufacturer_container'];
                        $response['material_number_container'] = $row2['material_number_container'];
                        $response['container_number'] = $row2['container_number'];
                        $response['weight_container'] = $row2['weight_container'];
                        $response['unit_container'] = $row2['unit_container'];
                        $response['locationname_material'] = $row2['locationname_material'];
                        $response['company_sale'] = $row2['company_sale'];
                        $response['success'] = true;
                    }

                    // companystaff
                    // ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก
                    $row3 = mysqli_fetch_array($result3);
                    if($row3['license_id'] = $license_id){
                        $response['sale_authorities'] = $row3['type_authorities'];
                        $response['sale_name'] = $row3['staff_name'];
                        $response['sale_idcard'] = $row3['staff_idcard'];
                        $response['sale_position'] = $row3['staff_position'];
                        $response['sale_age'] = $row3['staff_age'];
                        $response['sale_nationality'] = $row3['staff_nationality'];
                        $response['sale_phone'] = $row3['staff_phone'];
                        $response['sale_email'] = $row3['staff_email'];
                        $response['sale_address'] = $row3['staff_address'];
                        $response['sale_work_name'] = $row3['staff_work_name'];
                        $response['success'] = true;
                    }
                    
                    // ผู้ดำเนินการตามพิธีศุลกากร
                    $row4 = mysqli_fetch_array($result4);
                    if($row4['license_id'] = $license_id){
                        $response['handler_authorities'] = $row4['type_authorities'];
                        $response['handler_name'] = $row4['staff_name'];
                        $response['handler_idcard'] = $row4['staff_idcard'];
                        $response['handler_position'] = $row4['staff_position'];
                        $response['handler_age'] = $row4['staff_age'];
                        $response['handler_nationality'] = $row4['staff_nationality'];
                        $response['handler_phone'] = $row4['staff_phone'];
                        $response['handler_email'] = $row4['staff_email'];
                        $response['handler_address'] = $row4['staff_address'];
                        $response['handler_work_name'] = $row4['staff_work_name'];
                        $response['success'] = true;
                    }
                    
                    // ผู้รับปลายทางนำเข้าหรือส่งออก
                    $row5 = mysqli_fetch_array($result5);
                    if($row5['license_id'] = $license_id){
                        $response['destination_authorities'] = $row5['type_authorities'];
                        $response['destination_phone'] = $row5['staff_phone'];
                        $response['destination_email'] = $row5['staff_email'];
                        $response['destination_address'] = $row5['staff_address'];
                        $response['destination_work_name'] = $row5['staff_work_name'];
                        $response['success'] = true;
                    }

                    // materialpack table
                    $row6 = mysqli_fetch_array($result6);
                    if($row6['license_id'] = $license_id){
                        $response['pack_style'] = $row6['pack_style'];
                        $response['pack_type'] = $row6['pack_type'];
                        $response['un_number'] = $row6['un_number'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT import material
                    $row7 = mysqli_fetch_array($result7);
                    if($row7['license_id'] = $license_id){
                        $response['material_address'] = $row7['material_address'];
                        $response['material_phone'] = $row7['material_phone'];
                        $response['material_email'] = $row7['material_email'];
                        $response['type_benefit'] = $row7['type_benefit'];
                        $response['type_request'] = $row7['type_request'];
                        $response['type_vehicle'] = $row7['type_vehicle'];
                        $response['type_location_material'] = $row7['type_location_material'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT export material
                    $row8 = mysqli_fetch_array($result8);
                    if($row8['license_id'] = $license_id){
                        $response['material_address'] = $row8['material_address'];
                        $response['material_phone'] = $row8['material_phone'];
                        $response['material_email'] = $row8['material_email'];
                        $response['type_benefit'] = $row8['type_benefit'];
                        $response['type_request'] = $row8['type_request'];
                        $response['type_vehicle'] = $row8['type_vehicle'];
                        $response['type_location_material'] = $row8['type_location_material'];
                        $response['success'] = true;
                    }
                }else if($row['license_type'] == 'ขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ'){
                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'ขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ'){
                        $response['type'] = 3;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;
                    
                    $sql_nuclear = "SELECT * FROM materialnuclear WHERE license_id = ".$license_id."";
                    $result_nuclear = mysqli_query($conn,$sql_nuclear);

                    $sql_chemical = "SELECT * FROM materialchemical WHERE license_id = ".$license_id."";
                    $result_chemical = mysqli_query($conn,$sql_chemical);

                    $row_nuclear = mysqli_fetch_array($result_nuclear);
                    $row_chemical = mysqli_fetch_array($result_chemical);
                    if($row_nuclear['type_special'] == 'วัสดุนิวเคลียร์พิเศษ'){
                        $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                        $result1 = mysqli_query($conn,$sql1);

                        $sql2 = "SELECT * FROM materialnuclear WHERE license_id = ".$license_id."";
                        $result2 = mysqli_query($conn,$sql2);
    
                        $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี'";
                        $result3 = mysqli_query($conn,$sql3);
                    
                        $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี'";
                        $result4 = mysqli_query($conn,$sql4);
                    
                        $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'แพทย์ผู้รับผิดชอบ'";
                        $result5 = mysqli_query($conn,$sql5);
    
                        // materiallocation table
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['license_id'] = $license_id){
                            $response['material_address'] = $row1['material_address'];
                            $response['material_phone'] = $row1['material_phone'];
                            $response['material_email'] = $row1['material_email'];
                            $response['type_benefit'] = $row1['type_benefit'];
                            $response['type_request'] = $row1['type_request'];
                            $response['type_vehicle'] = $row1['type_vehicle'];
                            $response['type_location_material'] = $row1['type_location_material'];
                            $response['success'] = true;
                        }
    
                        // materialnuclear table
                        $row2 = mysqli_fetch_array($result2);
                        if($row2['license_id'] = $license_id){
                            $response['material_type_special'] = $row2['type_special'];
                            $response['nuclear_purpose'] = $row2['nuclear_purpose'];
                            $response['no_check'] = $row2['no_check'];
                            $response['name_work'] = $row2['name_work'];
                            $response['type_nuclear_special'] = $row2['type_nuclear_special'];
                            $response['nuclear_vehicle'] = $row2['nuclear_vehicle'];
                            $response['no_location'] = $row2['no_location'];
                            $response['number_batch'] = $row2['number_batch'];
                            $response['model_number'] = $row2['model_number'];
                            $response['detail_material'] = $row2['detail_material'];
                            $response['type_material'] = $row2['type_material'];
                            $response['weight_material'] = $row2['weight_material'];
                            $response['unit'] = $row2['unit'];
                            $response['weight_nuclear'] = $row2['weight_nuclear'];
                            $response['code_isotope'] = $row2['code_isotope'];
                        }
    
                        // companystaff
                        // เจ้าหน้าที่ความปลอดภัยทางรังสี
                        $row3 = mysqli_fetch_array($result3);
                        if($row3['license_id'] = $license_id){
                            $response['safe_authorities'] = $row3['type_authorities'];
                            $response['safe_name'] = $row3['staff_name'];
                            $response['safe_idcard'] = $row3['staff_idcard'];
                            $response['safe_position'] = $row3['staff_position'];
                            $response['safe_age'] = $row3['staff_age'];
                            $response['safe_nationality'] = $row3['staff_nationality'];
                            $response['safe_phone'] = $row3['staff_phone'];
                            $response['safe_email'] = $row3['staff_email'];
                            $response['safe_address'] = $row3['staff_address'];
                            $response['safe_qualification'] = $row3['staff_qualification'];
                            $response['safe_no_regis'] = $row3['staff_no_regis'];
                            $response['success'] = true;
                        }
                        
                        // ผู้ปฏิบัติงานทางรังสี
                        $row4 = mysqli_fetch_array($result4);
                        if($row4['license_id'] = $license_id){
                            $response['make_authorities'] = $row4['type_authorities'];
                            $response['make_name'] = $row4['staff_name'];
                            $response['make_idcard'] = $row4['staff_idcard'];
                            $response['make_position'] = $row4['staff_position'];
                            $response['make_age'] = $row4['staff_age'];
                            $response['make_nationality'] = $row4['staff_nationality'];
                            $response['make_phone'] = $row4['staff_phone'];
                            $response['make_email'] = $row4['staff_email'];
                            $response['make_address'] = $row4['staff_address'];
                            $response['make_qualification'] = $row4['staff_qualification'];
                            $response['make_no_regis'] = $row4['staff_no_regis'];
                            $response['success'] = true;
                        }
                        
                        // แพทย์ผู้รับผิดชอบ
                        $row5 = mysqli_fetch_array($result5);
                        if($row5['license_id'] = $license_id){
                            $response['doctor_authorities'] = $row5['type_authorities'];
                            $response['doctor_name'] = $row5['staff_name'];
                            $response['doctor_idcard'] = $row5['staff_idcard'];
                            $response['doctor_position'] = $row5['staff_position'];
                            $response['doctor_age'] = $row5['staff_age'];
                            $response['doctor_nationality'] = $row5['staff_nationality'];
                            $response['doctor_phone'] = $row5['staff_phone'];
                            $response['doctor_email'] = $row5['staff_email'];
                            $response['doctor_address'] = $row5['staff_address'];
                            $response['doctor_work_name'] = $row5['staff_work_name'];
                            $response['doctor_art_license'] = $row5['staff_art_license'];
                            $response['doctor_start_work'] = $row5['staff_start_work'];
                            $response['success'] = true;
                        }
                    }else if($row_chemical['type_special'] == 'วัสดุต้นกำลังซึ่งพ้นสภาพ'){
                        $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                        $result1 = mysqli_query($conn,$sql1);

                        $sql2 = "SELECT * FROM materialchemical WHERE license_id = ".$license_id."";
                        $result2 = mysqli_query($conn,$sql2);
    
                        $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี'";
                        $result3 = mysqli_query($conn,$sql3);
                    
                        $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี'";
                        $result4 = mysqli_query($conn,$sql4);
                    
                        $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'แพทย์ผู้รับผิดชอบ'";
                        $result5 = mysqli_query($conn,$sql5);
    
                        // materiallocation table
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['license_id'] = $license_id){
                            $response['material_address'] = $row1['material_address'];
                            $response['material_phone'] = $row1['material_phone'];
                            $response['material_email'] = $row1['material_email'];
                            $response['type_benefit'] = $row1['type_benefit'];
                            $response['type_request'] = $row1['type_request'];
                            $response['type_vehicle'] = $row1['type_vehicle'];
                            $response['type_location_material'] = $row1['type_location_material'];
                            $response['success'] = true;
                        }
    
                        // materialchemical table
                        $row2 = mysqli_fetch_array($result2);
                        if($row2['license_id'] = $license_id){
                            $response['type_special'] = $row2['type_special'];
                            $response['code_work'] = $row2['code_work'];
                            $response['work_address'] = $row2['work_address'];
                            $response['nuclear_benefit'] = $row2['nuclear_benefit'];
                            $response['nuclear_special'] = $row2['nuclear_special'];
                            $response['weight_kg'] = $row2['weight_kg'];
                            $response['no_material'] = $row2['no_material'];
                            $response['work_age'] = $row2['work_age'];
                            $response['address_produce'] = $row2['address_produce'];
                            $response['address_sale'] = $row2['address_sale'];
                            $response['success'] = true;
                        }
    
                        // companystaff
                        // เจ้าหน้าที่ความปลอดภัยทางรังสี
                        $row3 = mysqli_fetch_array($result3);
                        if($row3['license_id'] = $license_id){
                            $response['safe_authorities'] = $row3['type_authorities'];
                            $response['safe_name'] = $row3['staff_name'];
                            $response['safe_idcard'] = $row3['staff_idcard'];
                            $response['safe_position'] = $row3['staff_position'];
                            $response['safe_age'] = $row3['staff_age'];
                            $response['safe_nationality'] = $row3['staff_nationality'];
                            $response['safe_phone'] = $row3['staff_phone'];
                            $response['safe_email'] = $row3['staff_email'];
                            $response['safe_address'] = $row3['staff_address'];
                            $response['safe_qualification'] = $row3['staff_qualification'];
                            $response['safe_no_regis'] = $row3['staff_no_regis'];
                            $response['success'] = true;
                        }
                        
                        // ผู้ปฏิบัติงานทางรังสี
                        $row4 = mysqli_fetch_array($result4);
                        if($row4['license_id'] = $license_id){
                            $response['make_authorities'] = $row4['type_authorities'];
                            $response['make_name'] = $row4['staff_name'];
                            $response['make_idcard'] = $row4['staff_idcard'];
                            $response['make_position'] = $row4['staff_position'];
                            $response['make_age'] = $row4['staff_age'];
                            $response['make_nationality'] = $row4['staff_nationality'];
                            $response['make_phone'] = $row4['staff_phone'];
                            $response['make_email'] = $row4['staff_email'];
                            $response['make_address'] = $row4['staff_address'];
                            $response['make_qualification'] = $row4['staff_qualification'];
                            $response['make_no_regis'] = $row4['staff_no_regis'];
                            $response['success'] = true;
                        }
                        
                        // แพทย์ผู้รับผิดชอบ
                        $row5 = mysqli_fetch_array($result5);
                        if($row5['license_id'] = $license_id){
                            $response['doctor_authorities'] = $row5['type_authorities'];
                            $response['doctor_name'] = $row5['staff_name'];
                            $response['doctor_idcard'] = $row5['staff_idcard'];
                            $response['doctor_position'] = $row5['staff_position'];
                            $response['doctor_age'] = $row5['staff_age'];
                            $response['doctor_nationality'] = $row5['staff_nationality'];
                            $response['doctor_phone'] = $row5['staff_phone'];
                            $response['doctor_email'] = $row5['staff_email'];
                            $response['doctor_address'] = $row5['staff_address'];
                            $response['doctor_work_name'] = $row5['staff_work_name'];
                            $response['doctor_art_license'] = $row5['staff_art_license'];
                            $response['doctor_start_work'] = $row5['staff_start_work'];
                            $response['success'] = true;
                        }
                    }
                }else if($row['license_type'] == 'นำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง'){
                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'นำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง'){
                        $response['type'] = 4;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;

                    $sql1 = "SELECT * FROM materialnuclear WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);

                    $sql2 = "SELECT * FROM materialchemical WHERE license_id = ".$license_id."";
                    $result2 = mysqli_query($conn,$sql2);

                    $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก'";
                    $result3 = mysqli_query($conn,$sql3);
                
                    $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ดำเนินการตามพิธีศุลกากร'";
                    $result4 = mysqli_query($conn,$sql4);
                
                    $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้รับปลายทางนำเข้าหรือส่งออก'";
                    $result5 = mysqli_query($conn,$sql5);

                    $sql6 = "SELECT * FROM materialpack WHERE license_id = ".$license_id."";
                    $result6 = mysqli_query($conn,$sql6);

                    $sql7 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'IMPORT MATERIAL'";
                    $result7 = mysqli_query($conn,$sql7);

                    $sql8 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'EXPORT MATERIAL'";
                    $result8 = mysqli_query($conn,$sql8);

                    // materialnuclear table
                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['material_type_special'] = $row1['type_special'];
                        $response['nuclear_purpose'] = $row1['nuclear_purpose'];
                        $response['no_check'] = $row1['no_check'];
                        $response['name_work'] = $row1['name_work'];
                        $response['type_nuclear_special'] = $row1['type_nuclear_special'];
                        $response['nuclear_vehicle'] = $row1['nuclear_vehicle'];
                        $response['no_location'] = $row1['no_location'];
                        $response['number_batch'] = $row1['number_batch'];
                        $response['model_number'] = $row1['model_number'];
                        $response['detail_material'] = $row1['detail_material'];
                        $response['type_material'] = $row1['type_material'];
                        $response['weight_material'] = $row1['weight_material'];
                        $response['unit'] = $row1['unit'];
                        $response['weight_nuclear'] = $row1['weight_nuclear'];
                        $response['code_isotope'] = $row1['code_isotope'];
                    }

                    // materialchemical table
                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['type_special'] = $row2['type_special'];
                        $response['code_work'] = $row2['code_work'];
                        $response['work_address'] = $row2['work_address'];
                        $response['nuclear_benefit'] = $row2['nuclear_benefit'];
                        $response['nuclear_special'] = $row2['nuclear_special'];
                        $response['weight_kg'] = $row2['weight_kg'];
                        $response['no_material'] = $row2['no_material'];
                        $response['work_age'] = $row2['work_age'];
                        $response['address_produce'] = $row2['address_produce'];
                        $response['address_sale'] = $row2['address_sale'];
                        $response['success'] = true;
                    }

                    // companystaff
                    // ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก
                    $row3 = mysqli_fetch_array($result3);
                    if($row3['license_id'] = $license_id){
                        $response['sale_authorities'] = $row3['type_authorities'];
                        $response['sale_name'] = $row3['staff_name'];
                        $response['sale_idcard'] = $row3['staff_idcard'];
                        $response['sale_position'] = $row3['staff_position'];
                        $response['sale_age'] = $row3['staff_age'];
                        $response['sale_nationality'] = $row3['staff_nationality'];
                        $response['sale_phone'] = $row3['staff_phone'];
                        $response['sale_email'] = $row3['staff_email'];
                        $response['sale_address'] = $row3['staff_address'];
                        $response['sale_work_name'] = $row3['staff_work_name'];
                        $response['success'] = true;
                    }
                    
                    // ผู้ดำเนินการตามพิธีศุลกากร
                    $row4 = mysqli_fetch_array($result4);
                    if($row4['license_id'] = $license_id){
                        $response['handler_authorities'] = $row4['type_authorities'];
                        $response['handler_name'] = $row4['staff_name'];
                        $response['handler_idcard'] = $row4['staff_idcard'];
                        $response['handler_position'] = $row4['staff_position'];
                        $response['handler_age'] = $row4['staff_age'];
                        $response['handler_nationality'] = $row4['staff_nationality'];
                        $response['handler_phone'] = $row4['staff_phone'];
                        $response['handler_email'] = $row4['staff_email'];
                        $response['handler_address'] = $row4['staff_address'];
                        $response['handler_work_name'] = $row4['staff_work_name'];
                        $response['success'] = true;
                    }
                    
                    // ผู้รับปลายทางนำเข้าหรือส่งออก
                    $row5 = mysqli_fetch_array($result5);
                    if($row5['license_id'] = $license_id){
                        $response['destination_authorities'] = $row5['type_authorities'];
                        $response['destination_phone'] = $row5['staff_phone'];
                        $response['destination_email'] = $row5['staff_email'];
                        $response['destination_address'] = $row5['staff_address'];
                        $response['destination_work_name'] = $row5['staff_work_name'];
                        $response['success'] = true;
                    }

                    // materialpack table
                    $row6 = mysqli_fetch_array($result6);
                    if($row6['license_id'] = $license_id){
                        $response['pack_style'] = $row6['pack_style'];
                        $response['pack_type'] = $row6['pack_type'];
                        $response['un_number'] = $row6['un_number'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT import material
                    $row7 = mysqli_fetch_array($result7);
                    if($row7['license_id'] = $license_id){
                        $response['import_material_address'] = $row7['material_address'];
                        $response['import_material_phone'] = $row7['material_phone'];
                        $response['import_material_email'] = $row7['material_email'];
                        $response['import_type_benefit'] = $row7['type_benefit'];
                        $response['import_type_request'] = $row7['type_request'];
                        $response['import_type_vehicle'] = $row7['type_vehicle'];
                        $response['import_type_location_material'] = $row7['type_location_material'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT export material
                    $row8 = mysqli_fetch_array($result8);
                    if($row8['license_id'] = $license_id){
                        $response['material_address'] = $row8['material_address'];
                        $response['material_phone'] = $row8['material_phone'];
                        $response['material_email'] = $row8['material_email'];
                        $response['type_benefit'] = $row8['type_benefit'];
                        $response['type_request'] = $row8['type_request'];
                        $response['type_vehicle'] = $row8['type_vehicle'];
                        $response['type_location_material'] = $row8['type_location_material'];
                        $response['success'] = true;
                    }
                }else if($row['license_type'] == 'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู'){
                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู'){
                        $response['type'] = 5;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;
                    
                    $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);

                    $sql2 = "SELECT * FROM materialspecial WHERE license_id = ".$license_id."";
                    $result2 = mysqli_query($conn,$sql2);

                    // materiallocation table
                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['material_address'] = $row1['material_address'];
                        $response['material_phone'] = $row1['material_phone'];
                        $response['material_email'] = $row1['material_email'];
                        $response['type_benefit'] = $row1['type_benefit'];
                        $response['type_request'] = $row1['type_request'];
                        $response['type_vehicle'] = $row1['type_vehicle'];
                        $response['type_location_material'] = $row1['type_location_material'];
                        $response['success'] = true;
                    }

                    // materialspecial table
                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['type_atomic'] = $row2['type_atomic'];
                        $response['power_heat'] = $row2['power_heat'];
                        $response['type_atomic_reactor'] = $row2['type_atomic_reactor'];
                        $response['producename_atomic'] = $row2['producename_atomic'];
                        $response['country_produce_atomic'] = $row2['country_produce_atomic'];
                        $response['success'] = true;
                    }
                }else if($row['license_type'] == 'ทำให้วัสดุต้นกำลังพ้นสภาพฯ'){
                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'ทำให้วัสดุต้นกำลังพ้นสภาพฯ'){
                        $response['type'] = 6;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;

                    $sql1 = "SELECT * FROM materialnatural WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);

                    $sql2 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'CHEMICAL'";
                    $result2 = mysqli_query($conn,$sql2);

                    $sql3 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id." AND type_location_material = 'NOT CHEMICAL'";
                    $result3 = mysqli_query($conn,$sql3);

                    $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี'";
                    $result4 = mysqli_query($conn,$sql4);
                
                    $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี'";
                    $result5 = mysqli_query($conn,$sql5);

                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['type_benefit'] = $row1['type_benefit'];
                        $response['material_special'] = $row1['material_special'];
                        $response['material_num'] = $row1['material_num'];
                        $response['unit'] = $row1['unit'];
                        $response['changeto'] = $row1['changeto'];
                        $response['changeto_num'] = $row1['changeto_num'];
                        $response['unit_changeto'] = $row1['unit_changeto'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT CHEMICAL
                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['chemical_material_address'] = $row2['material_address'];
                        $response['chemical_material_phone'] = $row2['material_phone'];
                        $response['chemical_material_email'] = $row2['material_email'];
                        $response['chemical_type_benefit'] = $row2['type_benefit'];
                        $response['chemical_type_request'] = $row2['type_request'];
                        $response['chemical_type_vehicle'] = $row2['type_vehicle'];
                        $response['chemical_type_location_material'] = $row2['type_location_material'];
                        $response['success'] = true;
                    }

                    // materiallocation table BUT NOT CHEMICAL
                    $row3 = mysqli_fetch_array($result3);
                    if($row3['license_id'] = $license_id){
                        $response['material_address'] = $row3['material_address'];
                        $response['material_phone'] = $row3['material_phone'];
                        $response['material_email'] = $row3['material_email'];
                        $response['type_benefit'] = $row3['type_benefit'];
                        $response['type_request'] = $row3['type_request'];
                        $response['type_vehicle'] = $row3['type_vehicle'];
                        $response['type_location_material'] = $row3['type_location_material'];
                        $response['success'] = true;
                    }

                    // companystaff
                    // เจ้าหน้าที่ความปลอดภัยทางรังสี
                    $row4 = mysqli_fetch_array($result4);
                    if($row4['license_id'] = $license_id){
                        $response['safe_authorities'] = $row4['type_authorities'];
                        $response['safe_name'] = $row4['staff_name'];
                        $response['safe_idcard'] = $row4['staff_idcard'];
                        $response['safe_position'] = $row4['staff_position'];
                        $response['safe_age'] = $row4['staff_age'];
                        $response['safe_nationality'] = $row4['staff_nationality'];
                        $response['safe_phone'] = $row4['staff_phone'];
                        $response['safe_email'] = $row4['staff_email'];
                        $response['safe_address'] = $row4['staff_address'];
                        $response['safe_qualification'] = $row4['staff_qualification'];
                        $response['safe_no_regis'] = $row4['staff_no_regis'];
                        $response['success'] = true;
                    }
                        
                    // ผู้ปฏิบัติงานทางรังสี
                    $row5 = mysqli_fetch_array($result5);
                    if($row5['license_id'] = $license_id){
                        $response['make_authorities'] = $row5['type_authorities'];
                        $response['make_name'] = $row5['staff_name'];
                        $response['make_idcard'] = $row5['staff_idcard'];
                        $response['make_position'] = $row5['staff_position'];
                        $response['make_age'] = $row5['staff_age'];
                        $response['make_nationality'] = $row5['staff_nationality'];
                        $response['make_phone'] = $row5['staff_phone'];
                        $response['make_email'] = $row5['staff_email'];
                        $response['make_address'] = $row5['staff_address'];
                        $response['make_qualification'] = $row5['staff_qualification'];
                        $response['make_no_regis'] = $row5['staff_no_regis'];
                        $response['success'] = true;
                    }
                }else if($row['license_type'] == 'ขออนุญาตฯ เครื่องกำเนิดรังสี'){
                    $response['id'] = $row['license_id'];
                    if($row['license_type'] == 'ขออนุญาตฯ เครื่องกำเนิดรังสี'){
                        $response['type'] = 7;
                    }
                    $response['number'] = $row['license_number'];
                    $response['success'] = true;

                    $sql1 = "SELECT * FROM materiallocation WHERE license_id = ".$license_id."";
                    $result1 = mysqli_query($conn,$sql1);

                    $sql2 = "SELECT * FROM materialxray WHERE license_id = ".$license_id."";
                    $result2 = mysqli_query($conn,$sql2);

                    $sql3 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี'";
                    $result3 = mysqli_query($conn,$sql3);
                
                    $sql4 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี'";
                    $result4 = mysqli_query($conn,$sql4);
                
                    $sql5 = "SELECT * FROM companystaff WHERE license_id = ".$license_id." AND type_authorities = 'แพทย์ผู้รับผิดชอบ'";
                    $result5 = mysqli_query($conn,$sql5);

                    $row1 = mysqli_fetch_array($result1);
                    if($row1['license_id'] = $license_id){
                        $response['material_address'] = $row1['material_address'];
                        $response['material_phone'] = $row1['material_phone'];
                        $response['material_email'] = $row1['material_email'];
                        $response['type_benefit'] = $row1['type_benefit'];
                        $response['type_request'] = $row1['type_request'];
                        $response['type_vehicle'] = $row1['type_vehicle'];
                        $response['type_location_material'] = $row1['type_location_material'];
                        $response['success'] = true;
                    }

                    $row2 = mysqli_fetch_array($result2);
                    if($row2['license_id'] = $license_id){
                        $response['no_reference'] = $row2['no_reference'];
                        $response['operation_type'] = $row2['operation_type'];
                        $response['manufacturer_material'] = $row2['manufacturer_material'];
                        $response['material_number'] = $row2['material_number'];
                        $response['number_xray'] = $row2['number_xray'];
                        $response['style_work'] = $row2['style_work'];
                        $response['power_kgv'] = $row2['power_kgv'];
                        $response['power_mgv'] = $row2['power_mgv'];
                        $response['power_mma'] = $row2['power_mma'];
                        $response['locationname_material'] = $row2['locationname_material'];
                        $response['company_sale'] = $row2['company_sale'];
                        $response['success'] = true;
                    }

                    // companystaff
                    // เจ้าหน้าที่ความปลอดภัยทางรังสี
                    $row3 = mysqli_fetch_array($result3);
                    if($row3['license_id'] = $license_id){
                        $response['safe_authorities'] = $row3['type_authorities'];
                        $response['safe_name'] = $row3['staff_name'];
                        $response['safe_idcard'] = $row3['staff_idcard'];
                        $response['safe_position'] = $row3['staff_position'];
                        $response['safe_age'] = $row3['staff_age'];
                        $response['safe_nationality'] = $row3['staff_nationality'];
                        $response['safe_phone'] = $row3['staff_phone'];
                        $response['safe_email'] = $row3['staff_email'];
                        $response['safe_address'] = $row3['staff_address'];
                        $response['safe_qualification'] = $row3['staff_qualification'];
                        $response['safe_no_regis'] = $row3['staff_no_regis'];
                        $response['success'] = true;
                    }
                    
                    // ผู้ปฏิบัติงานทางรังสี
                    $row4 = mysqli_fetch_array($result4);
                    if($row4['license_id'] = $license_id){
                        $response['make_authorities'] = $row4['type_authorities'];
                        $response['make_name'] = $row4['staff_name'];
                        $response['make_idcard'] = $row4['staff_idcard'];
                        $response['make_position'] = $row4['staff_position'];
                        $response['make_age'] = $row4['staff_age'];
                        $response['make_nationality'] = $row4['staff_nationality'];
                        $response['make_phone'] = $row4['staff_phone'];
                        $response['make_email'] = $row4['staff_email'];
                        $response['make_address'] = $row4['staff_address'];
                        $response['make_qualification'] = $row4['staff_qualification'];
                        $response['make_no_regis'] = $row4['staff_no_regis'];
                        $response['success'] = true;
                    }
                    
                    // แพทย์ผู้รับผิดชอบ
                    $row5 = mysqli_fetch_array($result5);
                    if($row5['license_id'] = $license_id){
                        $response['doctor_authorities'] = $row5['type_authorities'];
                        $response['doctor_name'] = $row5['staff_name'];
                        $response['doctor_idcard'] = $row5['staff_idcard'];
                        $response['doctor_position'] = $row5['staff_position'];
                        $response['doctor_age'] = $row5['staff_age'];
                        $response['doctor_nationality'] = $row5['staff_nationality'];
                        $response['doctor_phone'] = $row5['staff_phone'];
                        $response['doctor_email'] = $row5['staff_email'];
                        $response['doctor_address'] = $row5['staff_address'];
                        $response['doctor_work_name'] = $row5['staff_work_name'];
                        $response['doctor_art_license'] = $row5['staff_art_license'];
                        $response['doctor_start_work'] = $row5['staff_start_work'];
                        $response['success'] = true;
                    }
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
    echo json_encode($response);
?>