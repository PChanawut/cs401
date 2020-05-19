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
                <div class="form-group col-4">
                    <label for="type_request">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="type_request">
                        <option value="นำเข้า">นำหรือสั่งเข้ามาในราชอาณาจักร</option>
                        <option value="ส่งออก">นำหรือส่งออกนอกราชอาณาจักร</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialtwo_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialtwo_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialtwo_district">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialtwo_amphoe">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialtwo_province">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialtwo_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialtwo_phone">หมายเลขโทรศัพท์:</label>
                    <input type="text" class="form-control" id="location_materialtwo_phone">
                </div>
                <div class="form-group col">
                    <label for="location_materialtwo_email">Email:</label>
                    <input type="text" class="form-control" id="location_materialtwo_email">
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
                                    id="location_materialtwo_licenseno">
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
                <div class="row alert alert-light" role="alert" style="height:45px width:50px">
                    <h5>ข้อมูลของวัสดุชนิดปิดผนึก</h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="no_reference_two">ทะเบียนอ้างอิง:</label>
                        <input type="text" class="form-control" id="no_reference_two" placeholder="ทะเบียนอ้างอิง">
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
                        <input type="text" class="form-control" id="element_two" placeholder="ธาตุ-เลขมวล">
                    </div>
                    <div class="form-group col-md">
                        <label for="product_model_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="product_model_two"
                            placeholder="ระบุรุ่นหรือรหัสสินค้า">
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
                            placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                    </div>
                    <div class="form-group col-md">
                        <label for="material_number_two">หมายเลขวัสดุ:</label>
                        <input type="text" class="form-control" id="material_number_two"
                            placeholder="ระบุหมายเลขหรือรหัสวัสดุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="weight_material_two">กัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="text" class="form-control" id="weight_material_two"
                            placeholder="ระบุกัมมันตภาพหรือน้ำหนัก">
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
                            placeholder="ระบุชื่อผู้ผลิตภาชนะบรรจุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="material_number_container_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="material_number_container_two"
                            placeholder="ระบุรุ่นหรือรหัสภาชนะบรรจุ/เครื่องมือ">
                    </div>
                    <div class="form-group col-md">
                        <label for="container_number_two">หมายเลข:</label>
                        <input type="text" class="form-control" id="container_number_two"
                            placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="weight_container_two">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="text" class="form-control" id="weight_container_two"
                            placeholder="ระบุความจุกัมมันตภาพหรือน้ำหนัก">
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
                            placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                    </div>
                    <div class="form-group col-md">
                        <label for="company_sale_two">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="text" class="form-control" id="company_sale_two"
                            placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                        <input type="text" class="form-control" id="open_no_reference_two" placeholder="ทะเบียนอ้างอิง">
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
                        <input type="text" class="form-control" id="open_element_two" placeholder="ธาตุ-เลขมวล">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_product_model_two">รุ่นหรือรหัสสินค้า:</label>
                        <input type="text" class="form-control" id="open_product_model_two"
                            placeholder="ระบุรุ่นหรือรหัสสินค้า">
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
                            placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_number_two">กัมมันตภาพสูงสุดหรือรังสี:</label>
                        <input type="text" class="form-control" id="open_weight_material"
                            placeholder="ระบุกัมมันตภาพสูงสุดหรือรังสี">
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
                            placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                    </div>
                    <div class="form-group col-md">
                        <label for="open_company_sale_two">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="text" class="form-control" id="open_company_sale_two"
                            placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                        <input type="text" class="form-control" id="style_two" placeholder="ระบุลักษณะและขนาดของหีบห่อ">
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
                        <input type="text" class="form-control" id="unnumber_two">
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
                                <div class="form-group col-md-3">
                                    <label for="sale_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="sale_name" placeholder="name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sale_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="sale_lname" placeholder="lname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sale_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="sale_idcard" placeholder="idcard">
                                </div>
                                <div class="form-group col-2">
                                    <label for="sale_age">อายุ:</label>
                                    <input type="text" class="form-control" id="sale_age" placeholder="age">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="sale_position" placeholder="position">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="sale_nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_email">Email:</label>
                                    <input type="text" class="form-control" id="sale_email" placeholder="Email">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="sale_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="sale_phone" placeholder="phonenumber">
                                </div>
                            </div>
                            <!--  -->
                            <!-- <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="sale_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="sale_houseno" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sale_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="sale_villageno" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="sale_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_road">ถนน:</label>
                                    <input type="text" class="form-control" id="sale_road" placeholder="road">
                                </div>

                            </div> -->
                            <!--  -->
                            <!-- <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="sale_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="sale_district" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="sale_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="sale_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="sale_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="sale_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div> -->

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_houseno">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="sale_work_name"
                                        placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="sale_work_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="sale_work_houseno"
                                        placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="sale_work_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="sale_work_villageno"
                                        placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="sale_work_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="sale_work_road" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sale_work_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="sale_work_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="sale_work_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="sale_work_district"
                                        placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="sale_work_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="sale_work_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="sale_work_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="sale_work_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
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
                                <div class="form-group col-md-3">
                                    <label for="handler_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="handler_name" placeholder="name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="handler_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="handler_lname" placeholder="lname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="handler_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="handler_idcard" placeholder="idcard">
                                </div>
                                <div class="form-group col-2">
                                    <label for="handler_age">อายุ:</label>
                                    <input type="text" class="form-control" id="handler_age" placeholder="age">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="handler_position"
                                        placeholder="position">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="handler_nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_email">Email:</label>
                                    <input type="text" class="form-control" id="handler_email" placeholder="Email">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="handler_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="handler_phone"
                                        placeholder="phonenumber">
                                </div>
                            </div>
                            <!--  -->
                            <!-- <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="handler_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="handler_houseno" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="handler_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="handler_villageno"
                                        placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="handler_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_road">ถนน:</label>
                                    <input type="text" class="form-control" id="handler_road" placeholder="road">
                                </div>

                            </div> -->
                            <!--  -->
                            <!-- <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="handler_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="handler_district"
                                        placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="handler_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="handler_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="handler_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="handler_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div> -->

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="handler_work_name"
                                        placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="handler_work_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="handler_work_houseno"
                                        placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="handler_work_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="handler_work_villageno"
                                        placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="handler_work_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="handler_work_road" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="handler_work_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="handler_work_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="handler_work_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="handler_work_district"
                                        placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="handler_work_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="handler_work_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="handler_work_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="handler_work_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
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
                                <div class="form-group col-md">
                                    <label for="destination_work_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="destination_work_name"
                                        placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_houseno">เลขที่:</label>
                                    <input type="text" class="form-control" id="destination_work_houseno">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_road">ถนน:</label>
                                    <input type="text" class="form-control" id="destination_work_road">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_city">เมือง/รัฐ:</label>
                                    <input type="text" class="form-control" id="destination_work_city">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_country">ประเทศ:</label>
                                    <input type="text" class="form-control" id="destination_work_country">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="destination_work_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="destination_work_phone">
                                </div>
                                <div class="form-group col">
                                    <label for="destination_work_email">Email:</label>
                                    <input type="text" class="form-control" id="destination_work_email">
                                </div>
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
                    <label for="import_material_addrress_two">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="import_material_addrress_two">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_district_two">ตำบล:</label>
                    <input type="text" class="form-control" id="import_material_district_two">
                </div>
                <div class="form-group col">
                    <label for="import_material_amphoe_two">อำเภอ:</label>
                    <input type="text" class="form-control" id="import_material_amphoe_two">
                </div>
                <div class="form-group col">
                    <label for="import_material_province_two">จังหวัด:</label>
                    <input type="text" class="form-control" id="import_material_province_two">
                </div>
                <div class="form-group col">
                    <label for="import_material_zipcode_two">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="import_material_zipcode_two">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="import_material_phone_two">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_phone_two">
                </div>
                <div class="form-group col">
                    <label for="import_material_email_two">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="import_material_email_two">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่เก็บรักษาวัสดุพลอยได้ขณะรอดำเนินการนำหรือส่งออกนอกราชอาณาจักร</h5>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_address_two">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="export_material_address_two">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_district_two">ตำบล:</label>
                    <input type="text" class="form-control" id="export_material_district_two">
                </div>
                <div class="form-group col">
                    <label for="export_material_amphoe_two">อำเภอ:</label>
                    <input type="text" class="form-control" id="export_material_amphoe_two">
                </div>
                <div class="form-group col">
                    <label for="export_material_province_two">จังหวัด:</label>
                    <input type="text" class="form-control" id="export_material_province_two">
                </div>
                <div class="form-group col">
                    <label for="export_material_zipcode_two">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="export_material_zipcode_two">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="export_material_phone_two">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_phone_two">
                </div>
                <div class="form-group col">
                    <label for="export_material_email_two">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="export_material_email_two">
                </div>
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