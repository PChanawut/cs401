<div class="container mt-5">
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
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="person_storage_zipcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="person_nametitle">
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
</div>

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
                <input type="radio" id="customRadioInline8" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline8">วัสดุชนิดปิดผนึก</label>
            </div>
        </div>
        <div id="materialclose1" class="col px-md-5">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline9" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline9">วัสดุชนิดไม่ปิดผนึก</label>
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
                <label for="name">ทะเบียนอ้างอิง:</label>
                <input type="name" class="form-control" id="name" placeholder="ทะเบียนอ้างอิง">
            </div>
            <div class="form-group col-2">
                <label for="person_nametitle">รหัสประเภทการใช้งาน:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">01 Sr-90 Eye Applicator</option>
                    <option value="นาง">02 Teletherapy</option>
                    <option value="นางสาว">03 Manual Brachy Therapy</option>
                    <option value="นาย">04 Remote Brachy Therapy</option>
                    <option value="นาง">05 Gamma Irradiator</option>
                    <option value="นางสาว">06 Research</option>
                    <option value="นาย">07 Level Gauges</option>
                    <option value="นาง">08 Thickness Gauges</option>
                    <option value="นางสาว">09 Moisture Gauges</option>
                    <option value="นาย">10 Density Gauges</option>
                    <option value="นาง">11 Coal Logging</option>
                    <option value="นางสาว">12 Oil Well Logging</option>
                    <option value="นาย">13 Gamma Radiography</option>
                    <option value="นาง">18 Container/Shielding</option>
                    <option value="นางสาว">20 Lightning Preventor</option>
                    <option value="นาย">23 Standard/Calibration Source</option>
                    <option value="นาง">24 Electrostatic Eliminator</option>
                    <option value="นางสาว">25 Element Analytical</option>
                    <option value="นาย">26 Smoke Detector</option>
                    <option value="นาง">27 อื่นๆ..</option>
                </select>
            </div>
            <div class="form-group col-md">
                <label for="name">ธาตุ-เลขมวล:</label>
                <input type="name" class="form-control" id="name" placeholder="ธาตุ-เลขมวล">
            </div>
            <div class="form-group col-md">
                <label for="name">รุ่นหรือรหัสสินค้า:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุรุ่นหรือรหัสสินค้า">
            </div>
            <div class="form-group col-2">
                <label for="person_nametitle">สถานภาพวัสดุ:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">1.ใช้งานปกติ</option>
                    <option value="นาง">2.เก็บสำรอง</option>
                    <option value="นางสาว">3.ยกเลิกการใช้</option>
                    <option value="นางสาว">4.รอจัดการยาก</option>
                    <option value="นางสาว">5.กำลังสั่งนำเข้า</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ผู้ผลิต:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
            </div>
            <div class="form-group col-md">
                <label for="name">หมายเลขวัสดุ:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุหมายเลขหรือรหัสวัสดุ">
            </div>
            <div class="form-group col-md">
                <label for="name">กัมมันตภาพหรือน้ำหนัก:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุกัมมันตภาพหรือน้ำหนัก">
            </div>
            <div class="form-group col-1">
                <label for="person_nametitle">หน่วย:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">Bq</option>
                    <option value="นาง">Ci</option>
                    <option value="นางสาว">kg</option>
                    <option value="นางสาว">lb</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ผู้ผลิต:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุชื่อผู้ผลิตภาชนะบรรจุ">
            </div>
            <div class="form-group col-md">
                <label for="name">รุ่นหรือรหัสสินค้า:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุรุ่นหรือรหัสภาชนะบรรจุ/เครื่องมือ">
            </div>
            <div class="form-group col-md">
                <label for="name">หมายเลข:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
            </div>
            <div class="form-group col-md">
                <label for="name">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุความจุกัมมันตภาพหรือน้ำหนัก">
            </div>
            <div class="form-group col-1">
                <label for="person_nametitle">หน่วย:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">Bq</option>
                    <option value="นาง">Ci</option>
                    <option value="นางสาว">kg</option>
                    <option value="นางสาว">lb</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                <input type="name" class="form-control" id="name"
                    placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
            </div>
            <div class="form-group col-md">
                <label for="name">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                <label for="name">ทะเบียนอ้างอิง:</label>
                <input type="name" class="form-control" id="name" placeholder="ทะเบียนอ้างอิง">
            </div>
            <div class="form-group col-2">
                <label for="person_nametitle">รหัสประเภทการใช้งาน:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">16 Research</option>
                    <option value="นาง">17 รังสีรักษา</option>
                    <option value="นางสาว">19 รังสีวินิจฉัย</option>
                    <option value="นาย">22 Leakage Testing</option>
                    <option value="นาง">23 Standard Source</option>
                    <option value="นางสาว">อื่นๆ..</option>
                </select>
            </div>
            <div class="form-group col-md">
                <label for="name">ธาตุ-เลขมวล:</label>
                <input type="name" class="form-control" id="name" placeholder="ธาตุ-เลขมวล">
            </div>
            <div class="form-group col-md">
                <label for="name">รุ่นหรือรหัสสินค้า:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุรุ่นหรือรหัสสินค้า">
            </div>
            <div class="form-group col-2">
                <label for="person_nametitle">สถานภาพวัสดุ:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">1.ใช้งานปกติ</option>
                    <option value="นาง">2.เก็บสำรอง</option>
                    <option value="นางสาว">3.ยกเลิกการใช้</option>
                    <option value="นางสาว">4.รอจัดการยาก</option>
                    <option value="นางสาว">5.กำลังสั่งนำเข้า</option>
                    <option value="นางสาว">6.ขอสำรอง</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ผู้ผลิต:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
            </div>
            <div class="form-group col-md">
                <label for="name">กัมมันตภาพสูงสุดหรือน้ำหนัก:</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุกัมมันตภาพสูงสุดหรือน้ำหนัก">
            </div>
            <div class="form-group col-1">
                <label for="person_nametitle">หน่วย:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">Bq</option>
                    <option value="นาง">Ci</option>
                    <option value="นางสาว">kg</option>
                    <option value="นางสาว">lb</option>
                </select>
            </div>
            <div class="form-group col-3">
                <label for="person_nametitle">สมบัติทางกายภาพ:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="นาย">1.ของแข็ง</option>
                    <option value="นาง">2.ของเหลว</option>
                    <option value="นางสาว">3.ก๊าซ</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                <input type="name" class="form-control" id="name"
                    placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
            </div>
            <div class="form-group col-md">
                <label for="name">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                <input type="name" class="form-control" id="name" placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>รายละเอียดเจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
        </div>
        <div class="row alert alert-light" role="alert" style="height:45px">
            <h5>เจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อ:</label>
                <input type="name" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group col-md">
                <label for="lname">นามสกุล:</label>
                <input type="lname" class="form-control" id="lname" placeholder="lname">
            </div>
            <div class="form-group col-md-5">
                <label for="idcard">เลขประจำตัวประชาชน:</label>
                <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="position">ตำแหน่ง:</label>
                <input type="position" class="form-control" id="position" placeholder="position">
            </div>
            <div class="form-group col-md-1">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md-2">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
            </div>
            <div class="form-group col-md">
                <!-- Don't forget change type and id -->
                <label for="birthday">หมายเลขโทรศัพท์:</label>
                <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
            </div>
            <div class="form-group col-md">
                <label for="alley">Email:</label>
                <input type="alley" class="form-control" id="alley" placeholder="Email">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="houseno">บ้านเลขที่:</label>
                <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
            </div>
            <div class="form-group col-md-2">
                <label for="villageno">หมู่:</label>
                <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
            </div>
            <div class="form-group col-md">
                <label for="alley">ตรอก / ซอย:</label>
                <input type="alley" class="form-control" id="alley" placeholder="alley">
            </div>
            <div class="form-group col-md">
                <label for="road">ถนน:</label>
                <input type="road" class="form-control" id="road" placeholder="road">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="subdistrict">ตำบล / แขวง:</label>
                <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
            </div>
            <div class="form-group col-md">
                <label for="district">อำเภอ:</label>
                <input type="district" class="form-control" id="district" placeholder="district">
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">จังหวัด:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                </div>
                <div class="form-group col-md">
                    <label for="road">รหัสไปรษณีย์:</label>
                    <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="alley">คุณวุฒิ:</label>
                <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
            </div>
            <div class="form-group col-md">
                <label for="alley">หมายเลขทะเบียน:</label>
                <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
            </div>
        </div>
        <br>
        <div class="form-row text-danger">
            <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
        </div>
        <div class="form-row col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>

        <br>
        <h6>กรณีที่มีเจ้าหน้าที่ความปลอดภัยทางรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
        <button id="addsafety" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                class='fas fa-plus-circle'></i>
            เพิ่ม</button>
        <div id="detailsafety" style="display:none;">
            <br>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-5">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md-1">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
                <div class="form-group col-md-2">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                </div>
                <div class="form-group col-md">
                    <label for="alley">Email:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="Email">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="houseno">บ้านเลขที่:</label>
                    <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                </div>
                <div class="form-group col-md-2">
                    <label for="villageno">หมู่:</label>
                    <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                </div>
                <div class="form-group col-md">
                    <label for="alley">ตรอก / ซอย:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="alley">
                </div>
                <div class="form-group col-md">
                    <label for="road">ถนน:</label>
                    <input type="road" class="form-control" id="road" placeholder="road">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="subdistrict">ตำบล / แขวง:</label>
                    <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                </div>
                <div class="form-group col-md">
                    <label for="district">อำเภอ:</label>
                    <input type="district" class="form-control" id="district" placeholder="district">
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">จังหวัด:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">รหัสไปรษณีย์:</label>
                        <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">คุณวุฒิ:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                </div>
                <div class="form-group col-md">
                    <label for="alley">หมายเลขทะเบียน:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                </div>
            </div>
            <br>
            <div class="form-row text-danger">
                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
            </div>
            <div class="form-row col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row alert alert-light" role="alert" style="height:45px">
            <h5>ผู้ปฎิบัติงานรังสี</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อ:</label>
                <input type="name" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group col-md">
                <label for="lname">นามสกุล:</label>
                <input type="lname" class="form-control" id="lname" placeholder="lname">
            </div>
            <div class="form-group col-md-5">
                <label for="idcard">เลขประจำตัวประชาชน:</label>
                <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="position">ตำแหน่ง:</label>
                <input type="position" class="form-control" id="position" placeholder="position">
            </div>
            <div class="form-group col-md-1">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md-2">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
            </div>
            <div class="form-group col-md">
                <!-- Don't forget change type and id -->
                <label for="birthday">หมายเลขโทรศัพท์:</label>
                <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
            </div>
            <div class="form-group col-md">
                <label for="alley">Email:</label>
                <input type="alley" class="form-control" id="alley" placeholder="Email">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="houseno">บ้านเลขที่:</label>
                <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
            </div>
            <div class="form-group col-md-2">
                <label for="villageno">หมู่:</label>
                <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
            </div>
            <div class="form-group col-md">
                <label for="alley">ตรอก / ซอย:</label>
                <input type="alley" class="form-control" id="alley" placeholder="alley">
            </div>
            <div class="form-group col-md">
                <label for="road">ถนน:</label>
                <input type="road" class="form-control" id="road" placeholder="road">
            </div>

        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="subdistrict">ตำบล / แขวง:</label>
                <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
            </div>
            <div class="form-group col-md">
                <label for="district">อำเภอ:</label>
                <input type="district" class="form-control" id="district" placeholder="district">
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">จังหวัด:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                </div>
                <div class="form-group col-md">
                    <label for="road">รหัสไปรษณีย์:</label>
                    <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="alley">คุณวุฒิ:</label>
                <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
            </div>
            <div class="form-group col-md">
                <label for="alley">หมายเลขทะเบียน:</label>
                <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
            </div>
        </div>
        <br>
        <div class="form-row text-danger">
            <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
        </div>
        <div class="form-row col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
        <br>
        <h6>กรณีที่มีผู้ปฎิบัติงานรังสีมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
        <button id="addmake" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                class='fas fa-plus-circle'></i>
            เพิ่ม</button>

        <div id="detailmake" style="display:none;">
            <br>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-5">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md-1">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
                <div class="form-group col-md-2">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                </div>
                <div class="form-group col-md">
                    <label for="alley">Email:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="Email">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="houseno">บ้านเลขที่:</label>
                    <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                </div>
                <div class="form-group col-md-2">
                    <label for="villageno">หมู่:</label>
                    <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                </div>
                <div class="form-group col-md">
                    <label for="alley">ตรอก / ซอย:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="alley">
                </div>
                <div class="form-group col-md">
                    <label for="road">ถนน:</label>
                    <input type="road" class="form-control" id="road" placeholder="road">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="subdistrict">ตำบล / แขวง:</label>
                    <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                </div>
                <div class="form-group col-md">
                    <label for="district">อำเภอ:</label>
                    <input type="district" class="form-control" id="district" placeholder="district">
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">จังหวัด:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">รหัสไปรษณีย์:</label>
                        <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">คุณวุฒิ:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="คุณวุฒิ">
                </div>
                <div class="form-group col-md">
                    <label for="alley">หมายเลขทะเบียน:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="หมายเลขทะเบียน">
                </div>
            </div>
            <br>
            <div class="form-row text-danger">
                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, หนังสือมอบอำนาจ และเอกสารอื่นๆ</h6>
            </div>
            <div class="form-row col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row alert alert-light" role="alert" style="height:45px">
            <h5>แพทย์ผู้รับผิดชอบ</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                <input type="name" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group col-md">
                <label for="lname">นามสกุล:</label>
                <input type="lname" class="form-control" id="lname" placeholder="lname">
            </div>
            <div class="form-group col-md-5">
                <label for="idcard">เลขประจำตัวประชาชน:</label>
                <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="position">ตำแหน่ง:</label>
                <input type="position" class="form-control" id="position" placeholder="position">
            </div>
            <div class="form-group col-md-1">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md-2">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
            </div>
            <div class="form-group col-md">
                <!-- Don't forget change type and id -->
                <label for="birthday">หมายเลขโทรศัพท์:</label>
                <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
            </div>
            <div class="form-group col-md">
                <label for="alley">Email:</label>
                <input type="alley" class="form-control" id="alley" placeholder="Email">
            </div>
        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="houseno">บ้านเลขที่:</label>
                <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
            </div>
            <div class="form-group col-md-2">
                <label for="villageno">หมู่:</label>
                <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
            </div>
            <div class="form-group col-md">
                <label for="alley">ตรอก / ซอย:</label>
                <input type="alley" class="form-control" id="alley" placeholder="alley">
            </div>
            <div class="form-group col-md">
                <label for="road">ถนน:</label>
                <input type="road" class="form-control" id="road" placeholder="road">
            </div>

        </div>
        <!--  -->
        <div class="form-row">
            <div class="form-group col-md">
                <label for="subdistrict">ตำบล / แขวง:</label>
                <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
            </div>
            <div class="form-group col-md">
                <label for="district">อำเภอ:</label>
                <input type="district" class="form-control" id="district" placeholder="district">
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">จังหวัด:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                </div>
                <div class="form-group col-md">
                    <label for="road">รหัสไปรษณีย์:</label>
                    <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อสถานที่ทำการ:</label>
                <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="alley">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                <input type="alley" class="form-control" id="alley" placeholder="เลขที่ใบอนุญาตประกอบโรค">
            </div>
            <div class="form-group col-md">
                <label for="birthday">ออกให้ ณ วันที่:</label>
                <input type="birthday" class="form-control" id="birthday" placeholder="วว/ดด/ปป">
            </div>
        </div>
        <br>
        <div class="form-row text-danger">
            <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ</h6>
        </div>
        <div class="form-row col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
        <br>
        <h6>กรณีที่มีแพทย์ผู้รับผิดชอบมากกว่า 1 คน **กรุณากรอกข้อมูลเพิ่มเติม**</h6>
        <button id="adddoctor" type="button" style='font-size:16px' class="btn btn-outline-primary"><i
                class='fas fa-plus-circle'></i>
            เพิ่ม</button>

        <div id="detaildoctor" style="display:none;">
            <br>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อแพทย์ผู้รับผิดชอบ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-5">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md-1">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
                <div class="form-group col-md-2">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
                </div>
                <div class="form-group col-md">
                    <label for="alley">Email:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="Email">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="houseno">บ้านเลขที่:</label>
                    <input type="houseno" class="form-control" id="houseno" placeholder="houseno">
                </div>
                <div class="form-group col-md-2">
                    <label for="villageno">หมู่:</label>
                    <input type="villageno" class="form-control" id="villageno" placeholder="villageno">
                </div>
                <div class="form-group col-md">
                    <label for="alley">ตรอก / ซอย:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="alley">
                </div>
                <div class="form-group col-md">
                    <label for="road">ถนน:</label>
                    <input type="road" class="form-control" id="road" placeholder="road">
                </div>

            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="subdistrict">ตำบล / แขวง:</label>
                    <input type="subdistrict" class="form-control" id="subdistrict" placeholder="subdistrict">
                </div>
                <div class="form-group col-md">
                    <label for="district">อำเภอ:</label>
                    <input type="district" class="form-control" id="district" placeholder="district">
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="alley">จังหวัด:</label>
                        <input type="alley" class="form-control" id="alley" placeholder="จังหวัด">
                    </div>
                    <div class="form-group col-md">
                        <label for="road">รหัสไปรษณีย์:</label>
                        <input type="road" class="form-control" id="road" placeholder="รหัสไปรษณีย์">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อสถานที่ทำการ:</label>
                    <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="alley">ใบอนุญาตประกอบโรคศิลปะเลขที่:</label>
                    <input type="alley" class="form-control" id="alley" placeholder="เลขที่ใบอนุญาตประกอบโรค">
                </div>
                <div class="form-group col-md">
                    <label for="birthday">ออกให้ ณ วันที่:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="วว/ดด/ปป">
                </div>
            </div>
            <br>
            <div class="form-row text-danger">
                <h6>แนบเอกสารเพิ่มเติม เช่น สำเนาบัตรประชาชน, สำเนาใบประกอบโรคศิลปะ และเอกสารอื่นๆ</h6>
            </div>
            <div class="form-row col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- button next back -->
    <div class="container">
        <div style="float:right;">
            <button id="backsteptwo1" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="confirm1" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
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