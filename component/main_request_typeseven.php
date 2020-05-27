<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 1ค (สำหรับขออนุญาตฯ เครื่องกำเนิดรังสี)</h5>
    </div>
    <hr>

    <div id="stepone7" class="container">
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
                    <button id="fav_seven_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialseven_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_materialseven_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialseven_district">ตำบล:</label>
                    <input type="text" class="form-control" id="location_materialseven_district">
                </div>
                <div class="form-group col">
                    <label for="location_materialseven_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_materialseven_amphoe">
                </div>
                <div class="form-group col">
                    <label for="location_materialseven_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_materialseven_province">
                </div>
                <div class="form-group col">
                    <label for="location_materialseven_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_materialseven_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_materialseven_phone">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_materialseven_phone">
                </div>
                <div class="form-group col">
                    <label for="location_materialseven_email">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_materialseven_email">
                </div>
                <div class="form-group col">
                    <label for="location_materialseven_benefit">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id=location_materialseven_benefit>
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="ระบบรักษาความปลอดภัย">ระบบรักษาความปลอดภัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_locationseven_stepone">
                <label class="custom-control-label"
                    for="save_locationseven_stepone">จัดเก็บสถานที่ไว้เป็นรายการโปรด</label>
            </div>
        </div>

        <div class="float-right">
            <button id="nextstepone7" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="steptwo7" class="container" style="display:none;">
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
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="no_reference_seven">ทะเบียนอ้างอิง:</label>
                    <input type="text" class="form-control" id="no_reference_seven">
                </div>
                <div class="form-group col">
                    <label for="operation_type_seven">รหัสประเภทการใช้งาน:</label>
                    <select class="custom-select" id="operation_type_seven">
                        <option value="Security X-ray System">01 Security X-ray System</option>
                        <option value="Industrial X-ray">02 Industrial X-ray</option>
                        <option value="Research X-ray">03 Research X-ray</option>
                        <option value="Medical Diagnostic">04 Medical Diagnostic</option>
                        <option value="Radiotherapy X-ray">05 Radiotherapy X-ray</option>
                        <option value="LINAC">06 LINAC</option>
                        <option value="Cyclotron">07 Cyclotron</option>
                        <option value="Synchrotron">08 Synchrotron</option>
                        <option value="อื่นๆ">09 อื่นๆ...</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="manufacturer_material_seven">ผู้ผลิต:</label>
                    <input type="text" class="form-control" id="manufacturer_material_seven">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="material_number_seven">รุ่น:</label>
                    <input type="text" class="form-control" id="material_number_seven">
                </div>
                <div class="form-group col-md-6">
                    <label for="number_xray_seven">หมายเลขเครื่องกำเนิดรังสี:</label>
                    <input type="text" class="form-control" id="number_xray_seven">
                </div>
                <div class="form-group col">
                    <label for="work_style_seven">ลักษณะการใช้งาน:</label>
                    <select class="custom-select" id="work_style_seven">
                        <option value="Flex">01 Flex ลักษณะการใช้งานติดตั้งถาวร ไม่มีการเคลื่อนย้าย</option>
                        <option value="Mobile">02 Mobile ลักศณะการใช้งานแบบเคลื่อนย้ายได้</option>
                        <option value="Portable">03 Portable ลักษณะการใช้งานแบบหิ้วได้</option>
                        <option value="Stationary">04 Stationary ลักษณะการใช้งานแบบติดตั้งประจำที่</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="high_power_kgv">กำลัง/พลังงานสูงสุด (กิโลโวลต์):</label>
                    <input type="text" class="form-control" id="high_power_kgv">
                </div>
                <div class="form-group col-md">
                    <label for="high_power_mgv">กำลัง/พลังงานสูงสุด (เมกกะอิเลคตรอนโวล์):</label>
                    <input type="text" class="form-control" id="high_power_mgv">
                </div>
                <div class="form-group col-md">
                    <label for="high_power_mma">กำลัง/พลังงานสูงสุด (มิลลิแอมแปร์):</label>
                    <input type="text" class="form-control" id="high_power_mma">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="locationname_material_seven">ชื่อสถานที่เก็บ ติดตั้งหรือใช้งาน:</label>
                    <input type="text" class="form-control" id="locationname_material_seven">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="company_sale_seven">ชื่อบริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                    <input type="text" class="form-control" id="company_sale_seven">
                </div>
            </div>
        </div>

        <div class="float-right">
            <button id="backsteptwo7" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextsteptwo7" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepthree7" class="container" style="display:none;">
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
                    <div class="card-header" id="headingOne7">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                เจ้าหน้าที่ความปลอดภัยทางรังสี
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne7" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_seven_safe" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_name_seven">ชื่อ:</label>
                                    <input type="text" class="form-control" id="safe_name_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_lname_seven">นามสกุล:</label>
                                    <input type="text" class="form-control" id="safe_lname_seven">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="safe_idcard_seven">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="safe_idcard_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_position_seven">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="safe_position_seven">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="safe_age_seven">อายุ:</label>
                                    <input type="text" class="form-control" id="safe_age_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_nationality_seven">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="safe_nationality_seven">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="safe_phone_seven">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="safe_phone_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_email_seven">Email:</label>
                                    <input type="text" class="form-control" id="safe_email_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="safe_houseno_seven">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="safe_houseno_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="safe_villageno_seven">หมู่:</label>
                                    <input type="text" class="form-control" id="safe_villageno_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_alley_seven">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="safe_alley_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_road_seven">ถนน:</label>
                                    <input type="text" class="form-control" id="safe_road_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_subdistrict_seven">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="safe_subdistrict_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_district_seven">อำเภอ:</label>
                                    <input type="text" class="form-control" id="safe_district_seven">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="safe_province_seven">จังหวัด:</label>
                                        <input type="text" class="form-control" id="safe_province_seven">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="safe_zipcode_seven">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="safe_zipcode_seven">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_qualification_seven">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="safe_qualification_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_number_seven">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="safe_number_seven">
                                </div>
                            </div>
                            <!-- <br>
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
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_safeseven">
                                <label class="custom-control-label"
                                    for="save_safeseven">จัดเก็บข้อมูลเจ้าหน้าที่ความปลอดภัยทางรังสีเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addsafety7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo7">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ปฎิบัติงานรังสี
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_seven_make" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_name_seven">ชื่อ:</label>
                                    <input type="text" class="form-control" id="make_name_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_lname_seven">นามสกุล:</label>
                                    <input type="text" class="form-control" id="make_lname_seven">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="make_idcard_seven">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="make_idcard_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_position_seven">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="make_position_seven">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="make_age_seven">อายุ:</label>
                                    <input type="text" class="form-control" id="make_age_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_nationality_seven">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="make_nationality_seven">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="make_phone_seven">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="make_phone_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_email_seven">Email:</label>
                                    <input type="text" class="form-control" id="make_email_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="make_houseno_seven">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="make_houseno_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="make_villageno_seven">หมู่:</label>
                                    <input type="text" class="form-control" id="make_villageno_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_alley_seven">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="make_alley_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_road_seven">ถนน:</label>
                                    <input type="text" class="form-control" id="make_road_seven">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_subdistrict_seven">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="make_subdistrict_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_district_seven">อำเภอ:</label>
                                    <input type="text" class="form-control" id="make_district_seven">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="make_province_seven">จังหวัด:</label>
                                        <input type="text" class="form-control" id="make_province_seven">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="make_zipcode_seven">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="make_zipcode_seven">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_qualification_seven">คุณวุฒิ:</label>
                                    <input type="text" class="form-control" id="make_qualification_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_number_seven">หมายเลขทะเบียน:</label>
                                    <input type="text" class="form-control" id="make_number_seven">
                                </div>
                            </div>
                            <!-- <br>
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
                            </div> -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save_makeseven">
                                <label class="custom-control-label"
                                    for="save_makeseven">จัดเก็บข้อมูลผู้ปฏิบัติงานทางรังสีเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="addmake7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree7">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                แพทย์ผู้รับผิดชอบ
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree7" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <button id="fav_seven_doctor" type="button" class="btn btn-outline-info btn-sm"
                                        style="float:right;"><i class="fas fa-star">
                                            ใช้ข้อมูลจากรายการโปรด</i></button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_name_seven">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                    <input type="text" class="form-control" id="doctor_name_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_lname_seven">นามสกุล:</label>
                                    <input type="text" class="form-control" id="doctor_lname_seven">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="doctor_idcard_seven">เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" id="doctor_idcard_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_position_seven">ตำแหน่ง:</label>
                                    <input type="text" class="form-control" id="doctor_position_seven">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="doctor_age_seven">อายุ:</label>
                                    <input type="text" class="form-control" id="doctor_age_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_nationality_seven">สัญชาติ:</label>
                                    <input type="text" class="form-control" id="doctor_nationality_seven">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="doctor_phone_seven">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control" id="doctor_phone_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_email_seven">Email:</label>
                                    <input type="text" class="form-control" id="doctor_email_seven">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="doctor_houseno_seven">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_houseno_seven">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="doctor_villageno_seven">หมู่:</label>
                                    <input type="text" class="form-control" id="doctor_villageno_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_alley_seven">ตรอก / ซอย:</label>
                                    <input type="text" class="form-control" id="doctor_alley_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_road_seven">ถนน:</label>
                                    <input type="text" class="form-control" id="doctor_road_seven">
                                </div>

                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_subdistrict_seven">ตำบล / แขวง:</label>
                                    <input type="text" class="form-control" id="doctor_subdistrict_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_district_seven">อำเภอ:</label>
                                    <input type="text" class="form-control" id="doctor_district_seven">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="doctor_province_seven">จังหวัด:</label>
                                        <input type="text" class="form-control" id="doctor_province_seven">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="doctor_zipcode_seven">รหัสไปรษณีย์:</label>
                                        <input type="text" class="form-control" id="doctor_zipcode_seven">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_hospital_name_seven">ชื่อสถานที่ทำการ:</label>
                                    <input type="text" class="form-control" id="doctor_hospital_name_seven">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_artlicense_seven">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                    <input type="text" class="form-control" id="doctor_artlicense_seven">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_date_start_seven">ออกให้ ณ วันที่:</label>
                                    <input type="text" class="form-control" id="doctor_date_start_seven">
                                </div>
                            </div>
                            <!-- <br> -->
                            <!-- <div class="form-row text-danger">
                                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ</h6>
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
                                <input type="checkbox" class="custom-control-input" id="save_doctorseven">
                                <label class="custom-control-label"
                                    for="save_doctorseven">จัดเก็บข้อมูลแพทย์ผู้รับผิดชอบเป็นรายการโปรด</label>
                            </div>
                            <br>
                            <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                            <button id="adddoctor7" type="button" style='font-size:16px'
                                class="btn btn-outline-primary"><i class='fas fa-plus-circle'></i>
                                เพิ่ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div style="float:right;">
                <button id="backstep7" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm7" type="button" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pageConfirm7" tabindex="-1" role="dialog"
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
                            <p id="show_benefit_material" style="color:Gray;"></p>
                            <p id="show_detail_of_material" style="color:Gray;"></p>
                            <p id="show_code_type_material" style="color:Gray;"></p>
                            <p id="show_number_material" style="color:Gray;"></p>
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
                        <button id="confirm7" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- หน้าแสดงรายการโปรดที่บันทึกไว้ -->
    <div class="modal fade" id="show_favseven_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                                        echo $request['material_address']; 
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
    <div class="modal fade" id="show_favseven_safe" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            $requests1 = array();

                            $sql1 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี' AND fav_staff = 'select'";
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
                                        echo $request1['staff_address'];
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
                    <button id="select_fav_safeseven" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- รายการโปรดผู้ปฏิบัติงานทางรังสี -->
    <div class="modal fade" id="show_favseven_make" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี' AND fav_staff = 'select'";
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
                                        echo $request2['staff_address'];
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
                    <button id="select_fav_makeseven" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- รายการโปรดแพทย์ผู้รับผิดชอบ -->
    <div class="modal fade" id="show_favseven_doctor" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            $requests3 = array();

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id, companystaff.company_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE company_id = ".$_SESSION["company_id"]." AND type_authorities = 'แพทย์ผู้รับผิดชอบ' AND fav_staff = 'select'";
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
                                        echo $request3['staff_address'];
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
                    <button id="select_fav_doctorseven" type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone7").click(function() {
        $("#stepone7").hide();
        $("#steptwo7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo7").click(function() {
        $("#steptwo7").hide();
        $("#stepone7").show();
    });
    $("#nextsteptwo7").click(function() {
        $("#steptwo7").hide();
        $("#stepthree7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep7").click(function() {
        $("#stepthree7").hide();
        $("#steptwo7").show();
    });
});
</script>

