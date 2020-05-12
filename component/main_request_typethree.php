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
                <input type="radio" id="customRadioInline14" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline14">วัสดุนิวเคลียร์พิเศษ</label>
            </div>
        </div>
        <div id="materialclose3" class="col px-md-5">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline15" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label"
                    for="customRadioInline15">วัสดุต้นกำลังซึ่งพ้นสภาพที่เป็นตามธรรมชาติในทางเคมี</label>
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
                    <option value="P">P (รหัสวัสดุ 01) สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                    <option value="E">E (รหัสวัสดุ 02,03) สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233
                        และ/หรือ 235</option>
                    <option value="U">U (รหัสวัสดุ 05,06) สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                    <option value="N">N (รหัสวัสดุ 05,06) สำหรับยูเรเนียมธรรมชาติ</option>
                    <option value="T">T (รหัสวัสดุ 07,08) สำหรับธอเรียมหรือสารประกอบธอเรรียม</option>
                    <option value="D">D (รหัสวัสดุ 09) สำหรับยูเรเนียมเสื่อมสมรรถนะ</option>
                    <option value="รหัสวัสดุ 04">รหัสวัสดุ 04 แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน</option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="material_weight_three">น้ำหนักของวัสดุ:</label>
                <input type="text" class="form-control" id="material_weight_three">
            </div>
            <div class="form-group col-1">
                <label for="material_unit_three">หน่วย:</label>
                <select class="custom-select" id="material_unit_three">
                    <option value="การแพทย์">กิโลกรัม</option>
                    <option value="อุตสาหกรรม">กรัม</option>
                </select>
            </div>
            <div class="form-group col-3">
                <label for="material_special_weight_three">น้ำหนักของวัสดุนิวเคลียร์พิเศษ:</label>
                <input type="text" class="form-control" id="material_special_weight_three">
            </div>
            <div class="form-group col">
                <label for="material_code_ozotope_three">รหัสไอโซโทป:</label>
                <select class="custom-select" id="material_code_ozotope_three">
                    <option value="G">G วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235</option>
                    <option value="J">J วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235 และ 233</option>
                    <option value="K">K วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 233</option>
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
                            <div class="form-group col-md">
                                <label for="safe_name_three">ชื่อ:</label>
                                <input type="text" class="form-control" id="safe_name_three" placeholder="name">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="safe_lname_three" placeholder="lname">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="safe_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="safe_idcard_three" placeholder="idcard">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="safe_position_three" placeholder="position">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="safe_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="safe_age_three" placeholder="age">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="safe_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="safe_nationality_three"
                                    placeholder="nationality">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="safe_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="safe_phone_three" placeholder="phonenumber">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_email_three">Email:</label>
                                <input type="text" class="form-control" id="safe_email_three" placeholder="Email">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="safe_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="safe_houseno_three" placeholder="houseno">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="safe_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="safe_villageno_three"
                                    placeholder="villageno">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="safe_alley_three" placeholder="alley">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="safe_road_three" placeholder="road">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="safe_subdistrict_three"
                                    placeholder="subdistrict">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="safe_district_three" placeholder="district">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="safe_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="safe_province_three"
                                        placeholder="จังหวัด">
                                </div>
                                <div class="form-group col-md">
                                    <label for="safe_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="safe_zipcode_three"
                                        placeholder="รหัสไปรษณีย์">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="safe_qualification_three">คุณวุฒิ:</label>
                                <input type="text" class="form-control" id="safe_qualification_three"
                                    placeholder="คุณวุฒิ">
                            </div>
                            <div class="form-group col-md">
                                <label for="safe_number_three">หมายเลขทะเบียน:</label>
                                <input type="text" class="form-control" id="safe_number_three"
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
                        <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                        <button id="addsafety3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>
                        <div id="detailsafety3" style="display:none;">
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
                        </div>
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
                            <div class="form-group col-md">
                                <label for="make_name_three">ชื่อ:</label>
                                <input type="text" class="form-control" id="make_name_three" placeholder="name">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="make_lname_three" placeholder="lname">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="make_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="make_idcard_three" placeholder="idcard">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="make_position_three" placeholder="position">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="make_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="make_age_three" placeholder="age">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="make_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="make_nationality_three"
                                    placeholder="nationality">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="make_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="make_phone_three" placeholder="phonenumber">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_email_three">Email:</label>
                                <input type="text" class="form-control" id="make_email_three" placeholder="Email">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="make_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="make_houseno_three" placeholder="houseno">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="make_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="make_villageno_three"
                                    placeholder="villageno">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="make_alley_three" placeholder="alley">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="make_road_three" placeholder="road">
                            </div>

                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="make_subdistrict_three"
                                    placeholder="subdistrict">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="make_district_three" placeholder="district">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="make_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="make_province_three"
                                        placeholder="จังหวัด">
                                </div>
                                <div class="form-group col-md">
                                    <label for="make_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="make_zipcode_three"
                                        placeholder="รหัสไปรษณีย์">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="make_qualification_three">คุณวุฒิ:</label>
                                <input type="text" class="form-control" id="make_qualification_three"
                                    placeholder="คุณวุฒิ">
                            </div>
                            <div class="form-group col-md">
                                <label for="make_number_three">หมายเลขทะเบียน:</label>
                                <input type="text" class="form-control" id="make_number_three"
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
                        <button id="addmake3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>

                        <div id="detailmake3" style="display:none;">
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
                        </div>
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
                            <div class="form-group col-md">
                                <label for="doctor_name_three">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                                <input type="text" class="form-control" id="doctor_name_three" placeholder="name">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_lname_three">นามสกุล:</label>
                                <input type="text" class="form-control" id="doctor_lname_three" placeholder="lname">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="doctor_idcard_three">เลขประจำตัวประชาชน:</label>
                                <input type="text" class="form-control" id="doctor_idcard_three" placeholder="idcard">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_position_three">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="doctor_position_three"
                                    placeholder="position">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="doctor_age_three">อายุ:</label>
                                <input type="text" class="form-control" id="doctor_age_three" placeholder="age">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="doctor_nationality_three">สัญชาติ:</label>
                                <input type="text" class="form-control" id="doctor_nationality_three"
                                    placeholder="nationality">
                            </div>
                            <div class="form-group col-md">
                                <!-- Don't forget change type and id -->
                                <label for="doctor_phone_three">หมายเลขโทรศัพท์:</label>
                                <input type="text" class="form-control" id="doctor_phone_three"
                                    placeholder="phonenumber">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_email_three">Email:</label>
                                <input type="text" class="form-control" id="doctor_email_three" placeholder="Email">
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="doctor_houseno_three">บ้านเลขที่:</label>
                                <input type="text" class="form-control" id="doctor_houseno_three" placeholder="houseno">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="doctor_villageno_three">หมู่:</label>
                                <input type="text" class="form-control" id="doctor_villageno_three"
                                    placeholder="villageno">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_alley_three">ตรอก / ซอย:</label>
                                <input type="text" class="form-control" id="doctor_alley_three" placeholder="alley">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_road_three">ถนน:</label>
                                <input type="text" class="form-control" id="doctor_road_three" placeholder="road">
                            </div>

                        </div>
                        <!--  -->
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_subdistrict_three">ตำบล / แขวง:</label>
                                <input type="text" class="form-control" id="doctor_subdistrict_three"
                                    placeholder="subdistrict">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_district_three">อำเภอ:</label>
                                <input type="text" class="form-control" id="doctor_district_three"
                                    placeholder="district">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="doctor_province_three">จังหวัด:</label>
                                    <input type="text" class="form-control" id="doctor_province_three"
                                        placeholder="จังหวัด">
                                </div>
                                <div class="form-group col-md">
                                    <label for="doctor_zipcode_three">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" id="doctor_zipcode_three"
                                        placeholder="รหัสไปรษณีย์">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_hospital_name_three">ชื่อสถานที่ทำการ:</label>
                                <input type="text" class="form-control" id="doctor_hospital_name_three"
                                    placeholder="ชื่อสถานที่ทำการ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="doctor_artlicense_three">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                                <input type="text" class="form-control" id="doctor_artlicense_three"
                                    placeholder="เลขที่ใบอนุญาตประกอบโรค">
                            </div>
                            <div class="form-group col-md">
                                <label for="doctor_date_start_three">ออกให้ ณ วันที่:</label>
                                <input type="text" class="form-control" id="doctor_date_start_three"
                                    placeholder="วว/ดด/ปป">
                            </div>
                        </div>
                        <br>
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
                        </div>
                        <br>
                        <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
                        <button id="adddoctor3" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                                class='fas fa-plus-circle'></i>
                            เพิ่ม</button>

                        <div id="detaildoctor3" style="display:none;">
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
                        <button id="confirm3" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
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

<script>
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
</script>

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