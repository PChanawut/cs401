<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 3ก (สำหรับนำเข้า-ส่งออกวัสดุพลอยได้)</h5>
    </div>
    <hr>
    <!-- First Step -->
    <div id="stepone2" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>

        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่ใช้และจัดเก็บวัสดุ</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_two_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="type_request">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="type_request">
                        <option value="นำเข้า">นำหรือสั่งเข้ามาในราชอาณาจักร</option>
                        <option value="ส่งออก">นำหรือส่งออกนอกราชอาณาจักร</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialtwo_address"
                        value="<?php echo isset($_GET['data']) ? $add_address : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialtwo_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialtwo_district"
                        value="<?php echo isset($_GET['data']) ? $add_district : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialtwo_amphoe"
                        value="<?php echo isset($_GET['data']) ? $add_amphoe : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialtwo_province"
                        value="<?php echo isset($_GET['data']) ? $add_province : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialtwo_zipcode"
                        value="<?php echo isset($_GET['data']) ? $add_zipcode : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialtwo_phone">หมายเลขโทรศัพท์:</label>
                    <input type="text" class="form-control" id="location_materialtwo_phone"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_phone"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_email">Email:</label>
                    <input type="text" class="form-control" id="location_materialtwo_email"
                        value="<?php echo isset($_GET['data']) ? $arrayData["material_email"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_benefit">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="location_materialtwo_benefit">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_vehicle">พาหนะสำหรับการขนส่ง:</label>
                    <select class="custom-select" id="location_materialtwo_vehicle">
                        <option value="เครื่องบิน">เครื่องบิน</option>
                        <option value="เรือ">เรือ</option>
                        <option value="รถยนต์">รถยนต์</option>
                        <option value="รถไฟ">รถไฟ</option>
                        <option value="อื่นๆ...">อื่นๆ...</option>
                    </select>
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_locationtwo_stepone">
                <label class="custom-control-label"
                    for="save_locationtwo_stepone">จัดเก็บสถานที่ไว้เป็นรายการโปรด</label>
            </div>
            <hr>
            <div class="row alert alert-light" role="alert" style="height:45px">
                <h5>เอกสารที่เกี่ยวข้อง</h5>
            </div>
            <div id="selecthave" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline10" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline10">มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <hr>
                <div id="detailhave" class="container" style="display:none;">
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group col-md-4">
                                <label for="location_materialtwo_licenseno">ใบอนุญาตเลขที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_materialtwo_licenseno"
                                    value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location_materialtwo_licensedate">หมดอายุวันที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_materialtwo_licensedate">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div id="selectnothave" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline11" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline11">ไม่มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <div id="detailnothave" class="container" style="display:none;">
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="location_materialtwo_startlicense">ยื่นแบบคำขออนุญาตเมื่อวันที่:</label>
                                <input type="text" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                    id="location_materialtwo_startlicense">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="nextstepone2" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>
    <br>

    <!-- Second Step -->
    <div id="steptwo2" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต</h5>
            </div>
            <div class="row mx-auto">
                <div id="materialopen2" class="col px-md-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="material_close" value="ปิดผนึก" name="material_selected"
                            class="custom-control-input">
                        <label class="custom-control-label" for="material_close">วัสดุชนิดปิดผนึก</label>
                    </div>
                </div>
                <div id="materialclose2" class="col px-md-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="material_open" value="ไม่ปิดผนึก" name="material_selected"
                            class="custom-control-input">
                        <label class="custom-control-label" for="material_open">วัสดุชนิดไม่ปิดผนึก</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- <hr> -->
            <div id="closebox2" class="container" style="display:none;">
                <div class="row alert alert-light" role="alert">
                    <h5>ข้อมูลของวัสดุชนิดปิดผนึก</h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="no_reference_two">ทะเบียนอ้างอิง:</label>
                        <input type="text" class="form-control" id="no_reference_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_reference"] : ""; ?>">
                    </div>
                    <div class="form-group col-2">
                        <label for="operation_type_two">รหัสประเภทการใช้งาน:</label>
                        <select class="custom-select" id="operation_type_two">
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
                        <label for="element_two">ธาตุ-เลขมวล:</label>
                        <input type="text" class="form-control" id="element_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["element"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="product_model_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="product_model_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["product_model"] : ""; ?>">
                    </div>
                    <div class="form-group col-2">
                        <label for="material_status_two">สถานภาพวัสดุ:</label>
                        <select class="custom-select" id="material_status_two">
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
                        <label for="manufacturer_material_two">ผู้ผลิตวัสดุกัมมันตรังสี:</label>
                        <input type="text" class="form-control" id="manufacturer_material_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_material"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="material_number_two">หมายเลขวัสดุ:</label>
                        <input type="text" class="form-control" id="material_number_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["material_number"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="weight_material_two">กัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="text" class="form-control" id="weight_material_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["weight_material"] : ""; ?>">
                    </div>
                    <div class="form-group col-1">
                        <label for="unit_weight_two">หน่วย:</label>
                        <select class="custom-select" id="unit_weight_two">
                            <option value="Bq">Bq</option>
                            <option value="Ci">Ci</option>
                            <option value="kg">kg</option>
                            <option value="lb">lb</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="manufacturer_container_two">ผู้ผลิตภาชนะบรรจุ:</label>
                        <input type="text" class="form-control" id="manufacturer_container_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["manufacturer_container"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="material_number_container_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="material_number_container_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["material_number_container"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="container_number_two">หมายเลข:</label>
                        <input type="text" class="form-control" id="container_number_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["container_number"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="weight_container_two">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="text" class="form-control" id="weight_container_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["weight_container"] : ""; ?>">
                    </div>
                    <div class="form-group col-1">
                        <label for="unit_container_two">หน่วย:</label>
                        <select class="custom-select" id="unit_container_two">
                            <option value="Bq">Bq</option>
                            <option value="Ci">Ci</option>
                            <option value="kg">kg</option>
                            <option value="lb">lb</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="locationname_material_two">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                        <input type="text" class="form-control" id="locationname_material_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["locationname_material"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="company_sale_two">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="text" class="form-control" id="company_sale_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["company_sale"] : ""; ?>">
                    </div>
                </div>
            </div>

            <div id="openbox2" class="container" style="display:none;">
                <div class="row alert alert-light" role="alert" style="height:45px">
                    <h5>ข้อมูลของวัสดุชนิดไม่ปิดผนึก</h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="open_no_reference_two">ทะเบียนอ้างอิง:</label>
                        <input type="text" class="form-control" id="open_no_reference_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-2">
                        <label for="open_operation_type_two">รหัสประเภทการใช้งาน:</label>
                        <select class="custom-select" id="open_operation_type_two">
                            <option value="Research">16 Research</option>
                            <option value="รังสีรักษา">17 รังสีรักษา</option>
                            <option value="รังสีวินิจฉัย">19 รังสีวินิจฉัย</option>
                            <option value="Leakage Testing">22 Leakage Testing</option>
                            <option value="Standard Source">23 Standard Source</option>
                            <option value="อื่นๆ..">อื่นๆ..</option>
                        </select>
                    </div>
                    <div class="form-group col-md">
                        <label for="open_element_two">ธาตุ-เลขมวล:</label>
                        <input type="text" class="form-control" id="open_element_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_product_model_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="open_product_model_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-2">
                        <label for="open_material_status_two">สถานภาพวัสดุ:</label>
                        <select class="custom-select" id="open_material_status_two">
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
                        <label for="open_manufacturer_material_two">ผู้ผลิตวัสดุกัมมันตรังสี:</label>
                        <input type="text" class="form-control" id="open_manufacturer_material_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_number_two">กัมมันตภาพสูงสุดหรือรังสี:</label>
                        <input type="text" class="form-control" id="open_weight_material"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-1">
                        <label for="open_unit_weight_two">หน่วย:</label>
                        <select class="custom-select" id="open_unit_weight_two">
                            <option value="Bq">Bq</option>
                            <option value="Ci">Ci</option>
                            <option value="kg">kg</option>
                            <option value="lb">lb</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="open_physical_properties_two">สมบัติทางกายภาพ:</label>
                        <select class="custom-select" id="open_physical_properties_two">
                            <option value="ของแข็ง">1.ของแข็ง</option>
                            <option value="ของเหลว">2.ของเหลว</option>
                            <option value="ก๊าซ">3.ก๊าซ</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="open_locationname_material_two">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                        <input type="text" class="form-control" id="open_locationname_material_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_company_sale_two">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="text" class="form-control" id="open_company_sale_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row alert alert-light" role="alert" style="height:45px">
                    <h5>การบรรจุหีบห่อของวัสดุพลอยได้</h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="open_style_two">ลักษณะและขนาดของหีบห่อ:</label>
                        <input type="text" class="form-control" id="style_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["pack_style"] : ""; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="open_styletype_two">ชนิดหีบห่อ:</label>
                        <select class="custom-select" id="styletype_two">
                            <option value="Excepted">Excepted</option>
                            <option value="IP-1">IP-1</option>
                            <option value="IP-2">IP-2</option>
                            <option value="IP-3">IP-3</option>
                            <option value="A">A</option>
                            <option value="B(U)">B(U)</option>
                            <option value="B(M)">B(M)</option>
                            <option value="C">C</option>
                            <option value="อื่นๆ...">อื่นๆ...</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="unnumber_two">หมายเลขสหประชาชาติ (UN number):</label>
                        <input type="text" class="form-control" id="unnumber_two"
                            value="<?php echo isset($_GET['data']) ? $arrayData["un_number"] : ""; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="backsteptwo2" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextsteptwo2" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepthree2" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne2">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออกทั้งในและนอกราชอาณาจักร
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_two_sale" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="sale_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="sale_name"
                                        value="<?php echo isset($_GET['data']) ? $sale_name : ""; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sale_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="sale_lname"
                                        value="<?php echo isset($_GET['data']) ? $sale_สname : ""; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sale_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="sale_idcard"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_idcard"] : ""; ?>">
                                </div>
                                <div class="form-group col-2">
                                    <label for="sale_age">อายุ:</label>
                                    <input type="text" class="form-control" id="sale_age"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_age"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="sale_position"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_position"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="sale_nationality"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_nationality"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_email">Email:</label>
                                    <input type="text" class="form-control" id="sale_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_email"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="sale_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="sale_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_phone"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_houseno">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="sale_work_name"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["sale_work_name"] : ""; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="sale_work_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="sale_work_houseno"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_house : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sale_work_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="sale_work_villageno"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_house1 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="sale_work_alley"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_house2 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="sale_work_road"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_house3 : ""; ?>">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="sale_work_subdistrict"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_district : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="sale_work_district"
                                        value="<?php echo isset($_GET['data']) ? $sale_address_amphoe : ""; ?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="sale_work_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="sale_work_province"
                                            value="<?php echo isset($_GET['data']) ? $sale_address_province : ""; ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="sale_work_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="sale_work_zipcode"
                                            value="<?php echo isset($_GET['data']) ? $sale_address_zipcode : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_location_salework_two">
                                <label class="custom-control-label"
                                    for="save_location_salework_two">จัดเก็บข้อมูลผู้แทนจำหน่ายเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo2">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ดำเนินการตามพิธีศุลกากร
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_two_handler" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="handler_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="handler_name"
                                        value="<?php echo isset($_GET['data']) ? $handler_name : ""; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="handler_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="handler_lname"
                                        value="<?php echo isset($_GET['data']) ? $handler_lname : ""; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="handler_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="handler_idcard"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_idcard"] : ""; ?>">
                                </div>
                                <div class="form-group col-2">
                                    <label for="handler_age">อายุ:</label>
                                    <input type="text" class="form-control" id="handler_age"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_age"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="handler_position"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_position"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="handler_nationality"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_nationality"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_email">Email:</label>
                                    <input type="text" class="form-control" id="handler_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_email"] : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="handler_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="handler_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_phone"] : ""; ?>">
                                </div>
                            </div>
                            <!--  -->


                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="handler_work_name"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["handler_work_name"] : ""; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="handler_work_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="handler_work_houseno"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_house : ""; ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="handler_work_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="handler_work_villageno"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_house1 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="handler_work_alley"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_house2 : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="handler_work_road"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_house3 : ""; ?>">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="handler_work_subdistrict"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_district : ""; ?>">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="handler_work_district"
                                        value="<?php echo isset($_GET['data']) ? $handler_address_amphoe : ""; ?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="handler_work_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="handler_work_province"
                                            value="<?php echo isset($_GET['data']) ? $handler_address_province : ""; ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="handler_work_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="handler_work_zipcode"
                                            value="<?php echo isset($_GET['data']) ? $handler_address_zipcode : ""; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_location_handlerwork_two">
                                <label class="custom-control-label"
                                    for="save_location_handlerwork_two">จัดเก็บข้อมูลผู้ดำเนินการตามพิธีศุลกากรเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree2">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ผู้รับปลายทาง กรณีนำเข้าหรือส่งออกนอกราชอาณาจักรซึ่งวัสดุพลอยได้
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree2" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_two_destination" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="destination_work_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="destination_work_name"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["destination_work_name"] : ""; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_houseno">เลขที่:</label>
                                    <input type="text" class="form-control" id="destination_work_houseno"
                                        value="<?php echo isset($_GET['data']) ? $destination_house : ""; ?>">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="destination_work_road"
                                        value="<?php echo isset($_GET['data']) ? $destination_road : ""; ?>">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_city">เมือง/รัฐ:</label>
                                    <input type="text" class="form-control" id="destination_work_city"
                                        value="<?php echo isset($_GET['data']) ? $destination_city : ""; ?>">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_country">ประเทศ:</label>
                                    <input type="text" class="form-control" id="destination_work_country"
                                        value="<?php echo isset($_GET['data']) ? $destination_country : ""; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="destination_work_phone"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["destination_phone"] : ""; ?>">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_email">Email:</label>
                                    <input type="text" class="form-control" id="destination_work_email"
                                        value="<?php echo isset($_GET['data']) ? $arrayData["destination_email"] : ""; ?>">
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    id="save_location_destinationwork_two">
                                <label class="custom-control-label"
                                    for="save_location_destinationwork_two">จัดเก็บข้อมูลผู้รับปลายทางเป็นรายการโปรด</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="float-right">
                <button id="backstepthree2" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="nextstepthree2" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
    </div>

    <div id="stepfour2" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">รายละเอียดวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุพลอยได้ที่นำหรือสั่งเข้ามาในราชอาณาจักร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_importtwo_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_addrress_two">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="import_material_addrress_two"
                        value="<?php echo isset($_GET['data']) ? $import_address_house : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_district_two">ตำบล:</label>
                    <input type="text" class="form-control" id="import_material_district_two"
                        value="<?php echo isset($_GET['data']) ? $import_address_district : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="import_material_amphoe_two">อำเภอ:</label>
                    <input type="text" class="form-control" id="import_material_amphoe_two"
                        value="<?php echo isset($_GET['data']) ? $import_address_amphoe : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="import_material_province_two">จังหวัด:</label>
                    <input type="text" class="form-control" id="import_material_province_two"
                        value="<?php echo isset($_GET['data']) ? $import_address_province : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="import_material_zipcode_two">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="import_material_zipcode_two"
                        value="<?php echo isset($_GET['data']) ? $import_address_zipcode : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_phone_two">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_phone_two"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="import_material_email_two">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_email_two"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_location_import_two">
                <label class="custom-control-label"
                    for="save_location_import_two">จัดเก็บข้อมูลสถานที่เก็บรักษานำเข้าหรือส่งออกเป็นรายการโปรด</label>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุพลอยได้ขณะรอดำเนินการนำหรือส่งออกนอกราชอาณาจักร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <button id="fav_exporttwo_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_address_two">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="export_material_address_two"
                        value="<?php echo isset($_GET['data']) ? $export_address_house : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_district_two">ตำบล:</label>
                    <input type="text" class="form-control" id="export_material_district_two"
                        value="<?php echo isset($_GET['data']) ? $export_address_district : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="export_material_amphoe_two">อำเภอ:</label>
                    <input type="text" class="form-control" id="export_material_amphoe_two"
                        value="<?php echo isset($_GET['data']) ? $export_address_amphoe : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="export_material_province_two">จังหวัด:</label>
                    <input type="text" class="form-control" id="export_material_province_two"
                        value="<?php echo isset($_GET['data']) ? $export_address_province : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="export_material_zipcode_two">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="export_material_zipcode_two"
                        value="<?php echo isset($_GET['data']) ? $export_address_zipcode : ""; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_phone_two">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_phone_two"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                </div>
                <div class="form-group col">
                    <label for="export_material_email_two">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_email_two"
                        value="<?php echo isset($_GET['data']) ? $arrayData["no_check"] : ""; ?>">
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_location_export_two">
                <label class="custom-control-label"
                    for="save_location_export_two">จัดเก็บข้อมูลสถานที่เก็บรักษาขณะรอดำเนินการเป็นรายการโปรด</label>
            </div>
        </div>
        <br>
        <div class="container">
            <div style="float:right;">
                <button id="backstep2" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm2" type="button" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
            </div>
        </div>

        <div class="modal fade" id="pageConfirm2" tabindex="-1" role="dialog"
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
                            <p id="show_vehicle_material" style="color:Gray;"></p>
                            <p id="show_detail_of_material" style="color:Gray;"></p>
                            <p id="show_status_material" style="color:Gray;"></p>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดเจ้าหน้าที่:</h6>
                            <p id="show_safe_name" style="color:Gray;"></p>
                            <p id="show_handler_name" style="color:Gray;"></p>
                            <p id="show_destination_name" style="color:Gray;"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button id="confirm2" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- รายละเอียดที่อยู่ -->
