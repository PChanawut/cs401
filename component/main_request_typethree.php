<div class="container mt-5">
    <div class="row alert alert-light" role="alert" style="height:45px">
        <h5>ใบขออนุญาตประเภท ปส 1ข (สำหรับขออนุญาตฯ วัสดุนิวเคลียร์พิเศษ)</h5>
    </div>
    <hr>

    <div id="stepone3" class="container">
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
                    <button id="fav_three_location" type="button" class="btn btn-outline-info btn-sm"
                        style="float:right;"><i class="fas fa-star">
                            ใช้ข้อมูลจากรายการโปรด</i></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_material_address_three">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="location_material_address_three">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="location_material_district_three">ตำบล:</label>
                    <input type="text" class="form-control" id="location_material_district_three">
                </div>
                <div class="form-group col">
                    <label for="location_material_amphoe_three">อำเภอ:</label>
                    <input type="text" class="form-control" id="location_material_amphoe_three">
                </div>
                <div class="form-group col">
                    <label for="location_material_province_three">จังหวัด:</label>
                    <input type="text" class="form-control" id="location_material_province_three">
                </div>
                <div class="form-group col">
                    <label for="location_material_zipcode_three">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="location_material_zipcode_three">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="location_material_phone_three">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_material_phone_three">
                </div>
                <div class="form-group col">
                    <label for="location_material_email_three">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="location_material_email_three">
                </div>
                <div class="form-group col">
                    <label for="location_material_benefit_three">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="location_material_benefit_three">
                        <option value="เชื้อเพลิงนิวเคลียร์">เชื้อเพลิงนิวเคลียร์</option>
                        <option value="เครื่องกำบังรังสีทางการแพทย์">เครื่องกำบังรังสีทางการแพทย์</option>
                        <option value="เครื่องกำบังรังสีทางอุตสาหกรรม">เครื่องกำบังรังสีทางอุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="พัฒนาวัสดุนิวเคลียร์">พัฒนาวัสดุนิวเคลียร์</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="location_material_request_three">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="location_material_request_three">
                        <option value="ผลิต">ผลิต</option>
                        <option value="มีไว้ในครอบครอง">มีไว้ในครอบครอง</option>
                        <option value="ใช้">ใช้</option>
                    </select>
                </div>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save_locationthree_stepone">
                <label class="custom-control-label"
                    for="save_locationthree_stepone">จัดเก็บสถานที่ไว้เป็นรายการโปรด</label>
            </div>
            <div class="float-right">
                <button id="nextstepone3" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
    </div>
</div>

