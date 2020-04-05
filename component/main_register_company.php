<!-- page's company -->
<div class="alert alert-primary" role="alert">
    <h5>ข้อมูลของบริษัท</h5>
</div>

<form id='company_register' method="post">
    <div class="form-row">
        <div class="form-group col">
            <label for="company_name">ชื่อบริษัท:</label>
            <input type="text" class="form-control" id="company_name">
        </div>
        <div class="form-group col">
            <label for="company_office_name">ชื่อสถานที่ทำการ(ที่สามารถติดต่อได้):</label>
            <input type="text" class="form-control" id="company_office_name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="company_date_enroll">วันเดือนปีเกิด:</label>
            <input type="date" aria-describedby="dateHelp" id="company_date_enroll" class="form-control">
            <small id="dateHelp" class="form-text text-danger">*ใส่ปีเป็น คศ.</small>
        </div>
        <div class="form-group col">
            <label for="company_enrollno">เลขทะเบียนบริษัท:</label>
            <input type="text" class="form-control" id="company_enrollno">
        </div>
        <div class="form-group col">
            <label for="company_phone">เบอร์โทรศัพท์:</label>
            <input type="text" class="form-control" id="company_phone">
        </div>
        <div class="form-group col">
            <label for="company_fax">โทรสาร:</label>
            <input type="text" class="form-control" id="company_fax">
        </div>
        <div class="form-group col">
            <label for="company_email">อีเมล์:</label>
            <input type="text" class="form-control" id="company_email">
        </div>
    </div>
    <br>

    <!-- ที่อยู่อาศัย -->
    <div class="alert alert-primary" role="alert">
        <h5>ข้อมูลที่อยู่ที่สามารถติดต่อได้ของบริษัทขอรับใบอนุญาต</h5>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="company_address">รายละเอียดที่อยู่ (ห้องเลขที่, บ้านเลขที่, หมู่, ตึก, ถนน)</label>
            <input type="text" class="form-control" id="company_address">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="company_district">ตำบล:</label>
            <input type="text" class="form-control" id="company_district">
        </div>
        <div class="form-group col">
            <label for="company_amphoe">อำเภอ:</label>
            <input type="text" class="form-control" id="company_amphoe">
        </div>
        <div class="form-group col">
            <label for="company_province">จังหวัด:</label>
            <input type="text" class="form-control" id="company_province">
        </div>
        <div class="form-group col">
            <label for="company_zipcode">รหัสไปรษณีย์:</label>
            <input type="text" class="form-control" id="company_zipcode">
        </div>
    </div>
    <br>
    <!-- สถานที่เก็บ -->
    <div class="alert alert-primary" role="alert">
        <h5>ข้อมูลที่อยู่สถานที่เก็บวัสดุบริษัทขอรับใบอนุญาต</h5>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check-address-storage-company">
        <label class="form-check-label mb-3" for="check-address-storage-company">ใช้สถานที่เก็บเดียวกับที่อยู่</label>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="company_storage_address">รายละเอียดที่อยู่ (ห้องเลขที่, บ้านเลขที่, หมู่, ตึก, ถนน)</label>
            <input type="text" class="form-control" id="company_storage_address">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label for="company_storage_district">ตำบล:</label>
            <input type="text" class="form-control" id="company_storage_district">
        </div>
        <div class="form-group col">
            <label for="company_storage_amphoe">อำเภอ:</label>
            <input type="text" class="form-control" id="company_storage_amphoe">
        </div>
        <div class="form-group col">
            <label for="company_storage_province">จังหวัด:</label>
            <input type="text" class="form-control" id="company_storage_province">
        </div>
        <div class="form-group col">
            <label for="company_storage_zipcode">รหัสไปรษณีย์:</label>
            <input type="text" class="form-control" id="company_storage_zipcode">
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
                <label for="company_username" class="col-sm-2 col-form-label">ชื่อบัญชีผู้ใช้:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="company_username">
                </div>
            </div>
            <div class="form-group row justify-content-md-center">
                <label for="company_password" class="col-sm-2 col-form-label">รหัสผ่าน:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="company_password">
                </div>
            </div>
            <div class="form-group row justify-content-md-center">
                <label for="company_repassword" class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="company_repassword">
                </div>
            </div>
        </div>
    </div>
    <div id="nextBack" class="mb-4" style="float:right;">
        <button onclick='document.location.href="./";' type="button" class="btn">ย้อนกลับ</button>
        <button class="btn btn-primary" type="submit">ถัดไป</button>
    </div>
</form>