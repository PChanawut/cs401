<div class="alert alert-primary" role="alert">
    <h5>ข้อมูลส่วนตัวของผู้ขออนุญาต</h5>
</div>
<div class="form-row">
    <div class="form-group col-2">
        <label for="person-nametitle">คำนำหน้า:</label>
        <select class="custom-select" id="person-nametitle">
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
    </div>
    <div class="form-group col">
        <label for="person-firstname">ชื่อ:</label>
        <input type="text" class="form-control" id="person-firstname">
    </div>
    <div class="form-group col">
        <label for="person-lastname">นามสกุล:</label>
        <input type="text" class="form-control" id="person-lastname">
    </div>
    <div class="form-group col-3">
        <label for="person-birthday">วันเดือนปีเกิด:</label>
        <input type="text" class="form-control" id="person-birthday">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-4">
        <label for="person-identification">เลขบัตรประจำตัวประชาชน:</label>
        <input type="text" class="form-control" id="person-identification">
    </div>
    <div class="form-group col-3">
        <label for="person-phonenumber">เบอร์โทรศัพท์:</label>
        <input type="text" class="form-control" id="person-phonenumber">
    </div>
    <div class="form-group col-5">
        <label for="person-email">E-mail:</label>
        <input type="text" class="form-control" id="person-email">
    </div>
</div>
<br>
<div class="alert alert-primary" role="alert">
    <h5>ข้อมูลที่อยู่ที่สามารถติดต่อได้ของผู้ขอรับใบอนุญาต</h5>
</div>
<div class="form-row">
    <div class="form-group col">
        <label for="person-address">รายละเอียดที่อยู่ (ห้องเลขที่, บ้านเลขที่, ตึก, ถนน)</label>
        <input type="text" class="form-control" id="person-address">
    </div>
</div>
<div class="form-row">
    <div class="form-group col">
        <label for="person-district">ตำบล:</label>
        <input type="text" class="form-control" id="person-district">
    </div>
    <div class="form-group col">
        <label for="person-amphoe">อำเภอ:</label>
        <input type="text" class="form-control" id="person-amphoe">  
    </div>
    <div class="form-group col">
        <label for="person-province">จังหวัด:</label>
        <input type="text" class="form-control" id="person-province">  
    </div>
    <div class="form-group col">
        <label for="person-zipcode">รหัสไปรษณีย์:</label>
        <input type="text" class="form-control" id="person-zipcode">  
    </div>
</div>
<br>
<div id="nextFirst" style="float:right;">
    <button id="nextOne" type="button" class="btn btn-primary">ถัดไป</button>
</div>
<div class="alert alert-primary" role="alert">
    <h5>รายละเอียดของบัญชีผู้ใช้</h5>
</div>
<div class="form-row">
    <div class="form-group col">
        <i style='font-size:34px' class="glyphicon glyphicon-user"></i>
        <br>
        <br>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="inputAddress2">ชื่อบัญชีผู้ใช้:</label>
                <input type="text" class="form-control" id="username" placeholder="ชื่อบัญชีผู้ใช้">
            </div>
            <div class="form-group col-4">
                <label for="inputAddress2">รหัสผ่าน:</label>
                <input type="text" class="form-control" id="password" placeholder="รหัสผ่าน">
            </div>
            <div class="form-group col-4">
                <label for="inputAddress2">ยืนยันรหัสผ่าน:</label>
                <input type="text" class="form-control" id="confirmpassword" placeholder="ยืนยันรหัสผ่าน">
            </div>
        </div>
        <div id="nextBack" style="float:right;">
            <button id="back" type="button" class="btn">ย้อนกลับ</button>
            <button id="next" type="button" class="btn btn-primary">ถัดไป</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="alert alert-primary" role="alert">
            <h5>ยืนยันการขอรับชื่อบัญชีผู้ใช้</h5>
        </div>
        <div class="text-center mb-3">
            <div class="text-center mb">
                <form>
                    <div class="row">
                        <div class="col">
                            <p style='font-size:20px'>
                                ชื่อผู้ขอบัญชี:
                                <br>ชื่อบัญชีผู้ใช้:
                                <br>เบอร์โทรศัพท์ที่สามารถติดต่อได้:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i style='font-size:18px;' class="fas fa-exclamation-circle text-danger">
                                กรุณาติดต่อเจ้าหน้าที่ที่สำนักงานภายใน 15 วัน</i>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="button" class="btn btn-light">ยกเลิก</button>
                            <button type="submit" class="btn btn-light" value="Register"
                                name="submit">ยืนยันการขอบัญชีผู้ใช้</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
<script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
<script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>