<div id="steptwo3" class="container" style="display:none;">
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
    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
        </div>
    </div>

    <div class="row mx-auto">
        <div id="materialopen3" class="col px-md-5">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="material_special" value="วัสดุนิวเคลียร์พิเศษ" name="material_selected"
                    class="custom-control-input">
                <label class="custom-control-label" for="material_special">วัสดุนิวเคลียร์พิเศษ</label>
            </div>
        </div>
        <div id="materialclose3" class="col px-md-5">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="material_chemical" value="วัสดุต้นกำลังซึ่งพ้นสภาพที่เป็นตามธรรมชาติในทางเคมี"
                    name="material_selected" class="custom-control-input">
                <label class="custom-control-label"
                    for="material_chemical">วัสดุต้นกำลังซึ่งพ้นสภาพที่เป็นตามธรรมชาติในทางเคมี</label>
            </div>
        </div>
    </div>
    <br>

    <div id="closebox3" class="container" style="display:none;">
        <div class="form-row">
            <div class="form-group col-2">
                <label for="material_area_three">รหัสบริเวณตรวจนับ:</label>
                <input type="text" class="form-control" id="material_area_three">
            </div>
            <div class="form-group col">
                <label for="material_workname_three">ชื่อสถานปฏิบัติการ:</label>
                <input type="text" class="form-control" id="material_workname_three">
            </div>
            <div class="form-group col-5">
                <label for="material_type_three">วัสดุนิวเคลียร์พิเศษ ชนิด:</label>
                <select class="custom-select" id="material_specialtype_three">
                    <option value="พลูโตเนียมหรือสารประกอบของพลูโตเนียม">01 พลูโตเนียมหรือสารประกอบของพลูโตเนียม
                    </option>
                    <option value="ยูเรเนียม 233 หรือสารประกอบยูเรเนียม 233">02 ยูเรเนียม 233 หรือสารประกอบยูเรเนียม 233
                    </option>
                    <option value="ยูเรเนียม 235 หรือสารประกอบยูเรเนียม 235">03 ยูเรเนียม 235 หรือสารประกอบยูเรเนียม 235
                    </option>
                    <option value="วัสดุใดๆ ที่มีวัสดุตามข้อ 01,02 หรือ 03 ผสมกัน">04 วัสดุใดๆ ที่มีวัสดุตามข้อ 01,02
                        หรือ 03 ผสมกัน</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="material_nolocation_three">รหัสตำแหน่ง:</label>
                <input type="text" class="form-control" id="material_nolocation_three">
            </div>
            <div class="form-group col">
                <label for="material_nobatch_three">ชื่อ/หมายเลข Batch:</label>
                <input type="text" class="form-control" id="material_nobatch_three">
            </div>
            <div class="form-group col">
                <label for="material_number_three">จำนวนในรุ่น:</label>
                <input type="text" class="form-control" id="material_number_three">
            </div>
            <div class="form-group col-4">
                <label for="material_detail_three">รายละเอียดวัสดุ:</label>
                <select class="custom-select" id="material_detail_three">
                    <option value="Physical form">Physical form</option>
                    <option value="Chemical form">Chemical form</option>
                    <option value="Containment">Containment</option>
                    <option value="Irradiation status and quality">Irradiation status and quality</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label for="material_type_three">ประเภทวัสดุ:</label>
                <select class="custom-select" id="material_type_three">
                    <option value="P สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม">P (รหัสวัสดุ 01)
                        สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                    <option value="E สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233">E (รหัสวัสดุ 02,03)
                        สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233
                        และ/หรือ 235</option>
                    <option value="U สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม">U (รหัสวัสดุ 05,06)
                        สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                    <option value="N สำหรับยูเรเนียมธรรมชาติ">N (รหัสวัสดุ 05,06) สำหรับยูเรเนียมธรรมชาติ</option>
                    <option value="T สำหรับธอเรียมหรือสารประกอบธอเรียม">T (รหัสวัสดุ 07,08)
                        สำหรับธอเรียมหรือสารประกอบธอเรียม</option>
                    <option value="D สำหรับยูเรเนียมเสื่อมสมรรถนะ">D (รหัสวัสดุ 09) สำหรับยูเรเนียมเสื่อมสมรรถนะ
                    </option>
                    <option value="รหัสวัสดุ 04 แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน">รหัสวัสดุ 04
                        แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน</option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="material_weight_three">น้ำหนักของวัสดุ:</label>
                <input type="text" class="form-control" id="material_weight_three">
            </div>
            <div class="form-group col-1">
                <label for="material_unit_three">หน่วย:</label>
                <select class="custom-select" id="material_unit_three">
                    <option value="กิโลกรัม">กิโลกรัม</option>
                    <option value="กรัม">กรัม</option>
                </select>
            </div>
            <div class="form-group col-3">
                <label for="material_special_weight_three">น้ำหนักของวัสดุนิวเคลียร์พิเศษ:</label>
                <input type="text" class="form-control" id="material_special_weight_three">
            </div>
            <div class="form-group col">
                <label for="material_code_ozotope_three">รหัสไอโซโทป:</label>
                <select class="custom-select" id="material_code_ozotope_three">
                    <option value="G วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235">G
                        วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235</option>
                    <option value="J วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235 และ 233">J
                        วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235 และ 233</option>
                    <option value="K วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 233">K
                        วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 233</option>
                </select>
            </div>
        </div>
    </div>
    <div id="openbox3" class="container" style="display:none;">
        <div class="form-row">
            <div class="form-group col-2">
                <label for="material_code_work_three">รหัสหน่วยงาน:</label>
                <input type="text" class="form-control" id="material_code_work_three">
            </div>
            <div class="form-group col">
                <label for="material_workaddress_three">สถานที่ใช้งาน:</label>
                <input type="text" class="form-control" id="material_workaddress_three">
            </div>
            <div class="form-group col-3">
                <label for="material_benefit_three">การใช้ประโยชน์:</label>
                <input type="text" class="form-control" id="material_benefit_three">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="material_special_type_three">วัสดุนิวเคลียร์พิเศษ ชนิด:</label>
                <select class="custom-select" id="material_special_type_three">
                    <option value="ยูเรเนียม">05 ยูเรเนียม</option>
                    <option value="สารประกอบยูเรเนียม">06 สารประกอบยูเรเนียม</option>
                    <option value="ธอเรียม">07 ธอเรียม</option>
                    <option value="สารประกอบธอเรียม">08 สารประกอบธอเรียม</option>
                    <option value="ยูเรเนียมเสื่อมสมรรถนะ">09 ยูเรเนียมเสื่อมสมรรถนะ</option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="weight_kg_three">น้ำหนัก(กิโลกรัม):</label>
                <input type="text" class="form-control" id="weight_kg_three">
            </div>
            <div class="form-group col">
                <label for="nomaterial_three">รุ่น/หมายเลขวัสดุ:</label>
                <input type="text" class="form-control" id="nomaterial_three">
            </div>
            <div class="form-group col">
                <label for="workage_three">อายุการใช้งาน(ปี):</label>
                <input type="text" class="form-control" id="workage_three">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="addressname_produce_three">ที่อยู่บริษัทผู้ผลิต:</label>
                <input type="text" class="form-control" id="addressname_produce_three">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="addressname_sale_three">ที่อยู่บริษัทผู้แทนจำหน่าย:</label>
                <input type="text" class="form-control" id="addressname_sale_three">
            </div>
        </div>
    </div>
    <div class="float-right">
        <button id="backstepone3" type="button" class="btn btn-light">ย้อนกลับ</button>
        <button id="nextsteptwo3" type="button" class="btn btn-primary">ถัดไป</button>
    </div>