<div class="modal fade" id="show_favtwo_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
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

<!-- ผู้แทนจำหน่ายให้นำเข้าหรือส่งออก -->
<div class="modal fade" id="show_two_sale" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้แทนจำหน่ายนำเข้าหรือส่งออก</h5>
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
                            <th scope="col">สถานที่ทำการ</th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests1 = array();

                            $sql1 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออก' AND fav_staff = 'select'";
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
                                        echo $request1['staff_work_name'];
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
                <button id="select_fav_saletwo" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- ผู้ดำเนินการตามพิธีศุลกากร -->
<div class="modal fade" id="show_two_handler" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้ดำเนินตามพิธีศุลกากร</h5>
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
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ดำเนินการตามพิธีศุลกากร' AND fav_staff = 'select'";
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
                                        echo $request2['staff_work_name'];
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
                <button id="select_fav_handlertwo" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- ผู้รับปลายทาง -->
<div class="modal fade" id="show_two_destination" data-backdrop="static" data-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดผู้รับปลายทาง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ชื่อสถานที่ทำการ</th>
                            <th scope="col">รายละเอียดที่อยู่</th>
                            <th scope="col">หมายเลขโทรศัพท์</th>
                        </tr>
                    </thead>
                    <?php
                            include('php/config/database.php');
                            $requests3 = array();

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_work_name, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_phone, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้รับปลายทางนำเข้าหรือส่งออก' AND fav_staff = 'select'";
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
                                        echo $request3['staff_work_name']; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        $destination_address = explode(",",$request3['destination_address'])[0];
                                        $destination_address1 = explode(",",$request3['destination_address'])[1];
                                        $destination_address2 = explode(",",$request3['destination_address'])[2];
                                        $destination_address3 = explode(",",$request3['destination_address'])[3];
                                        echo $destination_address." ถนน ".$destination_address1." เมือง ".$destination_address2." ประเทศ ".$destination_address3;
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request3['staff_phone'];
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
                <button id="select_fav_destinationtwo" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- import -->
