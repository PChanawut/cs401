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
                    <label for="location_materialone_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialone_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialone_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialone_district">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialone_amphoe">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialone_province">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialone_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="location_materialone_phone">หมายเลขโทรศัพท์:</label>
                    <input type="text" class="form-control" id="location_materialone_phone">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_email">Email:</label>
                    <input type="text" class="form-control" id="location_materialone_email">
                </div>
                <div class="form-group col">
                    <label for="location_materialone_benefit">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="location_materialone_benefit">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_materialone_request">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="location_materialone_request">
                        <option value="ผลิต">ผลิต</option>
                        <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                        <option value="ใช้">ใช้</option>
                    </select>
                </div>
            </div>
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
                    <input type="radio" id="material_close" value="close" name="material_selected"
                        class="custom-control-input">
                    <label class="custom-control-label" for="material_close">วัสดุชนิดปิดผนึก</label>
                </div>
            </div>
            <div id="materialclose1" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="material_open" value="open" name="material_selected"
                        class="custom-control-input">
                    <label class="custom-control-label" for="material_open">วัสดุชนิดไม่ปิดผนึก</label>
                </div>
            </div>
        </div>
        <br>
        <!-- <hr> -->
        <div id="closebox1" class="container" style="display:none;">
            <div class="row alert alert-light" role="alert" style="height:45px width:50px">
                <h5>ข้อมูลของวัสดุชนิดปิดผนึก</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="no_reference">ทะเบียนอ้างอิง:</label>
                    <input type="text" class="form-control" id="no_reference" placeholder="ทะเบียนอ้างอิง">
                </div>
                <div class="form-group col-2">
                    <label for="operation_type">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select" id="operation_type">
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
                    <input type="text" class="form-control" id="element" placeholder="ธาตุ-เลขมวล">
                </div>
                <div class="form-group col-md">
                    <label for="product_model">รุ่นหรือรหัสสินค้า:</label>
                    <input type="text" class="form-control" id="product_model" placeholder="ระบุรุ่นหรือรหัสสินค้า">
                </div>
                <div class="form-group col-2">
                    <label for="material_status">สถานภาพวัสดุ:</label>
                    <select class="custom-select" id="material_status">
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
                        placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                </div>
                <div class="form-group col-md">
                    <label for="material_number">หมายเลขวัสดุ:</label>
                    <input type="text" class="form-control" id="material_number" placeholder="ระบุหมายเลขหรือรหัสวัสดุ">
                </div>
                <div class="form-group col-md">
                    <label for="weight_material">กัมมันตภาพหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="weight_material"
                        placeholder="ระบุกัมมันตภาพหรือน้ำหนัก">
                </div>
                <div class="form-group col-1">
                    <label for="unit_weight">หน่วย:</label>
                    <select class="custom-select" id="unit_weight">
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
                        placeholder="ระบุชื่อผู้ผลิตภาชนะบรรจุ">
                </div>
                <div class="form-group col-md">
                    <label for="material_number_container">รุ่นหรือรหัสสินค้า:</label>
                    <input type="text" class="form-control" id="material_number_container"
                        placeholder="ระบุรุ่นหรือรหัสภาชนะบรรจุ/เครื่องมือ">
                </div>
                <div class="form-group col-md">
                    <label for="container_number">หมายเลข:</label>
                    <input type="text" class="form-control" id="container_number"
                        placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
                </div>
                <div class="form-group col-md">
                    <label for="weight_container">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="weight_container"
                        placeholder="ระบุความจุกัมมันตภาพหรือน้ำหนัก">
                </div>
                <div class="form-group col-1">
                    <label for="unit_container">หน่วย:</label>
                    <select class="custom-select" id="unit_container">
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
                    <input type="text" class="form-control" id="locationname_material"
                        placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                </div>
                <div class="form-group col-md">
                    <label for="company_sale">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="text" class="form-control" id="company_sale" placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                    <input type="text" class="form-control" id="open_no_reference" placeholder="ทะเบียนอ้างอิง">
                </div>
                <div class="form-group col-2">
                    <label for="open_operation_type">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select" id="open_operation_type">
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
                    <input type="text" class="form-control" id="open_element" placeholder="ธาตุ-เลขมวล">
                </div>
                <div class="form-group col-md">
                    <label for="open_product_model">รุ่นหรือรหัสสินค้า:</label>
                    <input type="text" class="form-control" id="open_product_model"
                        placeholder="ระบุรุ่นหรือรหัสสินค้า">
                </div>
                <div class="form-group col-2">
                    <label for="open_material_status">สถานภาพวัสดุ:</label>
                    <select class="custom-select" id="open_material_status">
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
                        placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                </div>
                <div class="form-group col-md">
                    <label for="open_weight_material">กัมมันตภาพสูงสุดหรือน้ำหนัก:</label>
                    <input type="text" class="form-control" id="open_weight_material"
                        placeholder="ระบุกัมมันตภาพสูงสุดหรือน้ำหนัก">
                </div>
                <div class="form-group col-1">
                    <label for="open_unit_weight">หน่วย:</label>
                    <select class="custom-select" id="open_unit_weight">
                        <option value="Bq">Bq</option>
                        <option value="Ci">Ci</option>
                        <option value="kg">kg</option>
                        <option value="lb">lb</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="open_physical_properties">สมบัติทางกายภาพ:</label>
                    <select class="custom-select" id="open_physical_properties">
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
                        placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                </div>
                <div class="form-group col-md">
                    <label for="open_company_sale">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="text" class="form-control" id="open_company_sale"
                        placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                                <div class="form-group col-md">
                                    <label for="safe_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="safe_name" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="safe_lname" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="safe_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="safe_idcard" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="safe_position" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="safe_age">อายุ:</label>
                                    <input type="text" class="form-control" id="safe_age" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="safe_nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="safe_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="safe_phone" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_email">Email:</label>
                                    <input type="text" class="form-control" id="safe_email" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="safe_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="safe_houseno" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="safe_villageno" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="safe_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_road">ถนน:</label>
                                    <input type="text" class="form-control" id="safe_road" placeholder="road">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="safe_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="safe_district" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="safe_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="safe_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="safe_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="safe_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_qualification">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="safe_qualification"
                                        placeholder="คุณวุฒิ">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_number">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="safe_number"
                                        placeholder="หมายเลขทะเบียน">
                                </div>
                            </div>
                            <br>
                            <div class="form-row text-danger">
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
                            </div>

                            <br>
                            <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**
                            </h6>
                            <button id="addsafety11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                            <div id="detailsafety11" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">คุณวุฒิ:</label>
                                        <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">หมายเลขทะเบียน:</label>
                                        <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row text-danger">
                                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ
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
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <div class="form-group col-md">
                                    <label for="make_name">ชื่อ:</label>
                                    <input type="text" class="form-control" id="make_name" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="make_lname" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="make_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="make_idcard" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="make_position" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="make_age">อายุ:</label>
                                    <input type="text" class="form-control" id="make_age" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="make_nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="make_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="make_phone" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_email">Email:</label>
                                    <input type="text" class="form-control" id="make_email" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="make_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="make_houseno" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="make_villageno" placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="make_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_road">ถนน:</label>
                                    <input type="text" class="form-control" id="make_road" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="make_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="make_district" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="make_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="make_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="make_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="make_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_qualification">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="make_qualification"
                                        placeholder="คุณวุฒิ">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_number">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="make_number"
                                        placeholder="หมายเลขทะเบียน">
                                </div>
                            </div>
                            <br>
                            <div class="form-row text-danger">
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
                            </div>
                            <br>
                            <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addmake11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>

                            <div id="detailmake11" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">คุณวุฒิ:</label>
                                        <input type="alley" class="form-control" placeholder="คุณวุฒิ">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">หมายเลขทะเบียน:</label>
                                        <input type="alley" class="form-control" placeholder="หมายเลขทะเบียน">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row text-danger">
                                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ
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
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <div class="form-group col-md">
                                    <label for="doctor_name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                    <input type="text" class="form-control" id="doctor_name" placeholder="name">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_lname">นามสกุล:</label>
                                    <input type="text" class="form-control" id="doctor_lname" placeholder="lname">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="doctor_idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="doctor_idcard" placeholder="idcard">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_position">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="doctor_position" placeholder="position">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="doctor_age">อายุ:</label>
                                    <input type="text" class="form-control" id="doctor_age" placeholder="age">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_nationality">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="doctor_nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="doctor_phone">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="doctor_phone" placeholder="phonenumber">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_email">Email:</label>
                                    <input type="text" class="form-control" id="doctor_email" placeholder="Email">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="doctor_houseno">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_houseno" placeholder="houseno">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_villageno">หมู่:</label>
                                    <input type="text" class="form-control" id="doctor_villageno"
                                        placeholder="villageno">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_alley">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="doctor_alley" placeholder="alley">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_road">ถนน:</label>
                                    <input type="text" class="form-control" id="doctor_road" placeholder="road">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_subdistrict">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="doctor_subdistrict"
                                        placeholder="subdistrict">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_district">อำเภอ:</label>
                                    <input type="text" class="form-control" id="doctor_district" placeholder="district">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="doctor_province">จังหวัด:</label>
                                        <input type="text" class="form-control" id="doctor_province"
                                            placeholder="จังหวัด">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="doctor_zipcode">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="doctor_zipcode"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_hospital_name">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="doctor_hospital_name"
                                        placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_artlicense">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_artlicense"
                                        placeholder="เลขที่ใบอนุญาตประกอบโรค">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_date_start">ออกให้ ณ วันที่:</label>
                                    <input type="text" class="form-control" id="doctor_date_start"
                                        placeholder="วว/ดด/ปป">
                                </div>
                            </div>
                            <br>
                            <div class="form-row text-danger">
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
                            </div>
                            <br>
                            <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="adddoctor11" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>

                            <div id="detaildoctor11" style="display:none;">
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                        <input type="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="lname">นามสกุล:</label>
                                        <input type="lname" class="form-control" placeholder="lname">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="idcard">เลขประจำตัวประชาชน:</label>
                                        <input type="idcard" class="form-control" placeholder="idcard">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="position">ตำแหน่ง:</label>
                                        <input type="position" class="form-control" placeholder="position">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="age">อายุ:</label>
                                        <input type="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nationality">สัญชาติ:</label>
                                        <input type="nationality" class="form-control" placeholder="nationality">
                                    </div>
                                    <div class="form-group col-md">
                                        <!-- Don't forget change type and id -->
                                        <label for="birthday">หมายเลขโทรศัพท์:</label>
                                        <input type="birthday" class="form-control" placeholder="phonenumber">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">Email:</label>
                                        <input type="alley" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="houseno">บ้านเลขที่:</label>
                                        <input type="houseno" class="form-control" placeholder="houseno">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="villageno">หมู่:</label>
                                        <input type="villageno" class="form-control" placeholder="villageno">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="alley">ตรอก / ซอย:</label>
                                        <input type="alley" class="form-control" placeholder="alley">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="road">ถนน:</label>
                                        <input type="road" class="form-control" placeholder="road">
                                    </div>

                                </div>
                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="subdistrict">ตำบล / แขวง:</label>
                                        <input type="subdistrict" class="form-control" placeholder="subdistrict">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="district">อำเภอ:</label>
                                        <input type="district" class="form-control" placeholder="district">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="alley">จังหวัด:</label>
                                            <input type="alley" class="form-control" placeholder="จังหวัด">
                                        </div>
                                        <div class="form-group col-md">
                                            <label for="road">รหัสไปรษณีย์:</label>
                                            <input type="road" class="form-control" placeholder="รหัสไปรษณีย์">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="name">ชื่อสถานที่ทำการ:</label>
                                        <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="alley">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                        <input type="alley" class="form-control" placeholder="เลขที่ใบอนุญาตประกอบโรค">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="birthday">ออกให้ ณ วันที่:</label>
                                        <input type="birthday" class="form-control" placeholder="วว/ดด/ปป">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row text-danger">
                                    <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ
                                        และเอกสารอื่นๆ
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
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>สถานที่ใช้และจัดเก็บวัสดุ:</h6>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดวัสดุที่ขออนุญาต:</h6>
                        </div>
                        <hr>
                        <div class="row-ml-3">
                            <h6>รายละเอียดเจ้าหน้าที่:</h6>
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
<script>
$(document).ready(function() {
    $("#addsafety11").click(function() {
        $("#detailsafety11").show();
    });
});
</script>

<script>
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
</script>

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