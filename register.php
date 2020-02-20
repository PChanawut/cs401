<!doctype html>
<html lang="en">

<head>
    <!-- config -->
    <?php include 'component/config.php' ?>
</head>

<!-- <style>
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input~.checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked~.checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked~.checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
</style> -->

<body>
    <!-- header -->
    <?php include 'component/header_notRegister.php' ?>

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
                    <li class="breadcrumb-item"><a href="#">สร้างไอดี</a></li>
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
                <div class="form-group col-mb">
                    <label for="inputEmail4">คำนำหน้า:</label>
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
                    </div>
                    <!-- <input type="email" class="form-control" id="inputEmail4"> -->
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
                    <label for="inputCity">อำเภอ:</label>
                    <input type="text" class="form-control" id="inputCity">
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


    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="stylesheet/jquery.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/popper.min.js" crossorigin="anonymous"></script>
    <script src="stylesheet/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>