</div>

<div id="stepthree3" class="container" style="display:none;">
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
                <div class="card-header" id="headingOne3">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            เจ้าหน้าที่ความปลอดภัยทางรังสี
                        </button>
                    </h2>
                </div>

                <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col">
                                <button id="fav_three_safe" type="button" class="btn btn-outline-info btn-sm"
                                    style="float:right;"><i class="fas fa-star">
                                        ใช้ข้อมูลจากรายการโปรด</i></button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_name_three">ชื่อ:</label>
                                <input type="text" class="form-control" id="safe_name_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="safe_lname_three">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="safe_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="safe_idcard_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="safe_position_three">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="safe_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="safe_age_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="safe_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="safe_nationality_three">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="safe_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="safe_phone_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_email_three">Email:</label>
                                <input type="text" class="form-control" id="safe_email_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="safe_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="safe_houseno_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="safe_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="safe_villageno_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="safe_alley_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="safe_road_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="safe_subdistrict_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="safe_district_three">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="safe_province_three">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="safe_zipcode_three">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_qualification_three">คุณวุฒิ:</label>
                                <input type="text" class="form-control" id="safe_qualification_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_number_three">หมายเลขทะเบียน:</label>
                                <input type="text" class="form-control" id="safe_number_three">
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
                            <input type="checkbox" class="custom-control-input" id="save_safethree">
                            <label class="custom-control-label"
                                for="save_safethree">จัดเก็บข้อมูลเจ้าหน้าที่ความปลอดภัยทางรังสีเป็นรายการโปรด</label>
                        </div>
                        <br>
                        <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                        <button id="addsafety3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo3">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ผู้ปฎิบัติงานรังสี
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col">
                                <button id="fav_three_make" type="button" class="btn btn-outline-info btn-sm"
                                    style="float:right;"><i class="fas fa-star">
                                        ใช้ข้อมูลจากรายการโปรด</i></button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_name_three">ชื่อ:</label>
                                <input type="text" class="form-control" id="make_name_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="make_lname_three">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="make_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="make_idcard_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="make_position_three">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="make_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="make_age_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="make_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="make_nationality_three">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="make_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="make_phone_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_email_three">Email:</label>
                                <input type="text" class="form-control" id="make_email_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="make_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="make_houseno_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="make_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="make_villageno_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="make_alley_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="make_road_three">
                            </div>

                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="make_subdistrict_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="make_district_three">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="make_province_three">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="make_zipcode_three">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_qualification_three">คุณวุฒิ:</label>
                                <input type="text" class="form-control" id="make_qualification_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_number_three">หมายเลขทะเบียน:</label>
                                <input type="text" class="form-control" id="make_number_three">
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
                            <input type="checkbox" class="custom-control-input" id="save_makethree">
                            <label class="custom-control-label"
                                for="save_makethree">จัดเก็บข้อมูลผู้ปฏิบัติงานทางรังสีเป็นรายการโปรด</label>
                        </div>
                        <br>
                        <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                        <button id="addmake3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree3">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            แพทย์ผู้รับผิดชอบ
                        </button>
                    </h2>
                </div>
                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col">
                                <button id="fav_three_doctor" type="button" class="btn btn-outline-info btn-sm"
                                    style="float:right;"><i class="fas fa-star">
                                        ใช้ข้อมูลจากรายการโปรด</i></button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_name_three">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                <input type="text" class="form-control" id="doctor_name_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="doctor_lname_three">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="doctor_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="doctor_idcard_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="doctor_position_three">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="doctor_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="doctor_age_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="doctor_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="doctor_nationality_three">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="doctor_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="doctor_phone_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_email_three">Email:</label>
                                <input type="text" class="form-control" id="doctor_email_three">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="doctor_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="doctor_houseno_three">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="doctor_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="doctor_villageno_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="doctor_alley_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="doctor_road_three">
                            </div>

                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="doctor_subdistrict_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="doctor_district_three">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="doctor_province_three">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="doctor_zipcode_three">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_hospital_name_three">ชื่อสถานที่ทำการ:</label>
                                <input type="text" class="form-control" id="doctor_hospital_name_three">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_artlicense_three">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                <input type="text" class="form-control" id="doctor_artlicense_three">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_date_start_three">ออกให้ ณ วันที่:</label>
                                <input type="text" class="form-control" id="doctor_date_start_three">
                            </div>
                        </div>
                        <!-- <br>
                        <div class="form-row text-danger">
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
                            <input type="checkbox" class="custom-control-input" id="save_doctorthree">
                            <label class="custom-control-label"
                                for="save_doctorthree">จัดเก็บข้อมูลแพทย์ผู้รับผิดชอบเป็นรายการโปรด</label>
                        </div>
                        <br>
                        <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                        <button id="adddoctor3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div style="float:right;">
            <button id="backsteptwo3" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="confirm3" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                ยื่นคำขอใบอนุญาต
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pageConfirm3" tabindex="-1" role="dialog"
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
                            <p id="show_weight_material" style="color:Gray;"></p>
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
                        <button id="confirm3" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<!-- หน้าแสดงรายการโปรดที่บันทึกไว้ -->
