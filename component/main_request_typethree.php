<div class="container mt-5">
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
            <div class="form-group col">
                <label for="person_storage_address">หมายเลขโทรศัพท์:</label>
                <!-- Don't forget id -->
                <input type="text" class="form-control" id="person_storage_address">
            </div>
            <div class="form-group col">
                <label for="person_nametitle">ประเภทการใช้ประโยชน์:</label>
                <select class="custom-select" id="person_nametitle">
                    <option value="การแพทย์">เชื้อเพลิงนิวเคลียร์</option>
                    <option value="อุตสาหกรรม">เครื่องกำบังรังสีทางการแพทย์</option>
                    <option value="การแพทย์">เครื่องกำบังรังสีทางอุตสาหกรรม</option>
                    <option value="ศึกษาวิจัย">ศึกษาวิจัย</option>
                    <option value="อุตสาหกรรม">พัฒนาวัสดุนิวเคลียร์</option>
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

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>รายละเอียดของชนิดวัสดุที่ขออนุญาต: </h5>
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

        <div id="closebox3" style="display:none;">
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="person_storage_amphoe">รหัสบริเวณตรวจนับ:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
                    <label for="person_storage_district">ชื่อสถานปฏิบัติการ:</label>
                    <input type="text" class="form-control" id="person_storage_district">
                </div>
                <div class="form-group col-5">
                    <label for="person_nametitle">วัสดุนิวเคลียร์พิเศษ ชนิด:</label>
                    <select class="custom-select" id="person_nametitle">
                        <option value="การแพทย์">01 พลูโตเนียมหรือสารประกอบของพลูโตเนียม</option>
                        <option value="อุตสาหกรรม">02 ยูเรเนียม 233 หรือสารประกอบยูเรเนียม 233</option>
                        <option value="การแพทย์">03 ยูเรเนียม 235 หรือสารประกอบยูเรเนียม 235</option>
                        <option value="ศึกษาวิจัย">04 วัสดุใดๆ ที่มีวัสดุตามข้อ 01,02 หรือ 03 ผสมกัน</option>
                    </select>
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
        </div>
        <div id="openbox3" style="display:none;">
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="person_storage_amphoe">รหัสหน่วยงาน:</label>
                    <input type="text" class="form-control" id="person_storage_amphoe">
                </div>
                <div class="form-group col">
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
        </div>
    </div>

    <div class="container">
        <div class="row alert alert-primary" role="alert" style="height:45px">
            <h5>รายละเอียดเจ้าหน้าที่ความปลอดภัยทางรังสี</h5>
        </div>
        <div class="row alert alert-light" role="alert" style="height:45px">
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
    <div id="nextback" class="container">
        <div style="float:right;">
            <button type="submit" class="btn btn-primary right">ยื่นคำขอใบอนุญาต</button>
        </div>
    </div>
</div>

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