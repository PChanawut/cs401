<div class="container mt-5">
    <div id="stepone4" class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="row alert alert-primary" role="alert" style="height:45px">
                <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
            </div>
        </div>

        <div class="row mx-auto">
            <div id="materialopen3" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline16" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline16">นำหรือสั่งเข้ามาในราชอาณาจักร</label>
                </div>
            </div>
            <div id="materialclose3" class="col px-md-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline17" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline17">นำหรือส่งออกนอกราชอาณาจักร</label>
                </div>
            </div>
        </div>
        <br>

        <div id="closebox4" class="container">
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="person_nametitle">วัตถุประสงค์:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">เชื้อเพลิงนิวเคลียร์</option>
                        <option value="อุตสาหกรรม">ศึกษาวิจัย</option>
                        <option value="การแพทย์">เครื่องกำบังรังสีทางการแพทย์</option>
                        <option value="ศึกษาวิจัย">เครื่องกำบังรังสีทางอุตสาหกรรม</option>
                        <option value="ศึกษาวิจัย">พัฒนาวัสดุนิวเคลียร์หรือวัสดุต้นกำลัง</option>
                        <option value="ศึกษาวิจัย">อื่นๆ...</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">ขออนุญาตวัสดุนิวเคลียร์หรือวัสดุต้นกำลังประเภท:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">01 พลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                        <option value="อุตสาหกรรม">02 ยูเรเนียม 233 หรือสารประกอบยูเรเนียม 233</option>
                        <option value="การแพทย์">03 ยูเรเนียม 235 หรือสารประกอบยูเรเนียม 235</option>
                        <option value="ศึกษาวิจัย">04 วัสดุใดๆ ที่มีวัสดุตามข้อ 01,02 หรือ 03 ผสมกัน</option>
                        <option value="ศึกษาวิจัย">05 ยูเรเนียม</option>
                        <option value="ศึกษาวิจัย">06 สารประกอบยูเรเนียม</option>
                        <option value="การแพทย์">07 ธอเรียม</option>
                        <option value="อุตสาหกรรม">08 สารประกอบธอเรียม</option>
                        <option value="การแพทย์">09 ยูเรเนียมเสื่อมสมรรถนะ</option>
                        <option value="ศึกษาวิจัย">10 ยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                        <option value="ศึกษาวิจัย">11 ธอเรียมหรือสารประกอบธอเรียม</option>
                        <option value="ศึกษาวิจัย">12 แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป</option>
                        <option value="ศึกษาวิจัย">13 แร่หรือสินแร่ธอเรียมอ๊อกไซด์ตั้งแต่ร้อยละ 15 ขึ้นไป</option>
                        <option value="ศึกษาวิจัย">14
                            แร่หรือสินแร่ยูเรเนียมอ๊อกไซด์และธอเรียมอ๊อกไซด์รวมกันตั้งแต่ร้อยละ 15
                            ขึ้น</option>
                    </select>
                </div>
                <div class="form-group col-3">
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
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="person_storage_amphoe">รหัสบริเวณตรวจนับ:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_district">ชื่อสถานปฏิบัติการ:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_district">รหัสตำแหน่ง:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col">
                    <label for="person_storage_amphoe">ชื่อ/หมายเลข Batch:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_province">จำนวนในรุ่น:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col-4">
                    <label for="person_nametitle">รายละเอียดวัสดุ:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">Physical form</option>
                        <option value="อุตสาหกรรม">Chemical form</option>
                        <option value="การแพทย์">Containment</option>
                        <option value="ศึกษาวิจัย">Irradiation status and quality</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="person_nametitle">ประเภทวัสดุ:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">P (รหัสวัสดุ 01) สำหรับพลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                        <option value="อุตสาหกรรม">E (รหัสวัสดุ 02,03) สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม 233
                            และ/หรือ 235</option>
                        <option value="การแพทย์">U (รหัสวัสดุ 05,06) สำหรับยูเรเนียมหรือสารประกอบยูเรเนียม</option>
                        <option value="ศึกษาวิจัย">N (รหัสวัสดุ 05,06) สำหรับยูเรเนียมธรรมชาติ</option>
                        <option value="อุตสาหกรรม">T (รหัสวัสดุ 07,08) สำหรับธอเรียมหรือสารประกอบธอเรรียม</option>
                        <option value="การแพทย์">D (รหัสวัสดุ 09) สำหรับยูเรเนียมเสื่อมสมรรถนะ</option>
                        <option value="ศึกษาวิจัย">รหัสวัสดุ 04 แยกระบุตัวอักษรตามแต่ละชนิดของไอโซโทปที่ผสมกัน</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_province">น้ำหนักของวัสดุ:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col-1">
                    <label for="person_nametitle">หน่วย:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">กิโลกรัม</option>
                        <option value="อุตสาหกรรม">กรัม</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="person_storage_province">น้ำหนักของวัสดุนิวเคลียร์พิเศษ:</label>
                    <input type="text" class="form-control" id="person_storage_province">
                </div>
                <div class="form-group col">
                    <label for="person_nametitle">รหัสไอโซโทป:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">G วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235</option>
                        <option value="อุตสาหกรรม">J วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 235 และ 233</option>
                        <option value="การแพทย์">K วัสดุนิวเคลียร์พิเศษที่ประกอบด้วยยูเรเนียม 233</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="person_storage_amphoe">รหัสหน่วยงาน:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col-7">
                    <label for="person_storage_district">สถานที่ใช้งาน:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col-3">
                    <label for="person_storage_district">การใช้ประโยชน์:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="person_nametitle">วัสดุนิวเคลียร์พิเศษ ชนิด:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">05 ยูเรเนียม</option>
                        <option value="อุตสาหกรรม">06 สารประกอบยูเรเนียม</option>
                        <option value="การแพทย์">07 ธอเรียม</option>
                        <option value="ศึกษาวิจัย">08 สารประกอบธอเรียม</option>
                        <option value="ศึกษาวิจัย">09 ยูเรเนียมเสื่อมสมรรถนะ</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="person_storage_amphoe">น้ำหนัก(กิโลกรัม):</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_district">รุ่น/หมายเลขวัสดุ:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col">
                    <label for="person_storage_district">อายุการใช้งาน(ปี):</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_amphoe">ที่อยู่บริษัทผู้ผลิต:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="person_storage_amphoe">ที่อยู่บริษัทผู้แทนจำหน่าย:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
            </div>
            <div id="selecthave4" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline18" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline18">มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <hr>
                <div id="detailhave4" class="container" style="display:none;">
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
            <div id="selectnothave4" class="row mx-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline19" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline19">ไม่มีใบอนุญาตผลิต
                        มีไว้ในครอบครองหรือใช้วัสดุพลอยได้</label>
                </div>
                <div id="detailnothave4" class="container" style="display:none;">
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
            <div class="float-right">
                <button id="nextstepone4" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
    </div>

    <div id="steptwo4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne4">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                ผู้แทนจำหน่ายที่ได้รับมอบหมายให้นำเข้าหรือส่งออกทั้งในและนอกราชอาณาจักร
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
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
                                    <input type="nationality" class="form-control" id="nationality"
                                        placeholder="nationality">
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
                                    <input type="subdistrict" class="form-control" id="subdistrict"
                                        placeholder="subdistrict">
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
                                    <input type="subdistrict" class="form-control" id="subdistrict"
                                        placeholder="subdistrict">
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
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ผู้ดำเนินการตามพิธีศุลกากร
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
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
                                    <input type="nationality" class="form-control" id="nationality"
                                        placeholder="nationality">
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
                                    <input type="subdistrict" class="form-control" id="subdistrict"
                                        placeholder="subdistrict">
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
                                    <input type="subdistrict" class="form-control" id="subdistrict"
                                        placeholder="subdistrict">
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
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ผู้รับปลายทาง กรณีนำเข้าหรือส่งออกนอกราชอาณาจักรซึ่งวัสดุพลอยได้
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="float-right">
                <button id="backsteptwo4" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="nextsteptwo4" type="button" class="btn btn-primary">ถัดไป</button>
            </div>
        </div>
        <br>
    </div>

    <div id="stepthree4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">การบรรจุหีบห่อของวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">สถานที่เก็บรักษาวัสดุ</a>
            </li>
        </ul>
        <br>
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

        <div class="float-right">
            <button id="backstepthree4" type="button" class="btn btn-light">ย้อนกลับ</button>
            <button id="nextstepthree4" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>

    <div id="stepfour4" class="container" style="display:none;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link">รายละเอียดสถานที่จัดเก็บวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">ผู้ดำเนินการที่เกี่ยวข้องกับวัสดุ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">การบรรจุหีบห่อของวัสดุ</a>
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
        <div class="container">
            <div style="float:right;">
                <button id="backstep4" type="button" class="btn btn-light">ย้อนกลับ</button>
                <button id="confirm4" type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable4" tabindex="-1" role="dialog"
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
                            <!-- ... -->
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
                            <button type="submit" class="btn btn-primary">ยืนยันคำขอ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- script have or nothave permission -->
