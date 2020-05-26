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
        <div class="form-group col-3">
            <label for="company_date_enroll">วันจดใบอนุญาต:</label>
            <input type="date" aria-describedby="dateHelp" id="company_date_enroll" class="form-control">
            <small id="dateHelp" class="form-text text-danger">*ใส่ปีเป็น คศ.</small>
        </div>
    </div>
    <div class="form-row">
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
    <div class="alert alert-primary" role="alert">
        <h5>ไฟล์ใบอนุญาต</h5>
    </div>
    <div class="container">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="filepdf-upload" required>
            <label class="custom-file-label" for="validatedCustomFile">ไฟล์ใบอนุญาต</label>
            <div class="invalid-feedback">ไฟล์ใบอนุญาตไม่ถูกต้อง</div>
        </div>
        <!-- <a href="php/php_filedownload.php">aaa</a> -->
    </div>
    <div id="nextBack" class="mb-4 mt-4" style="float:right;">
        <button onclick='document.location.href="./";' type="button" class="btn">ย้อนกลับ</button>
        <button class="btn btn-primary" type="submit">ถัดไป</button>
    </div>
</form>