<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 1ก (สำหรับขออนุญาตฯ วัสดุพลอยได้)</h5>
    </div>
    <hr>
    <!-- First Step -->
    <div id="stepone1" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่ใช้และจัดเก็บวัสดุ</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_one_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialone_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialone_address"
                        value="<?php echo isset($_GET['data']) ? $add_address : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialone_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialone_district"
                        value="<?php echo isset($_GET['data']) ? $add_district : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialone_amphoe"
                        value="<?php echo isset($_GET['data']) ? $add_amphoe : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialone_province"
                        value="<?php echo isset($_GET['data']) ? $add_province : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialone_zipcode"
                        value="<?php echo isset($_GET['data']) ? $add_zipcode : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="location_materialone_phone">หมายเลขโทรศัพท์:</label>
                    <input type="text" class="form-control" id="location_materialone_phone"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_phone"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_email">Email:</label>
                    <input type="text" class="form-control" id="location_materialone_email"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_email"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_benefit">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="location_materialone_benefit"
                        value="<?php echo isset($_GET['data']) ? $arrayData["type_benefit"] : ""; ?>">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_materialone_request">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="location_materialone_request"
                        value="<?php echo isset($_GET['data']) ? $arrayData["type_request"] : ""; ?>">
                        <option value="ผลิต">ผลิต</option>
                        <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                        <option value="ใช้">ใช้</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save_locationone_stepone">
            <label class="custom-control-label" for="save_locationone_stepone">จัดเก็บสถานที่ไว้เป็นรายการโปรด</label>
        </div>

        <div class="float-right">
            <button id="nextstepone1" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>
    <br>

    <!-- Second Step -->
    <div id="steptwo1" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
            </div>
        </div>
        <div class="row mx-auto">
            <div id="materialopen1" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="material_close" value="ปิดผนึก" name="material_selected"
                        class="custom-control-input"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_type"] : ""; ?>">
                    <label class="custom-control-label" for="material_close">วัสดุชนิดปิดผนึก</label>
                </div>
            </div>
            <div id="materialclose1" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="material_open" value="ไม่ปิดผนึก" name="material_selected"
                        class="custom-control-input"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_type"] : ""; ?>">
                    <label class="custom-control-label" for="material_open">วัสดุชนิดไม่ปิดผนึก</label>
                </div>
            </div>
        </div>
        <br>
        <!-- <hr> -->
        <div id="closebox1" class="container" style="display:none;">
            <div class="row alert alert-light" role="alert">
                <h5>ข้อมูลของวัสดุชนิดปิดผนึก</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="no_reference">ทะเบียนอ้างอิง:</label>
                    <input type="text" class="form-control" id="no_reference"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_reference"] : ""; ?>">
                </div>
                <div class="form-group col-2">
                    <label for="operation_type">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select" id="operation_type"
                        value="<?php echo isset($_GET['data']) ? $arrayData["operation_type"] : ""; ?>">
                        <option value="Sr-90 Eye Applicator">01 Sr-90 Eye Applicator</option>
                        <option value="Teletherapy">02 Teletherapy</option>
                        <option value="Manual Brachy Therapy">03 Manual Brachy Therapy</option>
                        <option value="Remote Brachy Therapy">04 Remote Brachy Therapy</option>
                        <option value="Gamma Irradiator">05 Gamma Irradiator</option>
                        <option value="Research">06 Research</option>
                        <option value="Level Gauges">07 Level Gauges</option>
                        <option value="Thickness Gauges">08 Thickness Gauges</option>
                        <option value="Moisture Gauges">09 Moisture Gauges</option>
                        <option value="Density Gauges">10 Density Gauges</option>
                        <option value="Coal Logging">11 Coal Logging</option>
                        <option value="Oil Well Logging">12 Oil Well Logging</option>
                        <option value="Gamma Radiography">13 Gamma Radiography</option>
                        <option value="Container/Shielding">18 Container/Shielding</option>
                        <option value="Lightning Preventor">20 Lightning Preventor</option>
                        <option value="Standard/Calibration Source">23 Standard/Calibration Source</option>
                        <option value="Electrostatic Eliminator">24 Electrostatic Eliminator</option>
                        <option value="Element Analytical">25 Element Analytical</option>
                        <option value="Smoke Detector">26 Smoke Detector</option>
                        <option value="อื่นๆ..">27 อื่นๆ..</option>
                    </select>
                </div>
                <div class="form-group col-md">
                    <label for="element">ธาตุ-เลขมวล:</label>
                    <input type="text" class="form-control" id="element"
                        value="<?php echo isset($_GET['data']) ? $arrayData["element"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="product_model">รุ่นหรือรหัสสินค้า:</label>
                    <input type="text" class="form-control" id="product_model"
                        value="<?php echo isset($_GET['data']) ? $arrayData["product_model"] : ""; ?>">
                </div>
                <div class="form-group col-2">
                    <label for="material_status">สถานภาพวัสดุ:</label>
                    <select class="custom-select" id="material_status"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_status"] : ""; ?>">
                        <option value="ใช้งานปกติ">1.ใช้งานปกติ</option>
                        <option value="เก็บสำรอง">2.เก็บสำรอง</option>
                        <option value="ยกเลิกการใช้">3.ยกเลิกการใช้</option>
                        <option value="รอจัดการยาก">4.รอจัดการยาก</option>
                        <option value="กำลังสั่งนำเข้า">5.กำลังสั่งนำเข้า</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="manufacturer_material">ผู้ผลิตวัสดุกัมมันตรังสี:</label>
                    <input type="text" class="form-control" id="manufacturer_material"
                        value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_material"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="material_number">หมายเลขวัสดุ:</label>
                    <input type="text" class="form-control" id="material_number"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_number"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="weight_material">กัมมันตภาพหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="weight_material"
                        value="<?php echo isset($_GET['data']) ? $arrayData["weight_material"] : ""; ?>">
                </div>
                <div class="form-group col-1">
                    <label for="unit_weight">หน่วย:</label>
                    <select class="custom-select" id="unit_weight"
                        value="<?php echo isset($_GET['data']) ? $arrayData["unit_weight"] : ""; ?>">
                        <option value="Bq">Bq</option>
                        <option value="Ci">Ci</option>
                        <option value="kg">kg</option>
                        <option value="lb">lb</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="manufacturer_container">ผู้ผลิตภาชนะบรรจุ:</label>
                    <input type="text" class="form-control" id="manufacturer_container"
                        value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_container"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="material_number_container">รุ่นหรือรหัสสินค้า(ภาชนะบรรจุ):</label>
                    <input type="text" class="form-control" id="material_number_container"
                        value="<?php echo isset($_GET['data']) ? $arrayData["container_number"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="container_number">หมายเลข:</label>
                    <input type="text" class="form-control" id="container_number"
                        value="<?php echo isset($_GET['data']) ? $arrayData["weight_container"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="weight_container">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="weight_container"
                        value="<?php echo isset($_GET['data']) ? $arrayData["unit_container"] : ""; ?>">
                </div>
                <div class="form-group col-1">
                    <label for="unit_container">หน่วย:</label>
                    <select class="custom-select" id="unit_container"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_number_container"] : ""; ?>">
                        <option value="Bq">Bq</option>
                        <option value="Ci">Ci</option>
                        <option value="kg">kg</option>
                        <option value="lb">lb</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="locationname_material">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                    <input type="text" class="form-control" id="locationname_material">
                </div>
                <div class="form-group col-md">
                    <label for="company_sale">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="text" class="form-control" id="company_sale">
                </div>
            </div>
        </div>

        <!-- No close -->
        <div id="openbox1" class="container" style="display:none;">
            <div class="row alert alert-light" role="alert" style="height:45px">
                <h5>ข้อมูลของวัสดุชนิดไม่ปิดผนึก</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="open_no_reference">ทะเบียนอ้างอิง:</label>
                    <input type="text" class="form-control" id="open_no_reference"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_reference"] : ""; ?>">
                </div>
                <div class="form-group col-2">
                    <label for="open_operation_type">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select" id="open_operation_type"
                        value="<?php echo isset($_GET['data']) ? $arrayData["operation_type"] : ""; ?>">
                        <option value="Research">16 Research</option>
                        <option value="รังสีรักษา">17 รังสีรักษา</option>
                        <option value="รังสีวินิจฉัย">19 รังสีวินิจฉัย</option>
                        <option value="Leakage Testing">22 Leakage Testing</option>
                        <option value="Standard Source">23 Standard Source</option>
                        <option value="อื่นๆ..">อื่นๆ..</option>
                    </select>
                </div>
                <div class="form-group col-md">
                    <label for="open_element">ธาตุ-เลขมวล:</label>
                    <input type="text" class="form-control" id="open_element"
                        value="<?php echo isset($_GET['data']) ? $arrayData["element"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="open_product_model">รุ่นหรือรหัสสินค้า:</label>
                    <input type="text" class="form-control" id="open_product_model"
                        value="<?php echo isset($_GET['data']) ? $arrayData["product_model"] : ""; ?>">
                </div>
                <div class="form-group col-2">
                    <label for="open_material_status">สถานภาพวัสดุ:</label>
                    <select class="custom-select" id="open_material_status"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_status"] : ""; ?>">
                        <option value="ใช้งานปกติ">1.ใช้งานปกติ</option>
                        <option value="เก็บสำรอง">2.เก็บสำรอง</option>
                        <option value="ยกเลิกการใช้">3.ยกเลิกการใช้</option>
                        <option value="รอจัดการยาก">4.รอจัดการยาก</option>
                        <option value="กำลังสั่งนำเข้า">5.กำลังสั่งนำเข้า</option>
                        <option value="ขอสำรอง">6.ขอสำรอง</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="open_manufacturer_material">ผู้ผลิตวัสดุกัมมันตรังสี:</label>
                    <input type="text" class="form-control" id="open_manufacturer_material"
                        value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_material"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="open_weight_material">กัมมันตภาพสูงสุดหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="open_weight_material"
                        value="<?php echo isset($_GET['data']) ? $arrayData["weight_material"] : ""; ?>">
                </div>
                <div class="form-group col-1">
                    <label for="open_unit_weight">หน่วย:</label>
                    <select class="custom-select" id="open_unit_weight"
                        value="<?php echo isset($_GET['data']) ? $arrayData["unit_weight"] : ""; ?>">
                        <option value="Bq">Bq</option>
                        <option value="Ci">Ci</option>
                        <option value="kg">kg</option>
                        <option value="lb">lb</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="open_physical_properties">สมบัติทางกายภาพ:</label>
                    <select class="custom-select" id="open_physical_properties"
                        value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_container"] : ""; ?>">
                        <option value="ของแข็ง">1.ของแข็ง</option>
                        <option value="ของเหลว">2.ของเหลว</option>
                        <option value="ก๊าซ">3.ก๊าซ</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="open_locationname_material">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                    <input type="text" class="form-control" id="open_locationname_material"
                        value="<?php echo isset($_GET['data']) ? $arrayData["locationname_material"] : ""; ?>">
                </div>
                <div class="form-group col-md">
                    <label for="open_company_sale">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="text" class="form-control" id="open_company_sale"
                        value="<?php echo isset($_GET['data']) ? $arrayData["company_sale"] : ""; ?>">
                </div>
            </div>
        </div>
        <div class="float-right">
            <button id="backstepone1" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextsteptwo1" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <!-- Third Step -->
    <div id="stepthree1" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">เจ้าหน้าที่ที่เกี่ยวข้องกับวัสดุ</a>
            </li>
        </ul>

        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                เจ้าหน้าที่ความปลอดภัยทางรังสี
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_one_safe" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="safe_name"
                                        value="<?php echo isset($_GET['data']) ? $safe_name : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="safe_lname"
                                        value="<?php echo isset($_GET['data']) ? $safe_lname : ""; ?>">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="safe_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="safe_idcard"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_idcard"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="safe_position"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_position"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="safe_age">อายุ:</label>
                                    <input type="text" class="form-control" id="safe_age"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_age"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="safe_nationality"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_nationality"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="safe_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="safe_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_phone"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_email">Email:</label>
                                    <input type="text" class="form-control" id="safe_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_email"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="safe_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="safe_houseno"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_house : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="safe_villageno"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_house1 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="safe_alley"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_house2 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_road">ถนน:</label>
                                    <input type="text" class="form-control" id="safe_road"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_house3 : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="safe_subdistrict"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_district : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="safe_district"
                                        value="<?php echo isset($_GET['data']) ? $safe_address_amphoe : ""; ?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="safe_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="safe_province"
                                            value="<?php echo isset($_GET['data']) ? $safe_address_province : ""; ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="safe_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="safe_zipcode"
                                            value="<?php echo isset($_GET['data']) ? $safe_address_zipcode : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_qualification">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="safe_qualification"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_qualification"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_number">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="safe_number"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["safe_no_regis"] : ""; ?>">
                                </div>
                            </div>
                            <!-- <br> -->
                            <!-- <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                            </div>
                            <div class="form-row col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_safeone">
                                <label class="custom-control-label"
                                    for="save_safeone">จัดเก็บข้อมูลเจ้าหน้าที่ความปลอดภัยทางรังสีเป็นรายการโปรด</label>
                            </div>

                            <br>
                            <!-- <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**
                            </h6> -->
                            <!-- <button id="addsafety11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button> -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo1">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ปฎิบัติงานรังสี
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_one_make" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="make_name"
                                        value="<?php echo isset($_GET['data']) ? $make_name : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="make_lname"
                                        value="<?php echo isset($_GET['data']) ? $make_lname : ""; ?>">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="make_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="make_idcard"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_idcard"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="make_position"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_position"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="make_age">อายุ:</label>
                                    <input type="text" class="form-control" id="make_age"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_age"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="make_nationality"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_nationality"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="make_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="make_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_phone"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_email">Email:</label>
                                    <input type="text" class="form-control" id="make_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_email"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="make_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="make_houseno"
                                        value="<?php echo isset($_GET['data']) ? $make_address_house : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="make_villageno"
                                        value="<?php echo isset($_GET['data']) ? $make_address_house1 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="make_alley"
                                        value="<?php echo isset($_GET['data']) ? $make_address_house2 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_road">ถนน:</label>
                                    <input type="text" class="form-control" id="make_road"
                                        value="<?php echo isset($_GET['data']) ? $make_address_house3 : ""; ?>">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="make_subdistrict"
                                        value="<?php echo isset($_GET['data']) ? $make_address_district : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="make_district"
                                        value="<?php echo isset($_GET['data']) ? $make_address_amphoe : ""; ?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="make_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="make_province"
                                            value="<?php echo isset($_GET['data']) ? $make_address_province : ""; ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="make_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="make_zipcode"
                                            value="<?php echo isset($_GET['data']) ? $make_address_zipcode : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_qualification">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="make_qualification"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_qualification"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_number">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="make_number"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["make_no_regis"] : ""; ?>">
                                </div>
                            </div>
                            <!-- <br> -->
                            <!-- <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
                            </div>
                            <div class="form-row col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_makeone">
                                <label class="custom-control-label"
                                    for="save_makeone">จัดเก็บข้อมูลผู้ปฏิบัติงานทางรังสีเป็นรายการโปรด</label>
                            </div>

                            <br>
                            <!-- <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addmake11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button> -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree1">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                แพทย์ผู้รับผิดชอบ
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree1" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_one_doctor" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                    <input type="text" class="form-control" id="doctor_name"
                                        value="<?php echo isset($_GET['data']) ? $doctor_name : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="doctor_lname"
                                        value="<?php echo isset($_GET['data']) ? $doctor_lname : ""; ?>">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="doctor_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="doctor_idcard"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_idcard"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="doctor_position"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_position"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="doctor_age">อายุ:</label>
                                    <input type="text" class="form-control" id="doctor_age"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_age"] : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="doctor_nationality"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_nationality"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="doctor_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="doctor_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_phone"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_email">Email:</label>
                                    <input type="text" class="form-control" id="doctor_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_email"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="doctor_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_houseno"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_house : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="doctor_villageno"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_house1 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="doctor_alley"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_house2 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_road">ถนน:</label>
                                    <input type="text" class="form-control" id="doctor_road"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_house3 : ""; ?>">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="doctor_subdistrict"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_district : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="doctor_district"
                                        value="<?php echo isset($_GET['data']) ? $doctor_address_amphoe : ""; ?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="doctor_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="doctor_province"
                                            value="<?php echo isset($_GET['data']) ? $doctor_address_province : ""; ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="doctor_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="doctor_zipcode"
                                            value="<?php echo isset($_GET['data']) ? $doctor_address_zipcode : ""; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_hospital_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="doctor_hospital_name"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_work_name"] : ""; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_artlicense">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_artlicense"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_art_license"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_date_start">ออกให้ ณ วันที่:</label>
                                    <input type="text" class="form-control" id="doctor_date_start"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["doctor_start_work"] : ""; ?>">
                                </div>
                            </div>
                            <!-- <br> -->
                            <!-- <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ
                                </h6>
                            </div>
                            <div class="form-row col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_doctorone">
                                <label class="custom-control-label"
                                    for="save_doctorone">จัดเก็บข้อมูลแพทย์ผู้รับผิดชอบเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <!-- <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="adddoctor11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div style="float:right;">
                <button id="backsteptwo1" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm1" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModalScrollable">
                    ยื่นคำขอใบอนุญาต
                </button>
            </div>
        </div>
        <br>

        <div class="modal fade" id="pageConfirm1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">รายละเอียดการยื่นขอใบอนุญาต
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row-ml-3">
                            <h6>ชื่อผู้ขอใบอนุญาต:</h6>
                            <p id="show_person_request" style="color:Gray;">
                                <?php
                                    $usercompany_name = $_SESSION["name"];
                                    echo ($usercompany_name);
                                ?>
                            </p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                            <p id="show_location_name" style="color:Gray;"></p>
                            <p id="show_worklocation_name" style="color:Gray;"></p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                            <p id="show_type_material" style="color:Gray;"></p>
                            <p id="show_detail_material" style="color:Gray;"></p>
                            <p id="show_benefit_material" style="color:Gray;"></p>
                            <p id="show_detail_of_material" style="color:Gray;"></p>
                            <p id="show_status_material" style="color:Gray;"></p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดเจ้าหน้าที่:</h6>
                            <p id="show_safe_name" style="color:Gray;"></p>
                            <p id="show_make_name" style="color:Gray;"></p>
                            <p id="show_doctor_name" style="color:Gray;"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button id="confirm" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดสถานที่จัดเก็บ -->
