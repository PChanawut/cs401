<div class="container mt-5">
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
                    <label for="person_nametitle">ขออนุญาตเพื่อ:</label>
                    <select class="custom-select">
                        <option value="นำเข้า">นำหรือสั่งเข้ามาในราชอาณาจักร</option>
                        <option value="ส่งออก">นำหรือส่งออกนอกราชอาณาจักร</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ประเภทการใช้ประโยชน์:</label>
                    <select class="custom-select">
                        <option value="การแพทย์">การแพทย์</option>
                        <option value="อุตสาหกรรม">อุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">พาหนะสำหรับการขนส่ง:</label>
                    <select class="custom-select">
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
                            <div class="form-group">
                                <label for="inputPassword6">ใบอนุญาตเลขที่:</label>
                                <input type="password" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">หมดอายุวันที่:</label>
                                <input type="password" class="form-control mx-sm-3"
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
                                <input type="password" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline">
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
                        <input type="radio" id="customRadioInline12" name="customRadioInline1"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline12">วัสดุชนิดปิดผนึก</label>
                    </div>
                </div>
                <div id="materialclose2" class="col px-md-5">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline13" name="customRadioInline1"
                            class="custom-control-input">
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
                        <input type="name" class="form-control" placeholder="ทะเบียนอ้างอิง">
                    </div>
                    <div class="form-group col-2">
                        <label for="person_nametitle">รหัสประเภทการใช้งาน:</label>
                        <select class="custom-select">
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
                        <label for="name">ธาตุ-เลขมวล:</label>
                        <input type="name" class="form-control" placeholder="ธาตุ-เลขมวล">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">รุ่นหรือรหัสสินค้า:</label>
                        <input type="name" class="form-control" placeholder="ระบุรุ่นหรือรหัสสินค้า">
                    </div>
                    <div class="form-group col-2">
                        <label for="person_nametitle">สถานภาพวัสดุ:</label>
                        <select class="custom-select">
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
                        <label for="name">ผู้ผลิต:</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">หมายเลขวัสดุ:</label>
                        <input type="name" class="form-control" placeholder="ระบุหมายเลขหรือรหัสวัสดุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">กัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="name" class="form-control" placeholder="ระบุกัมมันตภาพหรือน้ำหนัก">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ผู้ผลิต:</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อผู้ผลิตภาชนะบรรจุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">รุ่นหรือรหัสสินค้า:</label>
                        <input type="name" class="form-control" placeholder="ระบุรุ่นหรือรหัสภาชนะบรรจุ/เครื่องมือ">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">หมายเลข:</label>
                        <input type="name" class="form-control" placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">ความจุกัมมันตภาพหรือน้ำหนัก:</label>
                        <input type="name" class="form-control" placeholder="ระบุความจุกัมมันตภาพหรือน้ำหนัก">
                    </div>
                    <div class="form-group col-1">
                        <label for="person_nametitle">หน่วย:</label>
                        <select class="custom-select">
                            <option value="Bq">Bq</option>
                            <option value="Ci">Ci</option>
                            <option value="kg">kg</option>
                            <option value="lb">lb</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
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
                        <input type="name" class="form-control" placeholder="ทะเบียนอ้างอิง">
                    </div>
                    <div class="form-group col-2">
                        <label for="person_nametitle">รหัสประเภทการใช้งาน:</label>
                        <select class="custom-select">
                            <option value="Research">16 Research</option>
                            <option value="รังสีรักษา">17 รังสีรักษา</option>
                            <option value="รังสีวินิจฉัย">19 รังสีวินิจฉัย</option>
                            <option value="Leakage Testing">22 Leakage Testing</option>
                            <option value="Standard Source">23 Standard Source</option>
                            <option value="อื่นๆ..">อื่นๆ..</option>
                        </select>
                    </div>
                    <div class="form-group col-md">
                        <label for="name">ธาตุ-เลขมวล:</label>
                        <input type="name" class="form-control" placeholder="ธาตุ-เลขมวล">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">รุ่นหรือรหัสสินค้า:</label>
                        <input type="name" class="form-control" placeholder="ระบุรุ่นหรือรหัสสินค้า">
                    </div>
                    <div class="form-group col-2">
                        <label for="person_nametitle">สถานภาพวัสดุ:</label>
                        <select class="custom-select">
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
                        <label for="name">ผู้ผลิต:</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อผู้ผลิตวัสดุกัมมันตรังสี">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">หมายเลข:</label>
                        <input type="name" class="form-control" placeholder="ระบุหมายเลขหรือรหัสภาชนะบรรจุ">
                    </div>
                    <div class="form-group col-1">
                        <label for="person_nametitle">หน่วย:</label>
                        <select class="custom-select">
                            <option value="Bq">Bq</option>
                            <option value="Ci">Ci</option>
                            <option value="kg">kg</option>
                            <option value="lb">lb</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="person_nametitle">สมบัติทางกายภาพ:</label>
                        <select class="custom-select">
                            <option value="ของแข็ง">1.ของแข็ง</option>
                            <option value="ของเหลว">2.ของเหลว</option>
                            <option value="ก๊าซ">3.ก๊าซ</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน:</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อห้อง/สถานที่เก็บติดตั้งหรือใช้งาน">
                    </div>
                    <div class="form-group col-md">
                        <label for="name">บริษัทผู้แทนจำหน่าย(ที่อยู่):</label>
                        <input type="name" class="form-control" placeholder="ระบุชื่อ-ที่อยู่ของบริษัท">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row alert alert-light" role="alert" style="height:45px">
                    <h5>การบรรจุหีบห่อของวัสดุพลอยได้</h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="name">ลักษณะและขนาดของหีบห่อ:</label>
                        <input type="name" class="form-control" placeholder="ระบุลักษณะและขนาดของหีบห่อ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="person_nametitle">ชนิดหีบห่อ:</label>
                        <select class="custom-select">
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
                        <label for="person_storage_amphoe">หมายเลขสหประชาชาติ (UN number):</label>
                        <input type="text" class="form-control">
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
                                    <label for="name">ชื่อ:</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname">นามสกุล:</label>
                                    <input type="lname" class="form-control" placeholder="lname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="idcard" class="form-control" placeholder="idcard">
                                </div>
                                <div class="form-group col-2">
                                    <label for="age">อายุ:</label>
                                    <input type="age" class="form-control" placeholder="age">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="position">ตำแหน่ง:</label>
                                    <input type="position" class="form-control" placeholder="position">
                                </div>
                                <div class="form-group col-md">
                                    <label for="nationality">สัญชาติ:</label>
                                    <input type="nationality" class="form-control" placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <label for="age">Email:</label>
                                    <input type="age" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                                    <input type="birthday" class="form-control" placeholder="phonenumber">
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

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อสถานที่ทำการ:</label>
                                    <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
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
                                    <label for="name">ชื่อ:</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lname">นามสกุล:</label>
                                    <input type="lname" class="form-control" placeholder="lname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="idcard">เลขประจำตัวประชาชน:</label>
                                    <input type="idcard" class="form-control" placeholder="idcard">
                                </div>
                                <div class="form-group col-2">
                                    <label for="age">อายุ:</label>
                                    <input type="age" class="form-control" placeholder="age">
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="position">ตำแหน่ง:</label>
                                    <input type="position" class="form-control" placeholder="position">
                                </div>
                                <div class="form-group col-md">
                                    <label for="nationality">สัญชาติ:</label>
                                    <input type="nationality" class="form-control" placeholder="nationality">
                                </div>
                                <div class="form-group col-md">
                                    <label for="age">Email:</label>
                                    <input type="age" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md">
                                    <!-- Don't forget change type and id -->
                                    <label for="birthday">หมายเลขโทรศัพท์:</label>
                                    <input type="birthday" class="form-control" placeholder="phonenumber">
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

                            <div class="container">
                                <div class="row alert alert-light" role="alert" style="height:45px">
                                    <h5>สถานที่ทำการ</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">ชื่อสถานที่ทำการ:</label>
                                    <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
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
                                    <label for="name">ชื่อสถานที่ทำการ:</label>
                                    <input type="name" class="form-control" placeholder="ชื่อสถานที่ทำการ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="person_storage_district">เลขที่:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <label for="person_storage_amphoe">ถนน:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <label for="person_storage_province">เมือง/รัฐ:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <label for="person_storage_zipcode">ประเทศ:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="person_storage_district">หมายเลขโทรศัพท์:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <label for="person_storage_amphoe">Email:</label>
                                    <input type="text" class="form-control">
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
                    <label for="person_storage_address">รายละเอียดที่อยู่ (บ้านเลขที่, หมู่, ตึก, ถนน)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
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
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">ตำบล:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">อำเภอ:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จังหวัด:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_zipcode">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="person_storage_address">Email:</label>
                    <!-- Don't forget id -->
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div style="float:right;">
                <button id="backstep2" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm2" type="button" class="btn btn-primary right" data-toggle="modal"
                    data-target="#exampleModalScrollable">ยื่นคำขอใบอนุญาต</button>
            </div>
        </div>

        <!-- <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">รายละเอียดการยื่นขอใบอนุญาต</h5>
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
                        <button id="save2" type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                    </div>
                </div>
            </div>
        </div> -->
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

<!-- <script>
$(document).ready(function() {
    $('#confirm2').click(function() {
        $('#exampleModalScrollable2').modal('show');
    });
});
</script> -->