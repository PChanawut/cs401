<div class="alert alert-primary" role="alert">
    <h5>ข้อมูลส่วนตัวของผู้ขออนุญาต</h5>
</div>
<form id='person-register' method="post">
    <div class="form-row">
        <div class="form-group col-2">
            <label for="person_nametitle">คำนำหน้า:</label>
            <select class="custom-select" id="person_nametitle">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        <div class="form-group col">
            <label for="person_firstname">ชื่อ:</label>
            <input type="text" class="form-control" id="person_firstname">
        </div>
        <div class="form-group col">
            <label for="person_lastname">นามสกุล:</label>
            <input type="text" class="form-control" id="person_lastname">
        </div>
        <div class="form-group col-3">
            <label for="person_birthday">วันเดือนปีเกิด:</label>
            <input type="text" class="form-control" id="person_birthday">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-4">
            <label for="person_identification">เลขบัตรประจำตัวประชาชน:</label>
            <input type="text" class="form-control" id="person_identification">
        </div>
        <div class="form-group col-3">
            <label for="person_phonenumber">เบอร์โทรศัพท์:</label>
            <input type="text" class="form-control" id="person_phonenumber">
        </div>
        <div class="form-group col-5">
            <label for="person_email">E-mail:</label>
            <input type="text" class="form-control" id="person_email">
        </div>
    </div>
    <br>

    <!-- ที่อยู่อาศัย -->
    <div class="alert alert-primary" role="alert">
        <h5>ข้อมูลที่อยู่ที่สามารถติดต่อได้ของผู้ขอรับใบอนุญาต</h5>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="person_address">รายละเอียดที่อยู่ (ห้องเลขที่, บ้านเลขที่, หมู่, ตึก, ถนน)</label>
            <input type="text" class="form-control" id="person_address">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="person_district">ตำบล:</label>
            <input type="text" class="form-control" id="person_district">
        </div>
        <div class="form-group col">
            <label for="person_amphoe">อำเภอ:</label>
            <input type="text" class="form-control" id="person_amphoe">
        </div>
        <div class="form-group col">
            <label for="person_province">จังหวัด:</label>
            <input type="text" class="form-control" id="person_province">
        </div>
        <div class="form-group col">
            <label for="person_zipcode">รหัสไปรษณีย์:</label>
            <input type="text" class="form-control" id="person_zipcode">
        </div>
    </div>
    <br>

    <!-- สถานที่เก็บ -->
    <div class="alert alert-primary" role="alert">
        <h5>ข้อมูลที่อยู่สถานที่เก็บวัสดุขอรับใบอนุญาต</h5>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check-address-storage">
        <label class="form-check-label mb-3" for="check-address-storage">ใช้สถานที่เก็บเดียวกับที่อยู่</label>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="person_address">รายละเอียดที่อยู่ (ห้องเลขที่, บ้านเลขที่, หมู่, ตึก, ถนน)</label>
            <input type="text" class="form-control" id="person_address">
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
    <br>

    <!-- username password -->
    <div class="alert alert-primary" role="alert">
        <h5>รายละเอียดของบัญชีผู้ใช้</h5>
    </div>
    <div class="container">
        <div class='col-10'>
            <div class="form-group row justify-content-md-center">
                <label for="person_username" class="col-sm-2 col-form-label">ชื่อบัญชีผู้ใช้:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="person_username">
                </div>
            </div>
            <div class="form-group row justify-content-md-center">
                <label for="person_password" class="col-sm-2 col-form-label">รหัสผ่าน:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="person_password">
                </div>
            </div>
            <div class="form-group row justify-content-md-center">
                <label for="person_repassword" class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="person_repassword">
                </div>
            </div>
        </div>
    </div>
    <div id="nextBack" class="mb-4" style="float:right;">
        <button onclick='document.location.href="./";' type="button" class="btn">ย้อนกลับ</button>
        <button type="submit" class="btn btn-primary">ถัดไป</button>
    </div>
</form>