<div class="modal fade" id="show_favthree_location" data-backdrop="static" data-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">รายการโปรดสถานที่จัดเก็บ</h5>
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

                            $sql = "SELECT license.license_id, license.place_id, materiallocation.material_address, materiallocation.material_phone, materiallocation.material_email, materiallocation.fav_location, materiallocation.type_location_material, materiallocation.material_id
                                    FROM license INNER JOIN materiallocation ON license.license_id = materiallocation.license_id WHERE place_id = ".$_SESSION["company_id"]." AND fav_location = 'select'";
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
<div class="modal fade" id="show_favthree_safe" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
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
                            $requests = array();

                            $sql1 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'เจ้าหน้าที่ความปลอดภัยทางรังสี' AND fav_staff = 'select'";
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
                <button id="select_fav_safethree" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดผู้ปฏิบัติงานทางรังสี -->
<div class="modal fade" id="show_favthree_make" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
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
                            $requests2 = array();

                            $sql2 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'ผู้ปฏิบัติงานทางรังสี' AND fav_staff = 'select'";
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
                <button id="select_fav_makethree" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- รายการโปรดแพทย์ผู้รับผิดชอบ -->
<div class="modal fade" id="show_favthree_doctor" data-backdrop="static" data-keyboard="false" tabindex="-1"
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

                            $sql3 = "SELECT license.license_id, license.place_id, companystaff.staff_name, companystaff.staff_position, companystaff.staff_address, companystaff.fav_staff, companystaff.type_authorities, companystaff.staff_id
                                    FROM license INNER JOIN companystaff ON license.license_id = companystaff.license_id WHERE place_id = ".$_SESSION["company_id"]." AND type_authorities = 'แพทย์ผู้รับผิดชอบ' AND fav_staff = 'select'";
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
                <button id="select_fav_doctorthree" type="button" class="btn btn-primary">เลือก</button>
            </div>
        </div>
    </div>