<script>
$(document).ready(function() {
    $("#nextstepone4").click(function() {
        $("#stepone4").hide();
        $("#steptwo4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backsteptwo4").click(function() {
        $("#steptwo4").hide();
        $("#stepone4").show();
    });
    $("#nextsteptwo4").click(function() {
        $("#steptwo4").hide();
        $("#stepthree4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstepthree4").click(function() {
        $("#stepthree4").hide();
        $("#steptwo4").show();
    });
    $("#nextstepthree4").click(function() {
        $("#stepthree4").hide();
        $("#stepfour4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#backstep4").click(function() {
        $("#stepfour4").hide();
        $("#stepthree4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $("#selecthave4").click(function() {
        $("#detailnothave4").hide();
        $("#detailhave4").show();
    });
    $("#selectnothave4").click(function() {
        $("#detailhave4").hide();
        $("#detailnothave4").show();
    });
});
</script>

<script>
$(document).ready(function() {
    $('#headingOne4').click(function() {
        $('#collapseTwo4').collapse('hide');
        $('#collapseThree4').collapse('hide');
        $('#collapseOne4').collapse('show');
    });
    $('#headingTwo4').click(function() {
        $('#collapseOne4').collapse('hide');
        $('#collapseThree4').collapse('hide');
        $('#collapseTwo4').collapse('show');
    });
    $('#headingThree4').click(function() {
        $('#collapseOne4').collapse('hide');
        $('#collapseTwo4').collapse('hide');
        $('#collapseThree4').collapse('show');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#confirm4').click(function() {
        $('#exampleModalScrollable4').modal('show');
    });
});
</script>