<div class="container mt-5">
    <div id="placesave" class="container">
        <!-- First Step -->
        <div id="firststep" class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>สถานที่ใช้และจัดเก็บวัสดุ</h5>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control" id="person_storage_address">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="นำเข้า">นำหรือสั่งเข้ามาในราชอาณาจักร</option>
                        <option value="ส่งออก">นำหรือส่งออกนอกราชอาณาจักร</option>
                    </select>
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
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
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
                    <label for="person_nametitle">พาหนะสำหรับการขนส่ง:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="นำเข้า">เครื่องบิน</option>
                        <option value="ส่งออก">เรือ</option>
                        <option value="นำเข้า">รถยนต์</option>
                        <option value="ส่งออก">รถไฟ</option>
                        <option value="ส่งออก">อื่นๆ...</option>
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
                            <div class="form-group">
                                <label for="inputPassword6">ใบอนุญาตเลขที่:</label>
                                <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">หมดอายุวันที่:</label>
                                <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline">
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
                                <label for="inputPassword6">ยื่นแบบคำขออนุญาตเมื่อวันที่:</label>
                                <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Second Step -->
    <div id="steptwo" class="container">
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต</h5>
            </div>
        </div>
        <div class="row mx-auto">
            <div id="materialopen2" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline12" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline12">วัสดุชนิดปิดผนึก</label>
                </div>
            </div>
            <div id="materialclose2" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline13" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline13">วัสดุชนิดไม่ปิดผนึก</label>
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
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ผู้ผลิต:</label>
                    <input type="name" class="form-control" id="name" placeholder="ระบุชื่อผู้ผลิตภาชนะบรรจุ">
                </div>
                <div class="form-group col-md">
                    <label for="name">รุ่นหรือรหัสสินค้า:</label>
                    <input type="name" class="form-control" id="name"
                        placeholder="ระบุรุ่นหรือรหัสภาชนะบรรจุ/เครื่องมือ">
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

        <div id="openbox2" class="container" style="display:none;">
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
                    <label for="name">หมายเลข:</label>
                    <input type="name" class="form-control" id="name" placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
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
    </div>

    <div class="container">
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออกทั้งในและนอกราชอาณาจักร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md-3">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-4">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
                <div class="form-group col-2">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <label for="age">Email:</label>
                    <input type="age" class="form-control" id="age" placeholder="Email">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
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

            <div class="container">
                <div class="row alert alert-light" role="alert" style="height:45px">
                    <h5>สถานที่ทำการ</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อสถานที่ทำการ:</label>
                    <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
                </div>
            </div>
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
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>ผู้ดำเนินการตามพิธีศุลกากร</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name">ชื่อ:</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group col-md-3">
                    <label for="lname">นามสกุล:</label>
                    <input type="lname" class="form-control" id="lname" placeholder="lname">
                </div>
                <div class="form-group col-md-4">
                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                    <input type="idcard" class="form-control" id="idcard" placeholder="idcard">
                </div>
                <div class="form-group col-2">
                    <label for="age">อายุ:</label>
                    <input type="age" class="form-control" id="age" placeholder="age">
                </div>
            </div>
            <!--  -->
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="position">ตำแหน่ง:</label>
                    <input type="position" class="form-control" id="position" placeholder="position">
                </div>
                <div class="form-group col-md">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                </div>
                <div class="form-group col-md">
                    <label for="age">Email:</label>
                    <input type="age" class="form-control" id="age" placeholder="Email">
                </div>
                <div class="form-group col-md">
                    <!-- Don't forget change type and id -->
                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                    <input type="birthday" class="form-control" id="birthday" placeholder="phonenumber">
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

            <div class="container">
                <div class="row alert alert-light" role="alert" style="height:45px">
                    <h5>สถานที่ทำการ</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="name">ชื่อสถานที่ทำการ:</label>
                    <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
                </div>
            </div>
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
        </div>
    </div>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>ผู้รับปลายทาง กรณีนำเข้าหรือส่งออกนอกราชอาณาจักรซึ่งวัสดุพลอยได้</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ชื่อสถานที่ทำการ:</label>
                <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="person_storage_district">เลขที่:</label>
                <input type="text" class="form-control" id="person_storage_district">
            </div>
            <div class="form-group col">
                <label for="person_storage_amphoe">ถนน:</label>
                <input type="text" class="form-control" id="person_storage_amphoe">
            </div>
            <div class="form-group col">
                <label for="person_storage_province">เมือง/รัฐ:</label>
                <input type="text" class="form-control" id="person_storage_province">
            </div>
            <div class="form-group col">
                <label for="person_storage_zipcode">ประเทศ:</label>
                <input type="text" class="form-control" id="person_storage_zipcode">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="person_storage_district">หมายเลขโทรศัพท์:</label>
                <input type="text" class="form-control" id="person_storage_district">
            </div>
            <div class="form-group col">
                <label for="person_storage_amphoe">Email:</label>
                <input type="text" class="form-control" id="person_storage_amphoe">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>การบรรจุหีบห่อของวัสดุพลอยได้</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="name">ลักษณะและขนาดของหีบห่อ:</label>
                <input type="name" class="form-control" id="name" placeholder="ชื่อสถานที่ทำการ">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="person_nametitle">ชนิดหีบห่อ:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="การแพทย์">Excepted</option>
                    <option value="อุตสาหกรรม">IP-1</option>
                    <option value="ศึกษาวิจัย">IP-2</option>
                    <option value="อื่นๆ">IP-3</option>
                    <option value="การแพทย์">A</option>
                    <option value="อุตสาหกรรม">B(U)</option>
                    <option value="ศึกษาวิจัย">B(M)</option>
                    <option value="อื่นๆ">C</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="person_storage_amphoe">หมายเลขสหประชาชาติ (UN number):</label>
                <input type="text" class="form-control" id="person_storage_amphoe">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>สถานที่เก็บรักษาวัสดุพลอยได้ที่นำหรือสั่งเข้ามาในราชอาณาจักร</h5>
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
            <div class="form-group col">
                <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">Email:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>สถานที่เก็บรักษาวัสดุพลอยได้ขณะรอดำเนินการนำหรือส่งออกนอกราชอาณาจักร</h5>
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
            <div class="form-group col">
                <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_storage_address">Email:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
        </div>
    </div>
    <div id="nextback" class="container">
        <div style="float:right;">
            <button type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
        </div>
    </div>
</div>

<!-- script -->
<!-- script have or nothave permission -->
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