</div>

<!-- script -->
<script>
$(document).ready(function() {
    $("#nextstepone3").click(function() {
        $("#stepone3").hide();
        $("#steptwo3").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstepone3").click(function() {
        $("#steptwo3").hide();
        $("#stepone3").show();
    });
    $("#nextsteptwo3").click(function() {
        $("#steptwo3").hide();
        $("#stepthree3").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo3").click(function() {
        $("#stepthree3").hide();
        $("#steptwo3").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#materialopen3").click(function() {
        $("#openbox3").hide();
        $("#closebox3").show();
    });
    $("#materialclose3").click(function() {
        $("#closebox3").hide();
        $("#openbox3").show();
    });
});
</script>

<!-- <script>
$(document).ready(function() {
    $("#addsafety3").click(function() {
        $("#detailsafety3").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addmake3").click(function() {
        $("#detailmake3").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#adddoctor3").click(function() {
        $("#detaildoctor3").show();
    });
});
</script> -->

<script>
$(document).ready(function() {
    $('#headingOne3').click(function() {
        $('#collapseTwo3').collapse('hide');
        $('#collapseThree3').collapse('hide');
        $('#collapseOne3').collapse('show');
    });
    $('#headingTwo3').click(function() {
        $('#collapseOne3').collapse('hide');
        $('#collapseThree3').collapse('hide');
        $('#collapseTwo3').collapse('show');
    });
    $('#headingThree3').click(function() {
        $('#collapseOne3').collapse('hide');
        $('#collapseTwo3').collapse('hide');
        $('#collapseThree3').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm3').click(function() {
        $('#pageConfirm3').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_three_location').click(function() {
        $('#show_favthree_location').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_three_safe').click(function() {
        $('#show_favthree_safe').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_three_make').click(function() {
        $('#show_favthree_make').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#fav_three_doctor').click(function() {
        $('#show_favthree_doctor').modal('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm3').click(function() {
        var material_address_three = document.getElementById("location_material_address_three").value;
        var material_district_three = document.getElementById("location_material_district_three").value;
        var material_amphoe_three = document.getElementById("location_material_amphoe_three").value;
        var material_province_three = document.getElementById("location_material_province_three").value;
        var material_zipcode_three = document.getElementById("location_material_zipcode_three").value;
        var material_workname_three = document.getElementById("material_workname_three").value;
        document.getElementById("show_location_name").innerHTML = material_address_three + " ต." +
            material_district_three + " อ." + material_amphoe_three + " จ." + material_province_three +
            " " + material_zipcode_three;

        var select_special = document.getElementById('material_selected');
        var material_request_three = document.getElementById("location_material_request_three").value;
        var material_benefit_three = document.getElementById("location_material_benefit_three").value;
        var material_specialtype_three = document.getElementById("material_specialtype_three").value;
        var material_detail_three = document.getElementById("material_detail_three").value;
        var material_type_three = document.getElementById("material_type_three").value;
        var material_weight_three = document.getElementById("material_weight_three").value;
        var material_unit_three = document.getElementById("material_unit_three").value;

        var select_chemical = document.getElementById('material_selected');
        var material_workaddress_three = document.getElementById("material_workaddress_three").value;
        var material_special_type_three = document.getElementById("material_special_type_three").value;
        var weight_kg_three = document.getElementById("weight_kg_three").value;

        if (document.getElementById('material_special').checked) {
            select_special = document.getElementById('material_special').value;
            document.getElementById("show_worklocation_name").innerHTML = "ชื่อสถานปฏิบัติการ: " +
                material_workname_three;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                material_request_three;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                material_benefit_three;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " + select_special;
            document.getElementById("show_detail_of_material").innerHTML =
                "วัสดุนิวเคลียร์พิเศษชนิด: " +
                material_specialtype_three + " รายละเอียดวัสดุ: " + material_detail_three;
            document.getElementById("show_status_material").innerHTML = "ประเภทวัสดุ: " +
                material_type_three;
            document.getElementById("show_weight_material").innerHTML = "น้ำหนักของวัสดุ: " +
                material_weight_three + " " + material_unit_three;
        } else if (document.getElementById('material_chemical').checked) {
            select_chemical = document.getElementById('material_chemical').value;
            document.getElementById("show_worklocation_name").innerHTML = "ชื่อสถานปฏิบัติการ: " +
                material_workaddress_three;
            document.getElementById("show_detail_material").innerHTML = "ขออนุญาตเพื่อ: " +
                material_request_three;
            document.getElementById("show_benefit_material").innerHTML = "ประเภทการใช้ประโยชน์: " +
                material_benefit_three;
            document.getElementById("show_type_material").innerHTML = "วัสดุชนิด: " + select_chemical;
            document.getElementById("show_detail_of_material").innerHTML =
                "วัสดุนิวเคลียร์พิเศษชนิด: " + material_special_type_three + " รายละเอียดวัสดุ: " +
                material_detail_three;
            document.getElementById("show_weight_material").innerHTML = "น้ำหนักของวัสดุ: " +
                weight_kg_three + " kg";
        }

        var safe_name_three = document.getElementById("safe_name_three").value;
        var safe_lname_three = document.getElementById("safe_lname_three").value;
        var make_name_three = document.getElementById("make_name_three").value;
        var make_lname_three = document.getElementById("make_lname_three").value;
        var doctor_name_three = document.getElementById("doctor_name_three").value;
        var doctor_lname_three = document.getElementById("doctor_lname_three").value;
        document.getElementById("show_safe_name").innerHTML = "เจ้าหน้าที่ความปลอดภัยทางรังสี: " +
            safe_name_three + " " + safe_lname_three;
        document.getElementById("show_make_name").innerHTML = "ผู้ปฏิบัติงานทางรังสี: " +
            make_name_three + " " + make_lname_three;
        document.getElementById("show_doctor_name").innerHTML = "แพทย์ผู้้รับผิดชอบ: " +
            doctor_name_three + " " + doctor_lname_three;
    });
});
</script>