<div class="modal fade" id="show_favone_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่จัดเก็บวัสดุ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                            <th scope="col">เบอร์โทรศัพท์</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests = array();

                            $sql = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.material_id, materiallocation.company_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE company_id = ".$_SESSION["company_id"]." AND fav_location = 'select'";
                            $query = mysqli_query($conn,$sql) or die ("Query fail: " . mysqli_error($conn));

                            while($request = mysqli_fetch_assoc($query)){
                                $requests[] = $request;
                            }
                                $i = 1;
                                if(is_array($requests) || is_object($requests)){
                                    foreach($requests as $request){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav(<?php echo $request['material_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        $material_address = explode(",",$request['material_address'])[0];
                                        $material_address1 = explode(",",$request['material_address'])[1];
                                        $material_address2 = explode(",",$request['material_address'])[2];
                                        $material_address3 = explode(",",$request['material_address'])[3];
                                        $material_address4 = explode(",",$request['material_address'])[4];
                                        echo $material_address." ต.".$material_address1." อ.".$material_address2." จ.".$material_address3." ".$material_address4; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request['material_phone'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request['material_email'];
                                    ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                                }
                            }
                        ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="select_fav_location" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดเจ้าหน้าที่ทางรังสี -->
<div class="modal fade" id="show_favone_safe" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดเจ้าหน้าที่ทางรังสี</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ชื่อ-นามสกุล</th>
                            <th scope="col">ตำแหน่ง</th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests3 = array();

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี' AND fav_staff = 'select'";
                            $query3 = mysqli_query($conn,$sql3) or die ("Query fail: " . mysqli_error($conn));

                            while($request3 = mysqli_fetch_assoc($query3)){
                                $requests3[] = $request3;
                            }
                                $i = 1;
                                if(is_array($requests3) || is_object($requests3)){
                                    foreach($requests3 as $request3){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav_staff(<?php echo $request3['staff_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        echo $request3['staff_name']; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request3['staff_position'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        // echo $request3['staff_address'];
                                        $staff_address = explode(",",$request3['staff_address'])[0];
                                        $staff_address1 = explode(",",$request3['staff_address'])[1];
                                        $staff_address2 = explode(",",$request3['staff_address'])[2];
                                        $staff_address3 = explode(",",$request3['staff_address'])[3];
                                        $staff_address4 = explode(",",$request3['staff_address'])[4];
                                        $staff_address5 = explode(",",$request3['staff_address'])[5];
                                        $staff_address6 = explode(",",$request3['staff_address'])[6];
                                        $staff_address7 = explode(",",$request3['staff_address'])[7];
                                        echo $staff_address." ต.".$staff_address4." อ.".$staff_address5." จ.".$staff_address6." ".$staff_address7;
                                    ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                                }
                            }
                        ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="select_fav_safeone" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดผู้ปฏิบัติงานทางรังสี -->
<div class="modal fade" id="show_favone_make" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้ปฎิบัติงานทางรังสี</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ชื่อ-นามสกุล</th>
                            <th scope="col">ตำแหน่ง</th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests1 = array();

                            $sql1 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี' AND fav_staff = 'select'";
                            $query1 = mysqli_query($conn,$sql1) or die ("Query fail: " . mysqli_error($conn));

                            while($request1 = mysqli_fetch_assoc($query1)){
                                $requests1[] = $request1;
                            }
                                $i = 1;
                                if(is_array($requests1) || is_object($requests1)){
                                    foreach($requests1 as $request1){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav_staff(<?php echo $request1['staff_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        echo $request1['staff_name']; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request1['staff_position'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        $staff_address = explode(",",$request1['staff_address'])[0];
                                        $staff_address1 = explode(",",$request1['staff_address'])[1];
                                        $staff_address2 = explode(",",$request1['staff_address'])[2];
                                        $staff_address3 = explode(",",$request1['staff_address'])[3];
                                        $staff_address4 = explode(",",$request1['staff_address'])[4];
                                        $staff_address5 = explode(",",$request1['staff_address'])[5];
                                        $staff_address6 = explode(",",$request1['staff_address'])[6];
                                        $staff_address7 = explode(",",$request1['staff_address'])[7];
                                        echo $staff_address." ต.".$staff_address4." อ.".$staff_address5." จ.".$staff_address6." ".$staff_address7;
                                    ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                                }
                            }
                        ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="select_fav_makeone" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดแพทย์ผู้รับผิดชอบ -->
<div class="modal fade" id="show_favone_doctor" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดแพทย์ผู้รับผิดชอบ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ชื่อ-นามสกุล</th>
                            <th scope="col">ตำแหน่ง</th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'แพทย์ผู้รับผิดชอบ' AND fav_staff = 'select'";
                            $query2 = mysqli_query($conn,$sql2) or die ("Query fail: " . mysqli_error($conn));

                            while($request2 = mysqli_fetch_assoc($query2)){
                                $requests2[] = $request2;
                            }
                                $i = 1;
                                if(is_array($requests2) || is_object($requests2)){
                                    foreach($requests2 as $request2){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav_staff(<?php echo $request2['staff_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        echo $request2['staff_name']; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request2['staff_position'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        $staff_address = explode(",",$request2['staff_address'])[0];
                                        $staff_address1 = explode(",",$request2['staff_address'])[1];
                                        $staff_address2 = explode(",",$request2['staff_address'])[2];
                                        $staff_address3 = explode(",",$request2['staff_address'])[3];
                                        $staff_address4 = explode(",",$request2['staff_address'])[4];
                                        $staff_address5 = explode(",",$request2['staff_address'])[5];
                                        $staff_address6 = explode(",",$request2['staff_address'])[6];
                                        $staff_address7 = explode(",",$request2['staff_address'])[7];
                                        echo $staff_address." ต.".$staff_address4." อ.".$staff_address5." จ.".$staff_address6." ".$staff_address7;
                                    ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                                }
                            }
                        ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button id="select_fav_doctorone" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- script step one -->
<script>
$(document).ready(function() {
    $("#nextstepone1").click(function() {
        $("#stepone1").hide();
        $("#steptwo1").show();
    });
});
</script>

<!-- script step two -->
<script>
$(document).ready(function() {
    $("#backstepone1").click(function() {
        $("#steptwo1").hide();
        $("#stepone1").show();
    });
    $("#nextsteptwo1").click(function() {
        $("#steptwo1").hide();
        $("#stepthree1").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo1").click(function() {
        $("#stepone1").hide();
        $("#stepthree1").hide();
        $("#steptwo1").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#materialopen1").click(function() {
        $("#openbox1").hide();
        $("#closebox1").show();
    });
    $("#materialclose1").click(function() {
        $("#closebox1").hide();
        $("#openbox1").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addsafety").click(function() {
        $("#detailsafety").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addmake").click(function() {
        $("#detailmake").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#adddoctor").click(function() {
        $("#detaildoctor").show();
    });
});
</script>

<!-- new Ui -->
<!-- <script>
$(document).ready(function() {
    $("#addsafety11").click(function() {
        $("#detailsafety11").show();
    });
});
</script> -->

<!-- <script>
$(document).ready(function() {
    $("#addmake11").click(function() {
        $("#detailmake11").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#adddoctor11").click(function() {
        $("#detaildoctor11").show();
    });
});
</script> -->

<script>
$(document).ready(function() {
    $('#headingOne1').click(function() {
        $('#collapseTwo1').collapse('hide');
        $('#collapseThree1').collapse('hide');
        $('#collapseOne1').collapse('show');
    });
    $('#headingTwo1').click(function() {
        $('#collapseOne1').collapse('hide');
        $('#collapseThree1').collapse('hide');
        $('#collapseTwo1').collapse('show');
    });
    $('#headingThree1').click(function() {
        $('#collapseOne1').collapse('hide');
        $('#collapseTwo1').collapse('hide');
        $('#collapseThree1').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm1').click(function() {
        $('#pageConfirm1').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_one_location').click(function() {
        $('#show_favone_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_one_safe').click(function() {
        $('#show_favone_safe').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_one_make').click(function() {
        $('#show_favone_make').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_one_doctor').click(function() {
        $('#show_favone_doctor').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm1').click(function() {
        var materialone_address = document.getElementById("location_materialone_address").value;
        var materialone_district = document.getElementById("location_materialone_district").value;
        var materialone_amphoe = document.getElementById("location_materialone_amphoe").value;
        var materialone_province = document.getElementById("location_materialone_province").value;
        var materialone_zipcode = document.getElementById("location_materialone_zipcode").value;
        var location_material = document.getElementById("locationname_material").value;
        document.getElementById("show_location_name").innerHTML = materialone_address + " ต." +
            materialone_district + " อ." + materialone_amphoe + " จ." + materialone_province + " " +
            materialone_zipcode;

        var select_button_close = document.getElementById('material_selected');
        var materialone_request = document.getElementById("location_materialone_request").value;
        var materialone_benefit = document.getElementById("location_materialone_benefit").value;
        var no_reference = document.getElementById("no_reference").value;
        var operation_type = document.getElementById("operation_type").value;
        var element = document.getElementById("element").value;
        var product_model = document.getElementById("product_model").value;
        var material_status = document.getElementById("material_status").value;

        var select_button_open = document.getElementById('material_selected');
        var open_locationname_material = document.getElementById("open_locationname_material").value;
        var open_no_reference = document.getElementById("open_no_reference").value;
        var open_operation_type = document.getElementById("open_operation_type").value;
        var open_element = document.getElementById("open_element").value;
        var open_product_model = document.getElementById("open_product_model").value;
        var open_material_status = document.getElementById("open_material_status").value;

        if (document.getElementById('material_close').checked) {
            select_button_close = document.getElementById('material_close').value;
            document.getElementById("show_worklocation_name").innerHTML =
                "ชื่อสถานที่ติดตั้งหรือใช้งาน: " + location_material;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " +
                select_button_close;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                materialone_request;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                materialone_benefit;
            document.getElementById("show_detail_of_material").innerHTML = "ทะเบียนอ้างอิง: " +
                no_reference + " รหัสการใช้งาน: " + operation_type + " ธาตุ-เลขมวล: " + element +
                " รุ่นหรือรหัสสินค้า: " + product_model;
            document.getElementById("show_status_material").innerHTML = "สถานภาพวัสดุ: " +
                material_status;
        } else if (document.getElementById('material_open').checked) {
            select_button_open = document.getElementById('material_open').value;
            document.getElementById("show_worklocation_name").innerHTML =
                "ชื่อสถานที่ติดตั้งหรือใช้งาน: " + open_locationname_material;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " +
                select_button_open;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                materialone_request;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                materialone_benefit;
            document.getElementById("show_detail_of_material").innerHTML = "ทะเบียนอ้างอิง: " +
                open_no_reference + " รหัสการใช้งาน: " + open_operation_type + " ธาตุ-เลขมวล: " +
                open_element +
                " รุ่นหรือรหัสสินค้า: " + open_product_model;
            document.getElementById("show_status_material").innerHTML = "สถานภาพวัสดุ: " +
                open_material_status;
        }

        var safe_name = document.getElementById("safe_name").value;
        var safe_lname = document.getElementById("safe_lname").value;
        var make_name = document.getElementById("make_name").value;
        var make_lname = document.getElementById("make_lname").value;
        var doctor_name = document.getElementById("doctor_name").value;
        var doctor_lname = document.getElementById("doctor_lname").value;
        document.getElementById("show_safe_name").innerHTML = "เจ้าหน้าที่ความปลอดภัยทางรังสี: " +
            safe_name + " " + safe_lname;
        document.getElementById("show_make_name").innerHTML = "ผู้ปฏิบัติงานทางรังสี: " +
            make_name + " " + make_lname;
        document.getElementById("show_doctor_name").innerHTML = "แพทย์ผู้รับผิดชอบ: " +
            doctor_name + " " + doctor_lname;
    });
});
</script>