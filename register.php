<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>สร้างบัญชีผู้ใช้</h4>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="custom-control custom-radio custom-control-inline col-sm">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">
                        <h5>สร้างบัญชีผู้ใช้สำหรับบุคคลธรรมดา</h5>
                    </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline col-sm">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">
                        <h5>สร้างบัญชีผู้ใช้สำหรับนิติบุคคล</h5>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <nav aria-label="breadcrumb" align="center">
            <ol class="breadcrumb bg-light">
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">ข้อมูลส่วนตัว</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">สร้างบัญชีผู้ใช้</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item active" aria-current="page">เสร็จสิ้น</li>
                </div>
            </ol>
        </nav>
        <form>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลส่วนตัวของผู้ขออนุญาต</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="inputState">คำนำหน้า:</label>
                    <select id="inputState" class="form-control">
                        <option selected>คำนำหน้า</option>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="inputPassword4">ชื่อ:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col">
                    <label for="inputPassword4">นามสกุล:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-2">
                    <label for="inputAddress">วันเดือนปีเกิด:</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="กรุณาเลือกวันเดือนปีเกิดของคุณ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="inputAddress">เลขบัตรประจำตัวประชาชน:</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="เลขบัตรประจำตัวประชาชน 13 หลัก">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress">เบอร์โทรศัพท์:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="เบอร์โทรศัพท์">
                </div>
                <div class="form-group col-5">
                    <label for="inputAddress">E-Mail:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="E-Mail">
                </div>
            </div>
            <br>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลที่อยู่ที่สามารถติดต่อได้ของผู้ขอรับใบอนุญาต</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">เลขที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">หมู่ที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ถนน:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ตำบล:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">อำเภอ:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">จังหวัด:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <!-- <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                    </div> -->
            <button type="submit" class="btn btn-primary">ถัดไป</button>
        </form>
    </div>
    <div class="container mt-5">
        <form>
            <div class="alert alert-primary" role="alert">
                <h5>รายละเอียดของบัญชีผู้ใช้</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <i style='font-size:40px' class="fas fa-user"></i>
                    <i style='font-size:40px' class="fas fa-building"></i>
                    <!-- <i style='font-size:34px' class="glyphicon glyphicon-user"></i> -->
                    <br>
                    <br>
                    <!-- <div class="form-row">
                            <div class="form-grou col-5">
                                <label for="inputAddress2">ชื่อผู้ขอรับบัญชีผู้ใช้:</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="ชื่อบัญชีผู้ใช้">
                            </div>
                            </div>
                            <br> -->
                    <div class="form-row">
                        <div class="form-grou col-4">
                            <label for="inputAddress2">ชื่อบัญชีผู้ใช้:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="ชื่อบัญชีผู้ใช้">
                        </div>
                        <div class="form-group col-4">
                            <label for="inputAddress2">รหัสผ่าน:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="รหัสผ่าน">
                        </div>
                        <div class="form-group col-4">
                            <label for="inputAddress2">ยืนยันรหัสผ่าน:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container mt-5 mx-auto">
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
                                    <button type="button" class="btn btn-light">ยืนยันการขอบัญชีผู้ใช้</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- page's company -->
        <form>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลของบริษัท</h5>
            </div>

            <div class="form-row">
                <div class="form-group col-8">
                    <label for="inputPassword4">ชื่อบริษัทหรือชื่อสถานที่ทำการ(ที่สามารถติดต่อได้):</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-4">
                    <label for="inputPassword4">จดทะเบียนวันที่:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="inputAddress">เลขทะเบียนบริษัท:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="เลขทะเบียนบริษัท">
                </div>
                <div class="form-group col-4">
                    <label for="inputAddress">เบอร์โทรศัพท์:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="เบอร์โทรศัพท์">
                </div>
                <div class="form-group col-5">
                    <label for="inputAddress">E-mail:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="E-mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">เลขที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">หมู่ที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ถนน:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ตำบล:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">อำเภอ:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">จังหวัด:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <br>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลที่อยู่ในการจัดเก็บหรือใช้งานวัตถุ</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">ชื่อสถานที่จัดเก็บวัตถุ:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress2">เลขที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">หมู่ที่:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ถนน:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group col-3">
                    <label for="inputAddress2">ตำบล:</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">อำเภอ:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">จังหวัด:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">รหัสไปรษณีย์:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ถัดไป</button>
        </form>
    </div>
    <!-- body officer -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>สร้างบัญชีผู้ใช้สำหรับเจ้าหน้าที่สำนักงานปรมาณูเพื่อสันติ</h4>
            </div>
        </div>
        <hr>
        <br>
        <nav aria-label="breadcrumb" align="center">
            <ol class="breadcrumb bg-light">
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">ข้อมูลส่วนตัว</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item"><a href="#">สร้างบัญชีผู้ใช้</a></li>
                </div>
                <div class="col-sm">
                    <li class="breadcrumb-item active" aria-current="page">เสร็จสิ้น</li>
                </div>
            </ol>
        </nav>
        <form>
            <div class="alert alert-primary" role="alert">
                <h5>ข้อมูลส่วนตัวของเจ้าหน้าที่</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="inputState">คำนำหน้า:</label>
                    <select id="inputState" class="form-control">
                        <option selected>คำนำหน้า</option>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                    <!-- <label for="inputEmail4">คำนำหน้า:</label>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            คำนำหน้า
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">นาย</a>
                            <a class="dropdown-item" href="#">นาง</a>
                            <a class="dropdown-item" href="#">นางสาว</a>
                        </div>
                    </div> -->
                </div>
                <div class="form-group col-4">
                    <label for="inputPassword4">ชื่อ:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-4">
                    <label for="inputPassword4">นามสกุล:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-2">
                    <label for="inputAddress">วันเดือนปีเกิด:</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="กรุณาเลือกวันเดือนปีเกิดของคุณ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="inputAddress">เลขบัตรประจำตัวประชาชน:</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="เลขบัตรประจำตัวประชาชน 13 หลัก">
                </div>
                <div class="form-group col-2">
                    <label for="inputAddress">เบอร์โทรศัพท์:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="เบอร์โทรศัพท์">
                </div>
                <div class="form-group col-4">
                    <label for="inputAddress">E-Mail:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="E-Mail">
                </div>
                <div class="form-group col-3">
                    <label for="inputState">ตำแหน่ง:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>คณะอนุกรรมการ</option>
                        <option>เจ้าหน้าที่ขออนุญาต</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">ID เครื่องวัดรังสีประจำตัว:</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ถัดไป</button>
        </form>
    </div>
    <div class="container mt-5">
        <form>
            <div class="alert alert-primary" role="alert">
                <h5>รายละเอียดของบัญชีผู้ใช้</h5>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <i style='font-size:40px' class="fas fa-user"></i>
                    <!-- <i style='font-size:40px' class="fas fa-building"></i> -->
                    <!-- <i style='font-size:34px' class="glyphicon glyphicon-user"></i> -->
                    <br>
                    <br>
                    <!-- <div class="form-row">
                            <div class="form-grou col-5">
                                <label for="inputAddress2">ชื่อผู้ขอรับบัญชีผู้ใช้:</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="ชื่อบัญชีผู้ใช้">
                            </div>
                            </div>
                            <br> -->
                    <div class="form-row">
                        <div class="form-grou col-4">
                            <label for="inputAddress2">ชื่อบัญชีผู้ใช้:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="ชื่อบัญชีผู้ใช้">
                        </div>
                        <div class="form-group col-4">
                            <label for="inputAddress2">รหัสผ่าน:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="รหัสผ่าน">
                        </div>
                        <div class="form-group col-4">
                            <label for="inputAddress2">ยืนยันรหัสผ่าน:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>