<!-- <script>
$(document).ready(function() {
    $("#addsafety7").click(function() {
        $("#detailsafety7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addmake7").click(function() {
        $("#detailmake7").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#adddoctor7").click(function() {
        $("#detaildoctor7").show();
    });
});
</script> -->

<script>
$(document).ready(function() {
    $('#headingOne7').click(function() {
        $('#collapseTwo7').collapse('hide');
        $('#collapseThree7').collapse('hide');
        $('#collapseOne7').collapse('show');
    });
    $('#headingTwo7').click(function() {
        $('#collapseOne7').collapse('hide');
        $('#collapseThree7').collapse('hide');
        $('#collapseTwo7').collapse('show');
    });
    $('#headingThree7').click(function() {
        $('#collapseOne7').collapse('hide');
        $('#collapseTwo7').collapse('hide');
        $('#collapseThree7').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm7').click(function() {
        $('#pageConfirm7').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_seven_location').click(function() {
        $('#show_favseven_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_seven_safe').click(function() {
        $('#show_favseven_safe').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_seven_make').click(function() {
        $('#show_favseven_make').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_seven_doctor').click(function() {
        $('#show_favseven_doctor').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm7').click(function() {
        var materialseven_address = document.getElementById("location_materialseven_address").value;
        var materialseven_district = document.getElementById("location_materialseven_district")
            .value;
        var materialseven_amphoe = document.getElementById("location_materialseven_amphoe").value;
        var materialseven_province = document.getElementById("location_materialseven_province")
            .value;
        var materialseven_zipcode = document.getElementById("location_materialseven_zipcode").value;
        document.getElementById("show_location_name").innerHTML = materialseven_address + " ต." +
            materialseven_district + " อ." + materialseven_amphoe + " จ." + materialseven_province +
            " " + materialseven_zipcode;

        var material_seven = document.getElementById("locationname_material_seven").value;
        document.getElementById("show_worklocation_name").innerHTML =
            "ชื่อสถานที่ติดตั้งหรือใช้งาน: " +
            material_seven;

        var materialseven_benefit = document.getElementById("location_materialseven_benefit").value;
        var number_xray_seven = document.getElementById("number_xray_seven").value;
        var work_style_seven = document.getElementById("work_style_seven").value;
        var operation_type_seven = document.getElementById("operation_type_seven").value;
        document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
            materialseven_benefit;
        document.getElementById("show_detail_of_material").innerHTML = "ลักษณะการใช้งาน: " +
            work_style_seven;
        document.getElementById("show_code_type_material").innerHTML = "รหัสประเภทการใช้งาน: " +
            operation_type_seven;
        document.getElementById("show_number_material").innerHTML = "หมายเลขเครื่องกำเนิดรังสี: " +
            number_xray_seven;

        var safe_name_seven = document.getElementById("safe_name_seven").value;
        var safe_lname_seven = document.getElementById("safe_lname_seven").value;
        var make_name_seven = document.getElementById("make_name_seven").value;
        var make_lname_seven = document.getElementById("make_lname_seven").value;
        var doctor_name_seven = document.getElementById("doctor_name_seven").value;
        var doctor_lname_seven = document.getElementById("doctor_lname_seven").value;
        document.getElementById("show_safe_name").innerHTML = "เจ้าหน้าที่ความปลอดภัยทางรังสี: " +
            safe_name_seven + " " + safe_lname_seven;
        document.getElementById("show_make_name").innerHTML = "ผู้ปฏิบัติงานทางรังสี: " +
            make_name_seven + " " + make_lname_seven;
        document.getElementById("show_doctor_name").innerHTML = "แพทย์ผู้รับผิดชอบ: " +
            doctor_name_seven + " " + doctor_lname_seven;
    });
});
</script>