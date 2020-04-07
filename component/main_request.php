<!-- UI request of person -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4>ขอใบอนุญาตสำหรับบุคคลธรรมดา</h4>
        </div>
    </div>
    <hr>

    <div id="step" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">รายละเอียดสถานที่ที่ใช้ในการขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">ประเภทของวัสดุที่ขออนุญาต</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ผู้ปฏิบัติงานทางด้านรังสี</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">เสร็จสมบูรณ์</a>
            </li>
        </ul>
    </div>
    <br>

    <div id="selecttype" class="container">
        <div class="form-row">
            <h5>ขอรับใบอนุญาตประเภท: </h5>
        </div>
        <div class="form-row">
            <div class="col px-md-4">
                <div class="row">
                    <div id="typeone" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">สำหรับขออนุญาตฯ วัสดุพลอยได้
                                (ปส
                                1ก)</label>
                        </div>
                    </div>
                    <div id="typetwo" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">สำหรับนำเข้า-ส่งออกวัสดุพลอยได้
                                (ปส
                                3ก)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="three" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">สำหรับขออนุญาตฯ
                                วัสดุนิวเคลียร์พิเศษ (ปส
                                1ข)</label>
                        </div>
                    </div>
                    <div id="typefour" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label"
                                for="customRadioInline4">สำหรับนำเข้า-ส่งออกวัสดุนิวเคลียร์-วัสดุต้นกำลัง (ปส
                                3ข)</label>
                        </div>
                    </div>
                </div>
                <div id="typefive" class="row">
                    <div class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline5" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label"
                                for="customRadioInline5">สำหรับขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรามาณู (ปส
                                1ง)</label>
                        </div>
                    </div>
                    <div id="typesix" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline6" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label"
                                for="customRadioInline6">สำหรับทำให้วัสดุต้นกำลังพ้นสภาพฯ
                                (ปส
                                2)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="typeseven" class="col px-md-5">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline7" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline7">สำหรับขออนุญาตฯ
                                เครื่องกำเนิดรังสี (ปส
                                1ค)</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

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
                    <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">ผลิต</option>
                        <option value="อุตสาหกรรม">มีไว้ในครอบครอง</option>
                        <option value="ศึกษาวิจัย">ใช้</option>
                    </select>
                </div>
            </div>
            <div style="float:right;">
                <button id="nextone" type="button" class="btn btn-primary right">ถัดไป</button>
            </div>
        </div>
        <br>
    </div>

    <!-- Second Step -->
    <div id="steptwo" class="container" style="display: none;">
        <div class="form-row">
            <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
        </div>
        <div class="row mx-auto">
            <div id="materialopen" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline8" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline8">วัสดุชนิดปิดผนึก</label>
                </div>
            </div>
            <div id="materialclose" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline9" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline9">วัสดุชนิดไม่ปิดผนึก</label>
                </div>
            </div>
        </div>
        <br>
        <div id="closebox" class="container" style="display: none;">
            <div class="row alert alert-primary" role="alert" style="height:45px">
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

        <!-- No close -->
        <div id="openbox" class="container" style="display: none;">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>ข้อมูลของวัสดุชนิดไม่ปิดปิดผนึก</h5>
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

    <!-- Third Step -->
    <div class="container" style="display: none;">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>เจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
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
            <div class="form-group col-md">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
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

    <div class="container" style="display: none;">
        <div class="row alert alert-primary" role="alert" style="height:45px">
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
            <div class="form-group col-md">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
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

    <div class="container" style="display: none;">
        <div class="row alert alert-primary" role="alert" style="height:45px">
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
            <div class="form-group col-md">
                <label for="age">อายุ:</label>
                <input type="age" class="form-control" id="age" placeholder="age">
            </div>
            <div class="form-group col-md">
                <label for="nationality">สัญชาติ:</label>
                <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
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
        <br>

        <h5>แพทย์ผู้รับผิดชอบ</h5>
        <hr>
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
    </div>

    <!-- button next back -->
    <div id="nextback" class="container" style="display: none;">
        <div style="float:right;">
            <button onclick='document.location.href="./";' type="button" class="btn">ย้อนกลับ</button>
            <button onclick='document.location.href="./";' type="button" class="btn btn-primary right">ถัดไป</button>
        </div>
    </div>
</div>


<!--script-->
<!-- script first page -->
<script>
$(document).ready(function() {
    $("#nextone").click(function() {
        $("#selecttype").hide();
        $("#steptwo").show();
    });
});
</script>

<!-- script second page -->
<script>
$(document).ready(function() {
    $("#materialopen").click(function() {
        $("#openbox").hide();
        $("#closebox").show();
        $("#nextback").show();
    });
    $("#materialclose").click(function() {
        $("#closebox").hide();
        $("#openbox").show();
        $("#nextback").show();
    });
});
</script>