<div class="modal fade" id="show_two_import" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่เก็บรักษาวัสดุนำเข้า</h5>
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
                            $requests4 = array();

                            $sql4 = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material, materiallocation.company_id, materiallocation.material_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE company_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'IMPORT MATERIAL'";
                            $query4 = mysqli_query($conn,$sql4) or die ("Query fail: " . mysqli_error($conn));

                            while($request4 = mysqli_fetch_assoc($query4)){
                                $requests4[] = $request4;
                            }
                                $i = 1;
                                if(is_array($requests4) || is_object($requests4)){
                                    foreach($requests4 as $request4){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav(<?php echo $request4['material_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        $import_address = explode(",",$request4['material_adress'])[0];
                                        $import_address1 = explode(",",$request4['material_adress'])[1];
                                        $import_address2 = explode(",",$request4['material_adress'])[2];
                                        $import_address3 = explode(",",$request4['material_adress'])[3];
                                        $import_address4 = explode(",",$request4['material_adress'])[4];
                                        echo $import_address." ต.".$import_address1." อ.".$import_address2." จ.".$import_address3." ".$import_address4; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request4['material_phone'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request4['material_email'];
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
                <button id="select_fav_import_two" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- export -->
<div class="modal fade" id="show_two_export" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่เก็บรักษาวัสดุส่งออก</h5>
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
                            $requests5 = array();

                            $sql5 = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material, materiallocation.company_id, materiallocation.material_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE company_id = ".$_SESSION["company_id"]." AND fav_location = 'select' AND type_location_material = 'EXPORT MATERIAL'";
                            $query5 = mysqli_query($conn,$sql5) or die ("Query fail: " . mysqli_error($conn));

                            while($request5 = mysqli_fetch_assoc($query5)){
                                $requests5[] = $request5;
                            }
                                $i = 1;
                                if(is_array($requests5) || is_object($requests5)){
                                    foreach($requests5 as $request5){
                        ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1"
                                        onclick="select_fav(<?php echo $request5['material_id']; ?>,this)">
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                            </th>
                            <td>
                                <?php 
                                        $export_address = explode(",",$request5['material_address'])[0];
                                        $export_address1 = explode(",",$request5['material_address'])[1];
                                        $export_address2 = explode(",",$request5['material_address'])[2];
                                        $export_address3 = explode(",",$request5['material_address'])[3];
                                        $export_address4 = explode(",",$request5['material_address'])[4];
                                        echo $export_address." ต.".$export_address1." อ.".$export_address2." จ.".$export_address3." ".$export_address4; 
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request5['material_phone'];
                                    ?>
                            </td>
                            <td>
                                <?php
                                        echo $request5['material_email'];
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
                <button id="select_fav_export_two" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- script -->
<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone2").click(function() {
        $("#stepone2").hide();
        $("#steptwo2").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo2").click(function() {
        $("#steptwo2").hide();
        $("#stepone2").show();
    });
    $("#nextsteptwo2").click(function() {
        $("#steptwo2").hide();
        $("#stepthree2").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstepthree2").click(function() {
        $("#stepthree2").hide();
        $("#steptwo2").show();
    });
    $("#nextstepthree2").click(function() {
        $("#stepthree2").hide();
        $("#stepfour2").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep2").click(function() {
        $("#stepfour2").hide();
        $("#stepthree2").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#selecthave").click(function() {
        $("#detailnothave").hide();
        $("#detailhave").show();
    });
    $("#selectnothave").click(function() {
        $("#detailhave").hide();
        $("#detailnothave").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#materialopen2").click(function() {
        $("#openbox2").hide();
        $("#closebox2").show();
    });
    $("#materialclose2").click(function() {
        $("#closebox2").hide();
        $("#openbox2").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $('#headingOne2').click(function() {
        $('#collapseTwo2').collapse('hide');
        $('#collapseThree2').collapse('hide');
        $('#collapseOne2').collapse('show');
    });
    $('#headingTwo2').click(function() {
        $('#collapseOne2').collapse('hide');
        $('#collapseThree2').collapse('hide');
        $('#collapseTwo2').collapse('show');
    });
    $('#headingThree2').click(function() {
        $('#collapseOne2').collapse('hide');
        $('#collapseTwo2').collapse('hide');
        $('#collapseThree2').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm2').click(function() {
        $('#pageConfirm2').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_two_location').click(function() {
        $('#show_favtwo_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_two_sale').click(function() {
        $('#show_two_sale').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_two_handler').click(function() {
        $('#show_two_handler').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_two_destination').click(function() {
        $('#show_two_destination').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_importtwo_location').click(function() {
        $('#show_two_import').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_exporttwo_location').click(function() {
        $('#show_two_export').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm2').click(function() {
        var materialtwo_address = document.getElementById("location_materialtwo_address").value;
        var materialtwo_district = document.getElementById("location_materialtwo_district").value;
        var materialtwo_amphoe = document.getElementById("location_materialtwo_amphoe").value;
        var materialtwo_province = document.getElementById("location_materialtwo_province").value;
        var materialtwo_zipcode = document.getElementById("location_materialtwo_zipcode").value;
        var material_two = document.getElementById("locationname_material_two").value;
        document.getElementById("show_location_name").innerHTML = materialtwo_address + " ต." +
            materialtwo_district + " อ." + materialtwo_amphoe + " จ." + materialtwo_province + " " +
            materialtwo_zipcode;

        var select_button_close = document.getElementById('material_selected');
        var type_request = document.getElementById("type_request").value;
        var materialtwo_benefit = document.getElementById("location_materialtwo_benefit").value;
        var materialtwo_vehicle = document.getElementById("location_materialtwo_vehicle").value;
        var no_reference_two = document.getElementById("no_reference_two").value;
        var operation_type_two = document.getElementById("operation_type_two").value;
        var element_two = document.getElementById("element_two").value;
        var product_model_two = document.getElementById("product_model_two").value;
        var material_status_two = document.getElementById("material_status_two").value;

        var select_button_open = document.getElementById('material_selected');
        var open_locationname_material_two = document.getElementById('open_locationname_material_two')
            .value;
        var open_no_reference_two = document.getElementById('open_no_reference_two').value;
        var open_operation_type_two = document.getElementById('open_operation_type_two').value;
        var open_element_two = document.getElementById('open_element_two').value;
        var open_product_model_two = document.getElementById('open_product_model_two').value;
        var open_material_status_two = document.getElementById('open_material_status_two').value;

        if (document.getElementById('material_close').checked) {
            select_button_close = document.getElementById('material_close').value;
            document.getElementById("show_worklocation_name").innerHTML =
                "ชื่อสถานที่ติดตั้งหรือใช้งาน: " + material_two;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " +
                select_button_close;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                type_request;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                materialtwo_benefit;
            document.getElementById("show_vehicle_material").innerHTML = "พาหนะสำหรับการขนส่ง: " +
                materialtwo_vehicle;
            document.getElementById("show_detail_of_material").innerHTML = "ทะเบียนอ้างอิง: " +
                no_reference_two + " รหัสการใช้งาน: " + operation_type_two + " ธาตุ-เลขมวล: " +
                element_two + " รุ่นหรือรหัสสินค้า: " + product_model_two;
            document.getElementById("show_status_material").innerHTML = "สภานภาพวัสดุ: " +
                material_status_two;
        } else if (document.getElementById('material_open').checked) {
            select_button_open = document.getElementById('material_open').value;
            document.getElementById("show_worklocation_name").innerHTML =
                "ชื่อสถานที่ติดตั้งหรือใช้งาน: " + open_locationname_material_two;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " +
                select_button_open;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                type_request;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                materialtwo_benefit;
            document.getElementById("show_vehicle_material").innerHTML = "พาหนะสำหรับการขนส่ง: " +
                materialtwo_vehicle;
            document.getElementById("show_detail_of_material").innerHTML = "ทะเบียนอ้างอิง: " +
                open_no_reference_two + " รหัสการใช้งาน: " + open_operation_type_two +
                " ธาตุ-เลขมวล: " + open_element_two + " รุ่นหรือรหัสสินค้า: " + open_product_model_two;
            document.getElementById("show_status_material").innerHTML = "สถานภาพวัสดุ: " +
                open_material_status_two;
        }

        var sale_name = document.getElementById("sale_name").value;
        var sale_lname = document.getElementById("sale_lname").value;
        var sale_work_name = document.getElementById("sale_work_name").value;
        var handler_name = document.getElementById("handler_name").value;
        var handler_lname = document.getElementById("handler_lname").value;
        var handler_work_name = document.getElementById("handler_work_name").value;
        var destination_work_name = document.getElementById("destination_work_name").value;
        document.getElementById("show_safe_name").innerHTML = "ผู้แทนจำหน่ายให้นำเข้าหรือส่งออก: " +
            sale_name + " " + sale_lname + " ชื่อสถานที่ทำการ: " + sale_work_name;
        document.getElementById("show_handler_name").innerHTML = "ผู้ดำเนินการตามพิธีศุลกากร: " +
            handler_name + " " + handler_lname + " ชื่อสถานที่ทำการ: " + handler_work_name;
        document.getElementById("show_destination_name").innerHTML = "ผู้รับปลายทาง: " +
            destination_work_name;
    });
});
</script>